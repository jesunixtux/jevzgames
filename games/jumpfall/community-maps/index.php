<?php
require dirname(__DIR__, 3) . '/_includes/site.php';
$page = array(
    'title' => jg_text('JumpFall Community Maps - JEVZGames', 'Mapas Comunitarios de JumpFall - JEVZGames'),
    'description' => jg_text(
        'Official overview of JumpFall community maps, .jfue levels, .jsm Workshop packages and supported custom assets.',
        'Resumen oficial de los mapas comunitarios de JumpFall, niveles .jfue, paquetes .jsm de Workshop y assets personalizados compatibles.'
    ),
    'path' => '/games/jumpfall/community-maps/',
    'image' => '/images/jumpfall/Screenshot-game/5.jpg',
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
    <div class="breadcrumb"><a href="<?php echo jg_e(jg_path('/games/jumpfall/')); ?>">JumpFall</a> / <?php echo jg_e(jg_text('Community Maps', 'Mapas Comunitarios')); ?></div>
    <section class="hero">
        <div>
            <span class="eyebrow"><?php echo jg_e(jg_text('Community Maps', 'Mapas Comunitarios')); ?></span>
            <h1><?php echo jg_e(jg_text('JumpFall Community Maps', 'Mapas Comunitarios de JumpFall')); ?></h1>
            <p class="lead"><?php echo jg_e(jg_text(
                'Community maps are playable .jfue levels created with the JumpFall editor and distributed locally or through validated .jsm Workshop packages.',
                'Los mapas comunitarios son niveles jugables .jfue creados con el editor de JumpFall y distribuidos localmente o mediante paquetes .jsm validados de Workshop.'
            )); ?></p>
            <div class="actions">
                <a class="button primary" href="<?php echo jg_e(JG_STEAM_URL); ?>" target="_blank" rel="noopener noreferrer">Steam</a>
                <a class="button secondary" href="<?php echo jg_e(jg_path('/games/jumpfall/level-editor/')); ?>"><?php echo jg_e(jg_text('Level Editor', 'Editor de Niveles')); ?></a>
            </div>
        </div>
        <div class="hero-media"><img src="<?php echo jg_e(jg_asset('/images/jumpfall/Screenshot-game/5.jpg')); ?>" alt="JumpFall community map screenshot"></div>
    </section>

    <section class="section">
        <div class="grid">
            <article class="card">
                <h3><?php echo jg_e(jg_text('Compiled Maps', 'Mapas compilados')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'The game loads compiled .jfue files through the universal MapJfue scene. Editable .jmap files stay with their creator and are not published as runtime content.',
                    'El juego carga archivos .jfue mediante la escena universal MapJfue. Los .jmap editables permanecen con su creador y no se publican como contenido jugable.'
                )); ?></p>
            </article>
            <article class="card">
                <h3><?php echo jg_e(jg_text('Local Assets', 'Assets locales')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'A package can carry PNG or silent video backgrounds, WAV/OGG audio and restricted Lua map scripts inside assetlocal.',
                    'Un paquete puede incluir fondos PNG o video sin audio, audio WAV/OGG y scripts Lua restringidos dentro de assetlocal.'
                )); ?></p>
            </article>
            <article class="card">
                <h3><?php echo jg_e(jg_text('Workshop Workflow', 'Flujo de Workshop')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'The external JSM compiler validates the map, preview and assets, builds the package and can publish or update its Steam Workshop item.',
                    'El compilador JSM externo valida mapa, preview y assets, crea el paquete y puede publicar o actualizar su item de Steam Workshop.'
                )); ?></p>
            </article>
        </div>
    </section>

    <section class="section">
        <div class="section-header">
            <h2><?php echo jg_e(jg_text('Package Safety', 'Seguridad del paquete')); ?></h2>
            <p><?php echo jg_e(jg_text(
                'Workshop content is treated as untrusted user data and checked before it is installed or loaded.',
                'El contenido de Workshop se trata como datos no confiables y se revisa antes de instalarse o cargarse.'
            )); ?></p>
        </div>
        <div class="grid">
            <article class="card">
                <h3><?php echo jg_e(jg_text('Controlled Structure', 'Estructura controlada')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Packages accept one playable map, a manifest, an optional preview and supported files inside assetlocal. Absolute paths and unsafe archive entries are rejected.',
                    'Los paquetes aceptan un mapa jugable, manifest, preview opcional y archivos compatibles dentro de assetlocal. Se rechazan rutas absolutas y entradas inseguras.'
                )); ?></p>
            </article>
            <article class="card">
                <h3><?php echo jg_e(jg_text('Resource Limits', 'Límites de recursos')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'File count, compressed size, extracted size, image dimensions, video size and Lua size are limited to protect memory and disk usage.',
                    'La cantidad de archivos, tamaños comprimido y extraído, dimensiones de imágenes, video y Lua tienen límites para proteger memoria y disco.'
                )); ?></p>
            </article>
            <article class="card">
                <h3><?php echo jg_e(jg_text('Subscription Cleanup', 'Limpieza de suscripciones')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Workshop synchronization keeps subscribed items and removes stale local Workshop copies when their subscription is no longer active.',
                    'La sincronización conserva items suscritos y elimina copias locales obsoletas cuando la suscripción deja de estar activa.'
                )); ?></p>
            </article>
        </div>
    </section>

    <section class="section">
        <div class="section-header">
            <h2><?php echo jg_e(jg_text('Map Preview', 'Vista de mapas')); ?></h2>
            <p><?php echo jg_e(jg_text(
                'Examples of gameplay scenes and editor workflows that support custom map creation.',
                'Ejemplos de escenas de gameplay y flujos de editor que apoyan la creación de mapas personalizados.'
            )); ?></p>
        </div>
        <div class="screenshot-grid">
            <figure class="screenshot"><img src="<?php echo jg_e(jg_asset('/images/jumpfall/Screenshot-game/5.jpg')); ?>" alt="JumpFall goal screenshot"><figcaption><?php echo jg_e(jg_text('Goal route', 'Ruta de meta')); ?></figcaption></figure>
            <figure class="screenshot"><img src="<?php echo jg_e(jg_asset('/images/jumpfall/Screenshot-game/4.jpg')); ?>" alt="JumpFall obstacle screenshot"><figcaption><?php echo jg_e(jg_text('Obstacles', 'Obstáculos')); ?></figcaption></figure>
            <figure class="screenshot"><img src="<?php echo jg_e(jg_asset('/images/jumpfall/Screenshot-game/12-level-editor.jpg')); ?>" alt="JumpFall editor screenshot"><figcaption><?php echo jg_e(jg_text('Editor workflow', 'Flujo del editor')); ?></figcaption></figure>
        </div>
    </section>

    <section class="section">
        <article class="card notice">
            <h2><?php echo jg_e(jg_text('Current Status', 'Estado actual')); ?></h2>
            <p><?php echo jg_e(jg_text(
                'Local loading, Workshop synchronization and .jsm publishing are implemented for testing. Compatibility and browsing remain active Early Access work. Linux currently accepts PNG maps but rejects maps with enabled MP4/WebM backgrounds.',
                'La carga local, sincronización de Workshop y publicación .jsm están implementadas para pruebas. La compatibilidad y navegación siguen en desarrollo para Acceso Anticipado. Linux acepta mapas PNG, pero rechaza mapas con fondos MP4/WebM habilitados.'
            )); ?></p>
        </article>
    </section>
</main>
<?php jg_footer(); ?>
</body>
</html>
