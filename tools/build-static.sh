#!/usr/bin/env bash

set -euo pipefail

ROOT="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
OUT="$ROOT/docs"

rm -rf "$OUT"
mkdir -p "$OUT"

# Copy files that GitHub Pages can serve directly. PHP source, Apache rules,
# build tools and repository metadata stay outside the published /docs folder.
while IFS= read -r -d '' file; do
    relative="${file#"$ROOT/"}"

    case "$relative" in
        .git/*|.github/*|docs/*|tools/*|_includes/*|*.php|.htaccess|*/.htaccess|.gitattributes|README.md)
            continue
            ;;
    esac

    destination="$OUT/$relative"
    mkdir -p "$(dirname "$destination")"
    cp -p "$file" "$destination"
done < <(find "$ROOT" -type f -not -path "$ROOT/.git/*" -print0)

# Render each index.php in a fresh PHP process so the shared functions can be
# loaded safely for every page. Pages using _includes/site.php also receive a
# Spanish copy under /es/ with static URLs instead of ?lang=es.
while IFS= read -r -d '' page; do
    relative="${page#"$ROOT/"}"

    case "$relative" in
        _includes/*|tools/*|docs/*)
            continue
            ;;
    esac

    if [[ "$relative" == "index.php" ]]; then
        public_directory=""
    else
        public_directory="${relative%/index.php}"
    fi

    english_directory="$OUT${public_directory:+/$public_directory}"
    mkdir -p "$english_directory"

    php "$ROOT/tools/render-page.php" "$ROOT" "$relative" en \
        | php "$ROOT/tools/rewrite-static-urls.php" \
        > "$english_directory/index.html"

    if grep -q '_includes/site\.php' "$page"; then
        spanish_directory="$OUT/es${public_directory:+/$public_directory}"
        mkdir -p "$spanish_directory"

        php "$ROOT/tools/render-page.php" "$ROOT" "$relative" es \
            | php "$ROOT/tools/rewrite-static-urls.php" \
            > "$spanish_directory/index.html"
    fi
done < <(find "$ROOT" -type f -name 'index.php' \
    -not -path "$ROOT/.git/*" \
    -not -path "$ROOT/.github/*" \
    -not -path "$ROOT/docs/*" \
    -print0)

printf 'jevzgames.com\n' > "$OUT/CNAME"
touch "$OUT/.nojekyll"

if find "$OUT" -type f -name '*.php' -print -quit | grep -q .; then
    echo 'Static build failed: PHP files reached docs/.' >&2
    exit 70
fi

if [[ ! -s "$OUT/index.html" ]]; then
    echo 'Static build failed: docs/index.html was not generated.' >&2
    exit 70
fi

echo "Static site generated in $OUT"
