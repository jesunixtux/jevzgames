<?php
require dirname(__DIR__, 2) . '/_includes/site.php';
$page = array(
    'title' => jg_text('JumpFall Press Kit - JEVZGames', 'Kit de prensa de JumpFall - JEVZGames'),
    'description' => jg_text(
        'Official press kit for JumpFall, an indie game developed by JEVZGames. Includes approved descriptions, links and media.',
        'Kit de prensa oficial de JumpFall, un videojuego indie desarrollado por JEVZGames. Incluye descripciones aprobadas, enlaces y medios.'
    ),
    'path' => '/press/jumpfall/',
    'image' => '/images/jumpfall/Screenshot-game/3.jpg',
    'jsonld' => array(jg_org_schema(), jg_jumpfall_schema())
);
?><!doctype html>
<html lang="<?php echo jg_e(jg_lang()); ?>">
<head>
<?php jg_head($page); ?>
</head>
<body>
<?php jg_header('press'); ?>
<main id="main" class="page">
    <section class="hero">
        <div>
            <span class="eyebrow"><?php echo jg_e(jg_text('Press Kit', 'Kit de prensa')); ?></span>
            <h1><?php echo jg_e(jg_text('JumpFall Press Kit', 'Kit de prensa de JumpFall')); ?></h1>
            <p class="lead"><?php echo jg_e(jg_text(
                'Official media, descriptions and public links for JumpFall, an indie game developed by JEVZGames.',
                'Medios, descripciones y enlaces públicos oficiales de JumpFall, un videojuego indie desarrollado por JEVZGames.'
            )); ?></p>
        </div>
        <div class="hero-media"><img src="<?php echo jg_e(jg_asset('/images/jumpfall/Screenshot-game/3.jpg')); ?>" alt="JumpFall gameplay screenshot"></div>
    </section>

    <section class="section">
        <div class="grid two">
            <article class="card">
                <h2><?php echo jg_e(jg_text('Short Description', 'Descripción corta')); ?></h2>
                <p>JumpFall is an indie precision 2D platform game developed by JEVZGames, combining movement challenges with a level editor and community-created content.</p>
                <p>JumpFall es un videojuego indie de plataformas 2D de precisión desarrollado por JEVZGames, que combina desafíos de movimiento con editor de niveles y contenido creado por la comunidad.</p>
            </article>
            <article class="card">
                <h2><?php echo jg_e(jg_text('Fact Sheet', 'Ficha técnica')); ?></h2>
                <ul class="meta-list">
                    <li><span><?php echo jg_e(jg_text('Game', 'Juego')); ?></span><strong>JumpFall</strong></li>
                    <li><span><?php echo jg_e(jg_text('Developer', 'Desarrollador')); ?></span><strong>JEVZGames</strong></li>
                    <li><span><?php echo jg_e(jg_text('Status', 'Estado')); ?></span><strong><?php echo jg_e(jg_text('Coming Soon to Early Access', 'Próximamente en Acceso Anticipado')); ?></strong></li>
                    <li><span><?php echo jg_e(jg_text('Primary platform', 'Plataforma principal')); ?></span><strong>PC / Steam</strong></li>
                    <li><span><?php echo jg_e(jg_text('Creator features', 'Funciones para creadores')); ?></span><strong><?php echo jg_e(jg_text('Level Editor, community maps, skins and data-driven mods', 'Editor de niveles, mapas comunitarios, skins y mods basados en datos')); ?></strong></li>
                    <li><span>Steam URL</span><a href="<?php echo jg_e(JG_STEAM_URL); ?>" target="_blank" rel="noopener noreferrer">store.steampowered.com/app/4053230</a></li>
                    <li><span><?php echo jg_e(jg_text('Press Contact', 'Contacto de prensa')); ?></span><a href="mailto:<?php echo jg_e(JG_CONTACT_EMAIL); ?>"><?php echo jg_e(JG_CONTACT_EMAIL); ?></a></li>
                </ul>
            </article>
        </div>
    </section>

    <section class="section">
        <div class="section-header">
            <h2><?php echo jg_e(jg_text('Current Feature Overview', 'Resumen de funciones actuales')); ?></h2>
            <p><?php echo jg_e(jg_text(
                'Approved high-level information for coverage. Experimental systems are identified separately and should not be presented as finished features.',
                'Información general aprobada para cobertura. Los sistemas experimentales se identifican por separado y no deben presentarse como funciones terminadas.'
            )); ?></p>
        </div>
        <div class="grid">
            <article class="card">
                <h3><?php echo jg_e(jg_text('Movement', 'Movimiento')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Precision jumping, ground and air dashes, wall interactions, checkpoints and a limited jetpack form the core platforming toolset.',
                    'Saltos de precisión, dash terrestre y aéreo, interacción con paredes, checkpoints y un jetpack limitado forman el sistema central.'
                )); ?></p>
            </article>
            <article class="card">
                <h3><?php echo jg_e(jg_text('Creator Content', 'Contenido de creadores')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'The Level Editor produces editable projects and compiled maps with triggers, custom media, Lua map events and Workshop packaging tools.',
                    'El Editor de Niveles produce proyectos editables y mapas compilados con triggers, medios personalizados, eventos Lua y herramientas de Workshop.'
                )); ?></p>
            </article>
            <article class="card">
                <h3><?php echo jg_e(jg_text('Development', 'Desarrollo')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Early Access work prioritizes stability, creator usability, compatibility and player feedback. LAN multiplayer remains a separate closed experiment.',
                    'El trabajo de Acceso Anticipado prioriza estabilidad, usabilidad para creadores, compatibilidad y feedback. El multijugador LAN sigue como experimento cerrado separado.'
                )); ?></p>
            </article>
        </div>
    </section>

    <section class="section">
        <div class="section-header">
            <h2><?php echo jg_e(jg_text('Media', 'Medios')); ?></h2>
            <p><?php echo jg_e(jg_text(
                'Approved screenshots included in the current JumpFall media folder.',
                'Capturas aprobadas incluidas en la carpeta actual de medios de JumpFall.'
            )); ?></p>
        </div>
        <div class="screenshot-grid wide">
            <figure class="screenshot"><img src="<?php echo jg_e(jg_asset('/images/jumpfall/Screenshot-game/1.jpg')); ?>" alt="JumpFall main menu"><figcaption><?php echo jg_e(jg_text('Main menu', 'Menú principal')); ?></figcaption></figure>
            <figure class="screenshot"><img src="<?php echo jg_e(jg_asset('/images/jumpfall/Screenshot-game/3.jpg')); ?>" alt="JumpFall checkpoint gameplay"><figcaption><?php echo jg_e(jg_text('Gameplay', 'Gameplay')); ?></figcaption></figure>
            <figure class="screenshot"><img src="<?php echo jg_e(jg_asset('/images/jumpfall/Screenshot-game/5.jpg')); ?>" alt="JumpFall platforming level"><figcaption><?php echo jg_e(jg_text('Level goal', 'Meta del nivel')); ?></figcaption></figure>
            <figure class="screenshot"><img src="<?php echo jg_e(jg_asset('/images/jumpfall/Screenshot-game/6.jpg')); ?>" alt="JumpFall character scene"><figcaption><?php echo jg_e(jg_text('Characters', 'Personajes')); ?></figcaption></figure>
            <figure class="screenshot"><img src="<?php echo jg_e(jg_asset('/images/jumpfall/Screenshot-game/9.jpg')); ?>" alt="JumpFall platform screenshot"><figcaption><?php echo jg_e(jg_text('Platforming', 'Plataformas')); ?></figcaption></figure>
            <figure class="screenshot"><img src="<?php echo jg_e(jg_asset('/images/jumpfall/Screenshot-game/12-level-editor.jpg')); ?>" alt="JumpFall level editor"><figcaption><?php echo jg_e(jg_text('Level editor', 'Editor de niveles')); ?></figcaption></figure>
        </div>
    </section>
</main>
<?php jg_footer(); ?>
</body>
</html>
