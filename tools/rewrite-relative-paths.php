<?php

declare(strict_types=1);

$publicDirectory = isset($argv[1]) ? trim(str_replace('\\', '/', $argv[1]), '/') : '';
$depth = $publicDirectory === '' ? 0 : count(array_filter(explode('/', $publicDirectory), 'strlen'));
$rootPrefix = $depth === 0 ? '' : str_repeat('../', $depth);

function jg_relative_root_url(string $url, string $rootPrefix): string
{
    if ($url === '' || $url[0] !== '/' || strpos($url, '//') === 0) {
        return $url;
    }

    $path = ltrim($url, '/');
    return $rootPrefix . $path;
}

$html = stream_get_contents(STDIN);
if ($html === false) {
    fwrite(STDERR, "Could not read rendered HTML.\n");
    exit(74);
}

/*
 * Root-relative URLs work on jevzgames.com but break on the temporary project
 * URL jesunixtux.github.io/jevzgames/. Converting them to page-relative URLs
 * makes the exact same generated files work in both places.
 */
$html = preg_replace_callback(
    '~\b(href|src|action|poster)=("|\')(/(?!/)[^"\']*)\2~iu',
    static function (array $match) use ($rootPrefix): string {
        return $match[1] . '=' . $match[2] . jg_relative_root_url($match[3], $rootPrefix) . $match[2];
    },
    $html
);

/* Handle root-relative candidates inside srcset attributes. */
$html = preg_replace_callback(
    '~\bsrcset=("|\')([^"\']*)\1~iu',
    static function (array $match) use ($rootPrefix): string {
        $rewritten = preg_replace_callback(
            '~(^|,\s*)(/(?!/)[^\s,]+)~u',
            static function (array $candidate) use ($rootPrefix): string {
                return $candidate[1] . jg_relative_root_url($candidate[2], $rootPrefix);
            },
            $match[2]
        );

        return 'srcset=' . $match[1] . ($rewritten ?? $match[2]) . $match[1];
    },
    $html
);

/* Static replacements for the legacy PHP redirect page. */
$html = preg_replace_callback(
    '~(content=("|\')[^"\']*?url=)(/(?!/)[^"\']*)(\2)~iu',
    static function (array $match) use ($rootPrefix): string {
        return $match[1] . jg_relative_root_url($match[3], $rootPrefix) . $match[4];
    },
    $html
);

$html = preg_replace_callback(
    '~location\.replace\(("|\')(/(?!/)[^"\']*)\1\)~iu',
    static function (array $match) use ($rootPrefix): string {
        return 'location.replace(' . $match[1] . jg_relative_root_url($match[2], $rootPrefix) . $match[1] . ')';
    },
    $html
);

if ($html === null) {
    fwrite(STDERR, "Failed rewriting root-relative URLs.\n");
    exit(70);
}

echo $html;
