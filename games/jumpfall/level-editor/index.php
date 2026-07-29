<?php
require dirname(__DIR__, 3) . '/_includes/site.php';
$manualPath = jg_lang() === 'es' ? '/games/jumpfall/tutorial/maps/es/' : '/games/jumpfall/tutorial/maps/en/';
$luaManualPath = jg_lang() === 'es' ? '/games/jumpfall/tutorial/maps/lua/es/' : '/games/jumpfall/tutorial/maps/lua/en/';
$page = array(
    'title' => jg_text('JumpFall Level Editor - JEVZGames', 'Editor de Niveles de JumpFall - JEVZGames'),
    'description' => jg_text(
        'Official JumpFall Level Editor overview: create, playtest and compile custom maps with triggers, physics, media and Lua map events.',
        'Resumen oficial del Editor de Niveles de JumpFall: crea, prueba y compila mapas con triggers, física, medios y eventos Lua.'
    ),
    'path' => '/games/jumpfall/level-editor/',
    'image' => '/images/jumpfall/Screenshot-game/12-level-editor.jpg',
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
    <div class="breadcrumb"><a href="<?php echo jg_e(jg_path('/games/jumpfall/')); ?>">JumpFall</a> / <?php echo jg_e(jg_text('Level Editor', 'Editor de Niveles')); ?></div>
    <section class="hero">
        <div>
            <span class="eyebrow"><?php echo jg_e(jg_text('Creation Tools', 'Herramientas de creación')); ?></span>
            <h1><?php echo jg_e(jg_text('Level Editor', 'Editor de Niveles')); ?></h1>
            <p class="lead"><?php echo jg_e(jg_text(
                'Build, playtest and prepare custom JumpFall levels with desktop controls and an experimental multiplatform interface for touch, mouse and controller workflows.',
                'Crea, prueba y prepara niveles personalizados de JumpFall con controles de escritorio y una interfaz multiplataforma experimental para flujos táctiles, mouse y mando.'
            )); ?></p>
            <div class="actions">
                <a class="button primary" href="<?php echo jg_e(jg_path($manualPath, 'en')); ?>"><?php echo jg_e(jg_text('Open Manual', 'Abrir manual')); ?></a>
                <a class="button secondary" href="<?php echo jg_e(jg_path($luaManualPath, 'en')); ?>"><?php echo jg_e(jg_text('Lua Scripting', 'Scripts Lua')); ?></a>
            </div>
        </div>
        <div class="hero-media"><img src="<?php echo jg_e(jg_asset('/images/jumpfall/Screenshot-game/12-level-editor.jpg')); ?>" alt="JumpFall level editor screenshot"></div>
    </section>

    <section class="section">
        <div class="grid">
            <article class="card">
                <h3><?php echo jg_e(jg_text('Create Maps', 'Crear mapas')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Place registered pieces, move the player spawn, select multiple objects, resize them visually and lock important items against accidental edits.',
                    'Coloca piezas registradas, mueve el spawn del jugador, selecciona varios objetos, cambia su tamaño visualmente y bloquea elementos importantes contra ediciones accidentales.'
                )); ?></p>
            </article>
            <article class="card">
                <h3><?php echo jg_e(jg_text('Test In Game', 'Probar en juego')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Enter playtest without leaving the editor. The editor hides its construction HUD, follows the player and restores the editable state when testing ends.',
                    'Entra a playtest sin salir del editor. El editor oculta su HUD de construcción, sigue al jugador y restaura el estado editable al terminar la prueba.'
                )); ?></p>
            </article>
            <article class="card">
                <h3><?php echo jg_e(jg_text('Compile and Share', 'Compilar y compartir')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Keep editable .jmap projects, compile playable .jfue files and use the external JSM compiler to prepare Workshop-ready .jsm packages.',
                    'Conserva proyectos editables .jmap, compila archivos jugables .jfue y usa el compilador JSM externo para preparar paquetes .jsm para Workshop.'
                )); ?></p>
            </article>
        </div>
    </section>

    <section class="section">
        <div class="section-header">
            <h2><?php echo jg_e(jg_text('Current Toolset', 'Herramientas actuales')); ?></h2>
            <p><?php echo jg_e(jg_text(
                'The current LevelData format supports creator systems beyond basic platforms while preserving a controlled runtime contract.',
                'El formato LevelData actual admite sistemas más allá de plataformas básicas manteniendo un contrato de runtime controlado.'
            )); ?></p>
        </div>
        <div class="grid">
            <article class="card">
                <h3><?php echo jg_e(jg_text('Physics and Movement Objects', 'Física y objetos de movimiento')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Configure map gravity, jump plates with visual landing targets, elevators, checkpoints, jump orbs and safe player spawn placement.',
                    'Configura la gravedad del mapa, placas de impulso con destino visual, ascensores, checkpoints, orbes de salto y un spawn seguro para el jugador.'
                )); ?></p>
            </article>
            <article class="card">
                <h3><?php echo jg_e(jg_text('Triggers and Events', 'Triggers y eventos')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Use death zones, map limits, level changes, finish zones, static cameras, visibility, timers, wall-jump zones and configurable object events.',
                    'Usa zonas de muerte, límites, cambios de nivel, metas, cámaras estáticas, visibilidad, temporizadores, wall jump y eventos configurables de objetos.'
                )); ?></p>
            </article>
            <article class="card">
                <h3><?php echo jg_e(jg_text('Custom Media and Lua', 'Medios personalizados y Lua')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Maps can include PNG backgrounds, silent MP4/WebM backgrounds, WAV/OGG soundtracks and restricted Lua events stored inside the map package.',
                    'Los mapas pueden incluir fondos PNG, fondos MP4/WebM sin audio, bandas sonoras WAV/OGG y eventos Lua restringidos dentro del paquete.'
                )); ?></p>
            </article>
            <article class="card">
                <h3><?php echo jg_e(jg_text('Boss Graph Beta', 'Boss Graph beta')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'A visual graph can define 2D boss movement, phases, attacks and object signals. It remains a beta creator feature and should be playtested carefully.',
                    'Un grafo visual puede definir movimiento, fases, ataques y señales de objetos para jefes 2D. Sigue siendo una función beta y debe probarse con cuidado.'
                )); ?></p>
            </article>
        </div>
    </section>

    <section class="section">
        <div class="grid two">
            <article class="card">
                <h2><?php echo jg_e(jg_text('File Workflow', 'Flujo de archivos')); ?></h2>
                <ul class="meta-list">
                    <li><span>.jmap</span><strong><?php echo jg_e(jg_text('Editable project', 'Proyecto editable')); ?></strong></li>
                    <li><span>.jfue</span><strong><?php echo jg_e(jg_text('Compiled playable map', 'Mapa jugable compilado')); ?></strong></li>
                    <li><span>.jsm</span><strong><?php echo jg_e(jg_text('Workshop package', 'Paquete de Workshop')); ?></strong></li>
                </ul>
            </article>
            <article class="card notice">
                <h2><?php echo jg_e(jg_text('Platform Note', 'Nota de plataforma')); ?></h2>
                <p><?php echo jg_e(jg_text(
                    'Video backgrounds are temporarily rejected by the Linux build with a Map not compatible message. PNG backgrounds and maps without video remain supported while automatic transcoding is evaluated.',
                    'Los fondos de video se rechazan temporalmente en Linux con el mensaje Map not compatible. Los fondos PNG y mapas sin video siguen funcionando mientras se evalúa una transcodificación automática.'
                )); ?></p>
            </article>
        </div>
    </section>

    <section class="section">
        <div class="section-header">
            <h2><?php echo jg_e(jg_text('Editor Preview', 'Vista del editor')); ?></h2>
            <p><?php echo jg_e(jg_text(
                'The editor is a central Early Access system. Interface clarity, controller and touch workflows, compatibility and map safety continue to improve through testing.',
                'El editor es un sistema central del Acceso Anticipado. La claridad de interfaz, controles táctiles y con mando, compatibilidad y seguridad de mapas siguen mejorando mediante pruebas.'
            )); ?></p>
        </div>
        <div class="screenshot-grid">
            <figure class="screenshot"><img src="<?php echo jg_e(jg_asset('/images/jumpfall/Screenshot-game/12-level-editor.jpg')); ?>" alt="JumpFall editor grid"><figcaption><?php echo jg_e(jg_text('Editor grid', 'Cuadrícula del editor')); ?></figcaption></figure>
            <figure class="screenshot"><img src="<?php echo jg_e(jg_asset('/images/jumpfall/Screenshot-game/1.jpg')); ?>" alt="JumpFall main menu"><figcaption><?php echo jg_e(jg_text('Main menu', 'Menú principal')); ?></figcaption></figure>
            <figure class="screenshot"><img src="<?php echo jg_e(jg_asset('/images/jumpfall/Screenshot-game/3.jpg')); ?>" alt="JumpFall test map"><figcaption><?php echo jg_e(jg_text('Test in game', 'Prueba en juego')); ?></figcaption></figure>
        </div>
    </section>

    <section class="section">
        <article class="card notice">
            <h2><?php echo jg_e(jg_text('Documentation', 'Documentación')); ?></h2>
            <p><?php echo jg_e(jg_text(
                'Current user documentation is available in the JumpFall tutorials. This page works as the official overview and entry point.',
                'La documentación actual para usuarios está disponible en los tutoriales de JumpFall. Esta página funciona como resumen oficial y punto de entrada.'
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
