<?php
require dirname(__DIR__, 3) . '/_includes/site.php';
$manualPath = jg_lang() === 'es' ? '/games/jumpfall/tutorial/maps/es/' : '/games/jumpfall/tutorial/maps/en/';
$luaManualPath = jg_lang() === 'es' ? '/games/jumpfall/tutorial/maps/lua/es/' : '/games/jumpfall/tutorial/maps/lua/en/';
$page = array(
    'title' => jg_text('Jumpfall Level Editor - JEVZGames', 'Editor de Niveles de Jumpfall - JEVZGames'),
    'description' => jg_text(
        'Official overview of the Jumpfall Level Editor, a toolset for creating, testing and compiling custom Jumpfall maps.',
        'Resumen oficial del Editor de Niveles de Jumpfall, un conjunto de herramientas para crear, probar y compilar mapas personalizados.'
    ),
    'path' => '/games/jumpfall/level-editor/',
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
    <div class="breadcrumb"><a href="<?php echo jg_e(jg_path('/games/jumpfall/')); ?>">Jumpfall</a> / <?php echo jg_e(jg_text('Level Editor', 'Editor de Niveles')); ?></div>
    <section class="hero compact">
        <div>
            <span class="eyebrow"><?php echo jg_e(jg_text('Jumpfall Tools', 'Herramientas de Jumpfall')); ?></span>
            <h1><?php echo jg_e(jg_text('Level Editor', 'Editor de Niveles')); ?></h1>
            <p class="lead"><?php echo jg_e(jg_text(
                'The Jumpfall Level Editor is the official toolset for building and testing custom maps for Jumpfall.',
                'El Editor de Niveles de Jumpfall es el conjunto oficial de herramientas para crear y probar mapas personalizados para Jumpfall.'
            )); ?></p>
        </div>
    </section>

    <section class="section">
        <div class="grid">
            <article class="card">
                <h3><?php echo jg_e(jg_text('Create Maps', 'Crear mapas')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Place level pieces, set the player spawn point, configure triggers and prepare playable map layouts.',
                    'Coloca piezas del nivel, define el punto de aparición del jugador, configura triggers y prepara diseños jugables.'
                )); ?></p>
            </article>
            <article class="card">
                <h3><?php echo jg_e(jg_text('Test In Game', 'Probar en juego')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Playtest maps inside the editor workflow before compiling them for Jumpfall.',
                    'Prueba los mapas dentro del flujo del editor antes de compilarlos para Jumpfall.'
                )); ?></p>
            </article>
            <article class="card">
                <h3><?php echo jg_e(jg_text('Compile', 'Compilar')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Editable map files and compiled game-ready files are part of the current Jumpfall map workflow.',
                    'Los archivos editables y los archivos compilados listos para el juego forman parte del flujo actual de mapas de Jumpfall.'
                )); ?></p>
            </article>
        </div>
    </section>

    <section class="section">
        <article class="card notice">
            <h2><?php echo jg_e(jg_text('Documentation', 'Documentación')); ?></h2>
            <p><?php echo jg_e(jg_text(
                'Current user documentation is available in the Jumpfall tutorials. This page is the official overview and entry point.',
                'La documentación actual para usuarios está disponible en los tutoriales de Jumpfall. Esta página es el resumen oficial y punto de entrada.'
            )); ?></p>
            <div class="actions">
                <a class="button primary" href="<?php echo jg_e(jg_path($manualPath, 'en')); ?>"><?php echo jg_e(jg_text('Open Level Editor Manual', 'Abrir manual del editor')); ?></a>
                <a class="button secondary" href="<?php echo jg_e(jg_path($luaManualPath, 'en')); ?>"><?php echo jg_e(jg_text('Lua Map Scripting', 'Scripts Lua para mapas')); ?></a>
            </div>
        </article>
    </section>
</main>
<?php jg_footer(); ?>
</body>
</html>
