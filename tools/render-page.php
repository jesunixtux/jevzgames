<?php

declare(strict_types=1);

if ($argc !== 4) {
    fwrite(STDERR, "Usage: php tools/render-page.php <root> <relative-index.php> <en|es>\n");
    exit(64);
}

$root = realpath($argv[1]);
$relative = ltrim(str_replace('\\', '/', $argv[2]), '/');
$lang = strtolower($argv[3]);

if ($root === false || !is_dir($root)) {
    fwrite(STDERR, "Invalid repository root.\n");
    exit(66);
}

if (!in_array($lang, array('en', 'es'), true)) {
    fwrite(STDERR, "Language must be en or es.\n");
    exit(64);
}

$page = realpath($root . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $relative));
$rootPrefix = rtrim($root, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;

if ($page === false || !is_file($page) || strpos($page, $rootPrefix) !== 0) {
    fwrite(STDERR, "Page is outside the repository or does not exist: {$relative}\n");
    exit(66);
}

$relativeDirectory = str_replace('\\', '/', dirname('/' . $relative));
$publicPath = $relativeDirectory === '/' ? '/' : rtrim($relativeDirectory, '/') . '/';

/*
 * PHP redirects cannot run on GitHub Pages. Detect the small redirect entry
 * points used by this site and emit a static HTML redirect instead.
 */
$source = file_get_contents($page);
if ($source === false) {
    fwrite(STDERR, "Could not read page source: {$relative}\n");
    exit(74);
}

if (preg_match("~header\\(\\s*['\"]Location:\\s*['\"]\\s*\\.\\s*jg_path\\(\\s*['\"]([^'\"]+)['\"]~", $source, $match) === 1) {
    $target = '/' . ltrim($match[1], '/');
    $target = rtrim($target, '/') . '/';

    if ($lang === 'es') {
        $target = '/es' . $target;
    }

    $escapedTarget = htmlspecialchars($target, ENT_QUOTES, 'UTF-8');
    $canonical = 'https://jevzgames.com' . $target;
    $escapedCanonical = htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8');

    echo "<!doctype html>\n";
    echo '<html lang="' . $lang . '">' . "\n";
    echo "<head>\n";
    echo "    <meta charset=\"utf-8\">\n";
    echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n";
    echo "    <meta http-equiv=\"refresh\" content=\"0; url={$escapedTarget}\">\n";
    echo "    <link rel=\"canonical\" href=\"{$escapedCanonical}\">\n";
    echo "    <title>Redirecting to JumpFall</title>\n";
    echo "</head>\n";
    echo "<body>\n";
    echo "    <p><a href=\"{$escapedTarget}\">Continue to JumpFall</a></p>\n";
    echo "    <script>location.replace(" . json_encode($target, JSON_UNESCAPED_SLASHES) . ");</script>\n";
    echo "</body>\n";
    echo "</html>\n";
    exit(0);
}

$_GET = $lang === 'es' ? array('lang' => 'es') : array();
$_POST = array();
$_COOKIE = array();
$_REQUEST = $_GET;

$_SERVER['SCRIPT_NAME'] = $publicPath . 'index.php';
$_SERVER['PHP_SELF'] = $_SERVER['SCRIPT_NAME'];
$_SERVER['REQUEST_URI'] = $publicPath . ($lang === 'es' ? '?lang=es' : '');
$_SERVER['HTTP_HOST'] = 'jevzgames.com';
$_SERVER['SERVER_NAME'] = 'jevzgames.com';
$_SERVER['HTTPS'] = 'on';
$_SERVER['REQUEST_METHOD'] = 'GET';

$previousDirectory = getcwd();
if ($previousDirectory === false || !chdir(dirname($page))) {
    fwrite(STDERR, "Could not enter the page directory.\n");
    exit(74);
}

ob_start();
try {
    require $page;
    $html = ob_get_clean();
} catch (Throwable $error) {
    ob_end_clean();
    chdir($previousDirectory);
    fwrite(STDERR, "Failed rendering {$relative}: {$error->getMessage()}\n");
    exit(70);
}

chdir($previousDirectory);
echo $html;
