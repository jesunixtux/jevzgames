<?php
require dirname(__DIR__, 2) . '/_includes/site.php';
$skinManualPath = jg_lang() === 'es' ? '/games/jumpfall/tutorial/skin/es/' : '/games/jumpfall/tutorial/skin/en/';
$page = array(
    'title' => jg_text('JumpFall - Official Game by JEVZGames', 'JumpFall - Juego oficial de JEVZGames'),
    'description' => jg_text(
        'Official page for JumpFall, a precision 2D platform game by JEVZGames with creator tools, community maps and Steam integration.',
        'Página oficial de JumpFall, un videojuego de plataformas 2D de precisión de JEVZGames con herramientas de creación, mapas comunitarios e integración con Steam.'
    ),
    'path' => '/games/jumpfall/',
    'image' => '/images/jumpfall/Screenshot-game/3.jpg',
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
    <div class="breadcrumb"><a href="<?php echo jg_e(jg_path('/games/')); ?>"><?php echo jg_e(jg_text('Games', 'Juegos')); ?></a> / JumpFall</div>
    <section class="hero">
        <div>
            <span class="eyebrow"><?php echo jg_e(jg_text('Coming Soon to Early Access', 'Próximamente en Acceso Anticipado')); ?></span>
            <h1>JumpFall</h1>
            <p class="lead"><?php echo jg_e(jg_text(
                'Run, jump, dash and use a limited jetpack through precision-focused 2D levels, then build and share challenges of your own.',
                'Corre, salta, haz dash y usa un jetpack limitado en niveles 2D de precisión, y luego crea y comparte tus propios desafíos.'
            )); ?></p>
            <div class="actions">
                <a class="button primary" href="<?php echo jg_e(JG_STEAM_URL); ?>" target="_blank" rel="noopener noreferrer"><?php echo jg_e(jg_text('View on Steam', 'Ver en Steam')); ?></a>
                <a class="button secondary" href="<?php echo jg_e(jg_path('/games/jumpfall/level-editor/')); ?>"><?php echo jg_e(jg_text('Level Editor', 'Editor de Niveles')); ?></a>
                <a class="button secondary" href="<?php echo jg_e(jg_path('/games/jumpfall/community-maps/')); ?>"><?php echo jg_e(jg_text('Community Maps', 'Mapas Comunitarios')); ?></a>
                <a class="button secondary" href="<?php echo jg_e(jg_path('/games/jumpfall/modding/')); ?>"><?php echo jg_e(jg_text('Modding', 'Modding')); ?></a>
            </div>
        </div>
        <div class="hero-media"><img src="<?php echo jg_e(jg_asset('/images/jumpfall/Screenshot-game/3.jpg')); ?>" alt="JumpFall gameplay screenshot"></div>
    </section>

    <section class="section">
        <div class="section-header">
            <h2><?php echo jg_e(jg_text('What is JumpFall?', '¿Qué es JumpFall?')); ?></h2>
            <p><?php echo jg_e(jg_text(
                'JumpFall combines a readable movement system with creator tools designed for custom content and ongoing Early Access feedback.',
                'JumpFall combina un sistema de movimiento claro con herramientas para contenido personalizado y feedback continuo durante Acceso Anticipado.'
            )); ?></p>
        </div>
        <div class="grid">
            <article class="card">
                <h3><?php echo jg_e(jg_text('Precision Platforming', 'Plataformas de precisión')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Run, jump, dash and manage a limited jetpack while learning each level route.',
                    'Corre, salta, haz dash y administra un jetpack limitado mientras aprendes la ruta de cada nivel.'
                )); ?></p>
            </article>
            <article class="card">
                <h3><?php echo jg_e(jg_text('Level Editor', 'Editor de Niveles')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Create, playtest and compile maps with configurable physics, triggers, moving platforms, custom media and Lua map events.',
                    'Crea, prueba y compila mapas con física configurable, triggers, plataformas móviles, medios personalizados y eventos Lua.'
                )); ?></p>
            </article>
            <article class="card">
                <h3><?php echo jg_e(jg_text('Steam Integration', 'Integración con Steam')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Achievements, Steam Cloud-compatible data and Workshop delivery support the PC version without replacing local content workflows.',
                    'Los logros, datos compatibles con Steam Cloud y distribución mediante Workshop apoyan la versión de PC sin reemplazar los flujos de contenido local.'
                )); ?></p>
            </article>
        </div>
    </section>

    <section class="section">
        <div class="section-header">
            <h2><?php echo jg_e(jg_text('Creator Systems', 'Sistemas para creadores')); ?></h2>
            <p><?php echo jg_e(jg_text(
                'Different tools cover maps, appearance and broader data-driven extensions without modifying the base installation.',
                'Distintas herramientas cubren mapas, apariencia y extensiones basadas en datos sin modificar la instalación base.'
            )); ?></p>
        </div>
        <div class="grid">
            <article class="card">
                <h3><?php echo jg_e(jg_text('Community Map Packages', 'Paquetes de mapas comunitarios')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Editable .jmap projects compile to playable .jfue maps. Workshop .jsm packages can carry the map, preview, backgrounds, audio and map Lua files.',
                    'Los proyectos editables .jmap se compilan como mapas jugables .jfue. Los paquetes .jsm de Workshop pueden incluir mapa, preview, fondos, audio y Lua del mapa.'
                )); ?></p>
            </article>
            <article class="card">
                <h3><?php echo jg_e(jg_text('Custom Skins', 'Skins personalizadas')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'PC players can install local or Workshop skin packages with supported movement and climbing animations.',
                    'Los jugadores de PC pueden instalar skins locales o de Workshop con animaciones compatibles de movimiento y escalada.'
                )); ?></p>
            </article>
            <article class="card">
                <h3><?php echo jg_e(jg_text('Data-driven Mods', 'Mods basados en datos')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'The PC mod runtime validates .jfmod packages for maps, visuals, audio, localization and limited mechanics. It does not load external DLLs or native code.',
                    'El runtime de mods para PC valida paquetes .jfmod para mapas, visuales, audio, localización y mecánicas limitadas. No carga DLL externas ni código nativo.'
                )); ?></p>
            </article>
        </div>
    </section>

    <section class="section">
        <article class="card notice">
            <h2><?php echo jg_e(jg_text('Development Status', 'Estado de desarrollo')); ?></h2>
            <p><?php echo jg_e(jg_text(
                'JumpFall is moving toward Early Access. The main public focus is platforming, stability and creator workflows. LAN multiplayer is being tested separately in closed experimental builds and is not presented as a finished public feature.',
                'JumpFall avanza hacia Acceso Anticipado. El foco público principal es el plataformas, la estabilidad y los flujos para creadores. El multijugador LAN se prueba por separado en builds experimentales cerradas y no se presenta como una función pública terminada.'
            )); ?></p>
        </article>
    </section>

    <section class="section">
        <div class="section-header">
            <h2><?php echo jg_e(jg_text('Gameplay Screenshots', 'Capturas del juego')); ?></h2>
            <p><?php echo jg_e(jg_text(
                'Screenshots from the current JumpFall build and editor.',
                'Capturas de la versión actual de JumpFall y su editor.'
            )); ?></p>
        </div>
        <div class="screenshot-grid wide">
            <figure class="screenshot"><img src="<?php echo jg_e(jg_asset('/images/jumpfall/Screenshot-game/2.jpg')); ?>" alt="JumpFall character gameplay"><figcaption><?php echo jg_e(jg_text('Movement', 'Movimiento')); ?></figcaption></figure>
            <figure class="screenshot"><img src="<?php echo jg_e(jg_asset('/images/jumpfall/Screenshot-game/3.jpg')); ?>" alt="JumpFall checkpoint"><figcaption><?php echo jg_e(jg_text('Checkpoints', 'Checkpoints')); ?></figcaption></figure>
            <figure class="screenshot"><img src="<?php echo jg_e(jg_asset('/images/jumpfall/Screenshot-game/4.jpg')); ?>" alt="JumpFall level hazard"><figcaption><?php echo jg_e(jg_text('Obstacles', 'Obstáculos')); ?></figcaption></figure>
            <figure class="screenshot"><img src="<?php echo jg_e(jg_asset('/images/jumpfall/Screenshot-game/5.jpg')); ?>" alt="JumpFall level flag"><figcaption><?php echo jg_e(jg_text('Goal flag', 'Bandera de meta')); ?></figcaption></figure>
            <figure class="screenshot"><img src="<?php echo jg_e(jg_asset('/images/jumpfall/Screenshot-game/6.jpg')); ?>" alt="JumpFall NPC gameplay"><figcaption><?php echo jg_e(jg_text('Characters', 'Personajes')); ?></figcaption></figure>
            <figure class="screenshot"><img src="<?php echo jg_e(jg_asset('/images/jumpfall/Screenshot-game/12-level-editor.jpg')); ?>" alt="JumpFall level editor"><figcaption><?php echo jg_e(jg_text('Level editor', 'Editor de niveles')); ?></figcaption></figure>
        </div>
    </section>

    <section id="steam" class="section">
        <div class="grid two">
            <article class="card notice">
                <h2><?php echo jg_e(jg_text('Steam Page', 'Página de Steam')); ?></h2>
                <p><?php echo jg_e(jg_text(
                    'JumpFall is listed on Steam and is planned for Early Access. Wishlist the game and follow development updates there.',
                    'JumpFall ya está listado en Steam y está planeado para Acceso Anticipado. Agrégalo a tu lista de deseados y sigue las novedades ahí.'
                )); ?></p>
                <div class="actions">
                    <a class="button primary" href="<?php echo jg_e(JG_STEAM_URL); ?>" target="_blank" rel="noopener noreferrer"><?php echo jg_e(jg_text('Open Steam Page', 'Abrir página de Steam')); ?></a>
                </div>
            </article>
            <article class="card">
                <h2><?php echo jg_e(jg_text('Official Links', 'Enlaces oficiales')); ?></h2>
                <ul class="meta-list">
                    <li><span><?php echo jg_e(jg_text('Developer', 'Desarrollador')); ?></span><strong>JEVZGames</strong></li>
                    <li><span><?php echo jg_e(jg_text('Game', 'Juego')); ?></span><strong>JumpFall</strong></li>
                    <li><span>Steam</span><a href="<?php echo jg_e(JG_STEAM_URL); ?>" target="_blank" rel="noopener noreferrer">store.steampowered.com/app/4053230</a></li>
                    <li><span><?php echo jg_e(jg_text('Press Kit', 'Kit de prensa')); ?></span><a href="<?php echo jg_e(jg_path('/press/jumpfall/')); ?>"><?php echo jg_e(jg_text('Open press page', 'Abrir página de prensa')); ?></a></li>
                    <li><span><?php echo jg_e(jg_text('Skin Manual', 'Manual de skins')); ?></span><a href="<?php echo jg_e(jg_path($skinManualPath, 'en')); ?>"><?php echo jg_e(jg_text('Open manual', 'Abrir manual')); ?></a></li>
                    <li><span><?php echo jg_e(jg_text('Modding', 'Modding')); ?></span><a href="<?php echo jg_e(jg_path('/games/jumpfall/modding/')); ?>"><?php echo jg_e(jg_text('Open modding overview', 'Abrir resumen de modding')); ?></a></li>
                </ul>
            </article>
        </div>
    </section>
</main>
<?php jg_footer(); ?>
</body>
</html>
