<?php
require dirname(__DIR__, 2) . '/_includes/site.php';
$skinManualPath = jg_lang() === 'es' ? '/games/jumpfall/tutorial/skin/es/' : '/games/jumpfall/tutorial/skin/en/';
$page = array(
    'title' => jg_text('Jumpfall - Official Game by JEVZGames', 'Jumpfall - Juego oficial de JEVZGames'),
    'description' => jg_text(
        'Official page for Jumpfall, an indie game developed by JEVZGames, featuring level editor tools, community maps and Steam integration.',
        'Página oficial de Jumpfall, un videojuego indie desarrollado por JEVZGames, con editor de niveles, mapas comunitarios e integración con Steam.'
    ),
    'path' => '/games/jumpfall/',
    'jsonld' => array(jg_org_schema(), jg_jumpfall_schema())
);
?><!doctype html>
<html lang="<?php echo jg_e(jg_lang()); ?>">
<head>
<?php jg_head($page); ?>
</head>
<body>
<?php jg_header('jumpfall'); ?>
<main id="main" class="page">
    <div class="breadcrumb"><a href="<?php echo jg_e(jg_path('/games/')); ?>"><?php echo jg_e(jg_text('Games', 'Juegos')); ?></a> / Jumpfall</div>
    <section class="hero">
        <div>
            <span class="eyebrow"><?php echo jg_e(jg_text('Official Game', 'Juego oficial')); ?></span>
            <h1>Jumpfall</h1>
            <p class="lead"><?php echo jg_e(jg_text(
                'Jumpfall is an indie game developed by JEVZGames.',
                'Jumpfall es un videojuego indie desarrollado por JEVZGames.'
            )); ?></p>
            <div class="actions">
                <a class="button success" href="#steam"><?php echo jg_e(jg_text('Steam Playtest', 'Playtest en Steam')); ?></a>
                <a class="button secondary" href="<?php echo jg_e(jg_path('/games/jumpfall/level-editor/')); ?>"><?php echo jg_e(jg_text('Level Editor', 'Editor de Niveles')); ?></a>
                <a class="button secondary" href="<?php echo jg_e(jg_path('/games/jumpfall/community-maps/')); ?>"><?php echo jg_e(jg_text('Community Maps', 'Mapas Comunitarios')); ?></a>
            </div>
        </div>
        <div class="visual-card" role="img" aria-label="<?php echo jg_e(jg_text('Jumpfall official artwork placeholder', 'Arte oficial provisional de Jumpfall')); ?>">
            <strong>Jumpfall</strong>
            <span><?php echo jg_e(jg_text(
                'Level editor tools, community maps and Steam integration.',
                'Editor de niveles, mapas comunitarios e integración con Steam.'
            )); ?></span>
        </div>
    </section>

    <section class="section">
        <div class="section-header">
            <h2><?php echo jg_e(jg_text('Features', 'Características')); ?></h2>
            <p><?php echo jg_e(jg_text(
                'Confirmed public-facing areas of the current Jumpfall project.',
                'Áreas públicas confirmadas del proyecto actual de Jumpfall.'
            )); ?></p>
        </div>
        <div class="grid">
            <article class="card">
                <h3><?php echo jg_e(jg_text('Level Editor', 'Editor de Niveles')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Create, test and compile playable custom maps using Jumpfall editor tools.',
                    'Crea, prueba y compila mapas personalizados jugables usando las herramientas del editor de Jumpfall.'
                )); ?></p>
            </article>
            <article class="card">
                <h3><?php echo jg_e(jg_text('Community Maps', 'Mapas Comunitarios')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Jumpfall supports community map workflows built around compiled map files and local assets.',
                    'Jumpfall soporta flujos de mapas comunitarios basados en archivos compilados y assets locales.'
                )); ?></p>
            </article>
            <article class="card">
                <h3><?php echo jg_e(jg_text('Steam Integration', 'Integración con Steam')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Steam-related systems are part of the project scope, including Workshop-oriented community content.',
                    'Los sistemas relacionados con Steam forman parte del proyecto, incluyendo contenido comunitario orientado a Workshop.'
                )); ?></p>
            </article>
            <article class="card">
                <h3><?php echo jg_e(jg_text('Custom Skins', 'Skins personalizadas')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Players can create custom Jumpfall skins and package them using the JVSK workflow.',
                    'Los jugadores pueden crear skins personalizadas de Jumpfall y empaquetarlas usando el flujo JVSK.'
                )); ?></p>
                <div class="actions">
                    <a class="button secondary" href="<?php echo jg_e(jg_path($skinManualPath, 'en')); ?>"><?php echo jg_e(jg_text('Skin Manual', 'Manual de skins')); ?></a>
                </div>
            </article>
        </div>
    </section>

    <section id="steam" class="section">
        <div class="grid two">
            <article class="card notice">
                <h2><?php echo jg_e(jg_text('Steam Playtest', 'Playtest en Steam')); ?></h2>
                <p><?php echo jg_e(jg_text('Official Steam Playtest link:', 'Enlace oficial del Playtest en Steam:')); ?> <strong>TODO</strong></p>
                <p><?php echo jg_e(jg_text(
                    'This placeholder avoids inventing a store link before the final public URL is confirmed.',
                    'Este marcador evita inventar un enlace de tienda antes de confirmar la URL pública final.'
                )); ?></p>
            </article>
            <article class="card">
                <h2><?php echo jg_e(jg_text('Official Links', 'Enlaces oficiales')); ?></h2>
                <ul class="meta-list">
                    <li><span><?php echo jg_e(jg_text('Developer', 'Desarrollador')); ?></span><strong>JEVZGames</strong></li>
                    <li><span><?php echo jg_e(jg_text('Game', 'Juego')); ?></span><strong>Jumpfall</strong></li>
                    <li><span>Steam</span><strong>TODO</strong></li>
                    <li><span><?php echo jg_e(jg_text('Press Kit', 'Kit de prensa')); ?></span><a href="<?php echo jg_e(jg_path('/press/jumpfall/')); ?>"><?php echo jg_e(jg_text('Open press page', 'Abrir página de prensa')); ?></a></li>
                </ul>
            </article>
        </div>
    </section>

    <section class="section">
        <div class="section-header">
            <h2><?php echo jg_e(jg_text('Screenshots', 'Capturas')); ?></h2>
            <p><?php echo jg_e(jg_text(
                'Clean placeholders until final official screenshots are selected.',
                'Marcadores limpios hasta seleccionar las capturas oficiales finales.'
            )); ?></p>
        </div>
        <div class="screenshot-grid">
            <div class="screenshot" role="img" aria-label="<?php echo jg_e(jg_text('Jumpfall gameplay screenshot placeholder', 'Captura provisional de gameplay de Jumpfall')); ?>"></div>
            <div class="screenshot" role="img" aria-label="<?php echo jg_e(jg_text('Jumpfall level editor screenshot placeholder', 'Captura provisional del editor de niveles de Jumpfall')); ?>"></div>
            <div class="screenshot" role="img" aria-label="<?php echo jg_e(jg_text('Jumpfall community maps screenshot placeholder', 'Captura provisional de mapas comunitarios de Jumpfall')); ?>"></div>
        </div>
    </section>
</main>
<?php jg_footer(); ?>
</body>
</html>
