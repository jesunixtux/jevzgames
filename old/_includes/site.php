<?php
const JG_SITE_NAME = 'JEVZGames';
const JG_BASE_URL = 'https://jevzgames.cl';
const JG_OG_IMAGE = '/assets/img/og-jumpfall.svg';

function jg_e($value) {
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}

function jg_supported_langs() {
    return array(
        'en' => 'English',
        'es' => 'Español'
    );
}

function jg_lang() {
    static $lang = null;
    if ($lang !== null) {
        return $lang;
    }

    $requested = isset($_GET['lang']) ? strtolower((string)$_GET['lang']) : '';
    $lang = $requested === 'es' ? 'es' : 'en';
    return $lang;
}

function jg_text($english, $spanish) {
    return jg_lang() === 'es' ? $spanish : $english;
}

function jg_local_prefix() {
    if (isset($_SERVER['SCRIPT_NAME']) && strpos($_SERVER['SCRIPT_NAME'], '/jevzgames/') === 0) {
        return '/jevzgames';
    }

    return '';
}

function jg_normalize_path($path = '/') {
    $path = '/' . ltrim((string)$path, '/');
    if ($path === '/') {
        return '/';
    }

    return rtrim($path, '/') . '/';
}

function jg_path($path = '/', $lang = null) {
    $lang = $lang === null ? jg_lang() : $lang;
    $path = (string)$path;
    $fragment = '';
    $query = '';

    $hashPos = strpos($path, '#');
    if ($hashPos !== false) {
        $fragment = substr($path, $hashPos);
        $path = substr($path, 0, $hashPos);
    }

    $queryPos = strpos($path, '?');
    if ($queryPos !== false) {
        $query = substr($path, $queryPos + 1);
        $path = substr($path, 0, $queryPos);
    }

    $url = jg_local_prefix() . jg_normalize_path($path);

    if ($lang === 'es') {
        $query = $query === '' ? 'lang=es' : $query . '&lang=es';
    }

    if ($query !== '') {
        $url .= '?' . $query;
    }

    return $url . $fragment;
}

function jg_asset($path) {
    return jg_local_prefix() . '/' . ltrim((string)$path, '/');
}

function jg_url($path = '/', $lang = null) {
    $lang = $lang === null ? jg_lang() : $lang;
    $path = jg_normalize_path($path);
    $url = rtrim(JG_BASE_URL, '/') . $path;

    if ($lang === 'es') {
        $url .= '?lang=es';
    }

    return $url;
}

function jg_current_public_path() {
    $script = isset($_SERVER['SCRIPT_NAME']) ? (string)$_SERVER['SCRIPT_NAME'] : '/';
    $prefix = jg_local_prefix();

    if ($prefix !== '' && strpos($script, $prefix) === 0) {
        $script = substr($script, strlen($prefix));
    }

    $script = preg_replace('#/index\.php$#', '/', $script);
    return jg_normalize_path($script);
}

function jg_json($data) {
    return json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

function jg_head(array $page) {
    $title = isset($page['title']) ? $page['title'] : JG_SITE_NAME;
    $description = isset($page['description']) ? $page['description'] : jg_text(
        'Official website for JEVZGames, an indie game project focused on Jumpfall and community tools.',
        'Sitio oficial de JEVZGames, un proyecto indie enfocado en Jumpfall y herramientas para la comunidad.'
    );
    $path = isset($page['path']) ? $page['path'] : '/';
    $canonical = jg_url($path);
    $type = isset($page['type']) ? $page['type'] : 'website';
    $image = isset($page['image']) ? $page['image'] : JG_OG_IMAGE;
    $imageUrl = (strpos($image, 'http') === 0) ? $image : rtrim(JG_BASE_URL, '/') . '/' . ltrim($image, '/');
    $jsonLd = isset($page['jsonld']) ? $page['jsonld'] : array();
    $locale = jg_lang() === 'es' ? 'es_CL' : 'en_US';
    $alternateLocale = jg_lang() === 'es' ? 'en_US' : 'es_CL';
?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo jg_e($title); ?></title>
    <meta name="description" content="<?php echo jg_e($description); ?>">
    <link rel="canonical" href="<?php echo jg_e($canonical); ?>">
    <link rel="alternate" hreflang="en" href="<?php echo jg_e(jg_url($path, 'en')); ?>">
    <link rel="alternate" hreflang="es" href="<?php echo jg_e(jg_url($path, 'es')); ?>">
    <link rel="alternate" hreflang="x-default" href="<?php echo jg_e(jg_url($path, 'en')); ?>">
    <meta property="og:site_name" content="<?php echo jg_e(JG_SITE_NAME); ?>">
    <meta property="og:type" content="<?php echo jg_e($type); ?>">
    <meta property="og:locale" content="<?php echo jg_e($locale); ?>">
    <meta property="og:locale:alternate" content="<?php echo jg_e($alternateLocale); ?>">
    <meta property="og:title" content="<?php echo jg_e($title); ?>">
    <meta property="og:description" content="<?php echo jg_e($description); ?>">
    <meta property="og:url" content="<?php echo jg_e($canonical); ?>">
    <meta property="og:image" content="<?php echo jg_e($imageUrl); ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo jg_e($title); ?>">
    <meta name="twitter:description" content="<?php echo jg_e($description); ?>">
    <meta name="twitter:image" content="<?php echo jg_e($imageUrl); ?>">
    <meta name="theme-color" content="#111827">
    <link rel="stylesheet" href="<?php echo jg_e(jg_asset('/assets/css/site.css')); ?>">
<?php foreach ($jsonLd as $schema): ?>
    <script type="application/ld+json"><?php echo jg_json($schema); ?></script>
<?php endforeach; ?>
<?php
}

function jg_header($active = '') {
    $items = array(
        'home' => array('label' => jg_text('Home', 'Inicio'), 'href' => '/'),
        'games' => array('label' => jg_text('Games', 'Juegos'), 'href' => '/games/'),
        'jumpfall' => array('label' => 'Jumpfall', 'href' => '/games/jumpfall/'),
        'press' => array('label' => jg_text('Press', 'Prensa'), 'href' => '/press/jumpfall/'),
        'about' => array('label' => jg_text('About', 'Acerca de'), 'href' => '/about/'),
        'support' => array('label' => jg_text('Support', 'Soporte'), 'href' => '/support/')
    );
    $currentPath = jg_current_public_path();
?>
    <header class="site-header">
        <a class="skip-link" href="#main"><?php echo jg_e(jg_text('Skip to content', 'Saltar al contenido')); ?></a>
        <nav class="nav-shell" aria-label="<?php echo jg_e(jg_text('Main navigation', 'Navegación principal')); ?>">
            <a class="brand-link" href="<?php echo jg_e(jg_path('/')); ?>" aria-label="<?php echo jg_e(jg_text('JEVZGames home', 'Inicio de JEVZGames')); ?>">
                <span class="brand-mark">JG</span>
                <span class="brand-text">JEVZGames</span>
            </a>
            <div class="nav-actions">
                <div class="nav-links">
                    <?php foreach ($items as $key => $item): ?>
                        <a class="<?php echo $active === $key ? 'is-active' : ''; ?>" href="<?php echo jg_e(jg_path($item['href'])); ?>"><?php echo jg_e($item['label']); ?></a>
                    <?php endforeach; ?>
                </div>
                <div class="language-switcher" aria-label="<?php echo jg_e(jg_text('Language selector', 'Selector de idioma')); ?>">
                    <a class="<?php echo jg_lang() === 'en' ? 'is-active' : ''; ?>" href="<?php echo jg_e(jg_path($currentPath, 'en')); ?>" hreflang="en" lang="en">EN</a>
                    <a class="<?php echo jg_lang() === 'es' ? 'is-active' : ''; ?>" href="<?php echo jg_e(jg_path($currentPath, 'es')); ?>" hreflang="es" lang="es">ES</a>
                </div>
            </div>
        </nav>
    </header>
<?php
}

function jg_footer() {
?>
    <footer class="site-footer">
        <div class="footer-grid">
            <div>
                <strong>JEVZGames</strong>
                <p><?php echo jg_e(jg_text(
                    'Independent game project focused on Jumpfall, player-made levels and accessible tools.',
                    'Proyecto indie enfocado en Jumpfall, niveles creados por jugadores y herramientas accesibles.'
                )); ?></p>
            </div>
            <nav aria-label="<?php echo jg_e(jg_text('Footer navigation', 'Navegación del pie de página')); ?>">
                <a href="<?php echo jg_e(jg_path('/games/jumpfall/')); ?>">Jumpfall</a>
                <a href="<?php echo jg_e(jg_path('/games/jumpfall/level-editor/')); ?>"><?php echo jg_e(jg_text('Level Editor', 'Editor de Niveles')); ?></a>
                <a href="<?php echo jg_e(jg_path('/games/jumpfall/community-maps/')); ?>"><?php echo jg_e(jg_text('Community Maps', 'Mapas Comunitarios')); ?></a>
                <a href="<?php echo jg_e(jg_path('/support/')); ?>"><?php echo jg_e(jg_text('Support', 'Soporte')); ?></a>
            </nav>
        </div>
        <div class="footer-bottom">
            <span>&copy; <?php echo date('Y'); ?> JEVZGames.</span>
            <span><?php echo jg_e(jg_text(
                'Jumpfall is an indie game developed by JEVZGames.',
                'Jumpfall es un videojuego indie desarrollado por JEVZGames.'
            )); ?></span>
        </div>
    </footer>
<?php
}

function jg_org_schema() {
    return array(
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => 'JEVZGames',
        'url' => JG_BASE_URL . '/',
        'description' => jg_text(
            'JEVZGames is an independent game project developing Jumpfall and related community tools.',
            'JEVZGames es un proyecto independiente que desarrolla Jumpfall y herramientas relacionadas para la comunidad.'
        )
    );
}

function jg_website_schema() {
    return array(
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => 'JEVZGames',
        'url' => JG_BASE_URL . '/',
        'inLanguage' => jg_lang(),
        'publisher' => array(
            '@type' => 'Organization',
            'name' => 'JEVZGames'
        )
    );
}

function jg_jumpfall_schema() {
    return array(
        '@context' => 'https://schema.org',
        '@type' => 'VideoGame',
        'name' => 'Jumpfall',
        'url' => jg_url('/games/jumpfall/'),
        'inLanguage' => jg_lang(),
        'description' => jg_text(
            'Jumpfall is an indie game developed by JEVZGames, featuring level editor tools, community maps and Steam integration.',
            'Jumpfall es un videojuego indie desarrollado por JEVZGames, con herramientas de editor de niveles, mapas comunitarios e integración con Steam.'
        ),
        'publisher' => array(
            '@type' => 'Organization',
            'name' => 'JEVZGames',
            'url' => JG_BASE_URL . '/'
        ),
        'author' => array(
            '@type' => 'Organization',
            'name' => 'JEVZGames',
            'url' => JG_BASE_URL . '/'
        ),
        'applicationCategory' => 'Game',
        'genre' => jg_lang() === 'es' ? array('Juego de plataformas', 'Juego indie') : array('Platform game', 'Indie game')
    );
}
