# JEVZGames website

This branch keeps the original PHP source while producing a GitHub Pages-compatible static copy.

## Branches

- `main`: traditional PHP hosting.
- `github-web`: GitHub Pages build and deployment files.

Changes made here do not modify `main` unless they are merged manually.

## How the static build works

1. The PHP source remains unchanged.
2. `tools/build-static.sh` renders every `index.php` into HTML.
3. Main bilingual pages are generated in English at their normal path and in Spanish under `/es/`.
4. Static assets and existing HTML documentation are copied into `docs/`.
5. `.github/workflows/build-github-pages.yml` rebuilds and commits `docs/` after changes to `github-web`.

The generated `docs/` folder contains no PHP and is the folder GitHub Pages must publish.

## GitHub Pages configuration

In the repository settings:

1. Open **Settings → Pages**.
2. Under **Build and deployment**, select **Deploy from a branch**.
3. Choose branch **github-web**.
4. Choose folder **/docs**.
5. Save.

The generated `docs/CNAME` uses `jevzgames.com`. Configure the domain DNS for GitHub Pages before cancelling the previous hosting.

## Build locally

PHP 8.3 is recommended.

```bash
bash tools/build-static.sh
```

Then serve the generated folder for testing:

```bash
php -S 127.0.0.1:8080 -t docs
```

Do not edit files inside `docs/` manually. They are regenerated from the PHP source.
