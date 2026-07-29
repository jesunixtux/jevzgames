<?php

declare(strict_types=1);

function jg_static_url(string $url): string
{
    if (strpos($url, 'lang=es') === false) {
        return $url;
    }

    $decoded = html_entity_decode($url, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $origin = '';
    $candidate = $decoded;

    if (strpos($candidate, 'https://jevzgames.com/') === 0) {
        $origin = 'https://jevzgames.com';
        $candidate = substr($candidate, strlen($origin));
    } elseif (strpos($candidate, '/') !== 0 || strpos($candidate, '//') === 0) {
        return $url;
    }

    $parts = parse_url($candidate);
    if ($parts === false) {
        return $url;
    }

    $query = array();
    parse_str(isset($parts['query']) ? $parts['query'] : '', $query);

    if (!isset($query['lang']) || $query['lang'] !== 'es') {
        return $url;
    }

    unset($query['lang']);

    $path = isset($parts['path']) && $parts['path'] !== '' ? $parts['path'] : '/';
    if (strpos($path, '/es/') !== 0 && $path !== '/es') {
        $path = '/es' . ($path === '/' ? '/' : $path);
    }

    $rebuilt = $origin . $path;
    if ($query !== array()) {
        $separator = strpos($url, '&amp;') !== false ? '&amp;' : '&';
        $rebuilt .= '?' . str_replace('&', $separator, http_build_query($query));
    }

    if (isset($parts['fragment']) && $parts['fragment'] !== '') {
        $rebuilt .= '#' . $parts['fragment'];
    }

    return $rebuilt;
}

$html = stream_get_contents(STDIN);
if ($html === false) {
    fwrite(STDERR, "Could not read rendered HTML.\n");
    exit(74);
}

$html = preg_replace_callback(
    '~https://jevzgames\.com/[^"\'<>\s]+~u',
    static function (array $match): string {
        return jg_static_url($match[0]);
    },
    $html
);

$html = preg_replace_callback(
    '~(?<=")/(?!/)[^"]*lang=es[^"]*~u',
    static function (array $match): string {
        return jg_static_url($match[0]);
    },
    $html
);

$html = preg_replace_callback(
    "~(?<=')/(?!/)[^']*lang=es[^']*~u",
    static function (array $match): string {
        return jg_static_url($match[0]);
    },
    $html
);

if ($html === null) {
    fwrite(STDERR, "Failed rewriting language URLs.\n");
    exit(70);
}

echo $html;
