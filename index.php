<?php
require __DIR__ . '/_includes/site.php';
$page = array(
    'title' => jg_text('JEVZGames - Indie Games and JumpFall', 'JEVZGames - Juegos indie y JumpFall'),
    'description' => jg_text(
        'Official website for JEVZGames, developer of JumpFall, its level editor, community maps and creator tools.',
        'Sitio oficial de JEVZGames, desarrollador de JumpFall, su editor de niveles, mapas comunitarios y herramientas para creadores.'
    ),
    'path' => '/',
    'image' => '/images/jumpfall/Screenshot-game/3.jpg',
    'jsonld' => array(jg_org_schema(), jg_website_schema())
);
?><!doctype html>
<html lang="<?php echo jg_e(jg_lang()); ?>">
<head>
<?php jg_head($page); ?>
</head>
<body>
<?php jg_header('home'); ?>
<main id="main" class="page">
    <section class="hero hero-home">
        <div>
            <span class="eyebrow"><?php echo jg_e(jg_text('Official Indie Game Studio', 'Estudio indie oficial')); ?></span>
            <h1>JEVZGames</h1>
            <p class="lead"><?php echo jg_e(jg_text(
                'Independent games and safe tools for players and creators. Official home of JumpFall.',
                'Juegos independientes y herramientas seguras para jugadores y creadores. Sitio oficial de JumpFall.'
            )); ?></p>
            <p class="lead"><?php echo jg_e(jg_text(
                'JumpFall is a 2D precision platformer moving toward Early Access with a level editor, community maps and data-driven modding tools.',
                'JumpFall es un plataformas 2D de precisión que avanza hacia Acceso Anticipado con editor de niveles, mapas comunitarios y herramientas de modding basadas en datos.'
            )); ?></p>
            <div class="actions">
                <a class="button primary" href="<?php echo jg_e(jg_path('/games/jumpfall/')); ?>"><?php echo jg_e(jg_text('Explore JumpFall', 'Explorar JumpFall')); ?></a>
                <a class="button secondary" href="<?php echo jg_e(JG_STEAM_URL); ?>" target="_blank" rel="noopener noreferrer"><?php echo jg_e(jg_text('View on Steam', 'Ver en Steam')); ?></a>
                <a class="button secondary" href="<?php echo jg_e(jg_path('/press/jumpfall/')); ?>"><?php echo jg_e(jg_text('Press Kit', 'Kit de prensa')); ?></a>
            </div>
        </div>
        <div class="hero-media"><img src="<?php echo jg_e(jg_asset('/images/jumpfall/Screenshot-game/3.jpg')); ?>" alt="<?php echo jg_e(jg_text('JumpFall precision platforming gameplay', 'Gameplay de plataformas de precisión de JumpFall')); ?>"></div>
    </section>

    <section class="section">
        <div class="section-header">
            <div>
                <span class="eyebrow"><?php echo jg_e(jg_text('Main Project', 'Proyecto principal')); ?></span>
                <h2>JumpFall</h2>
            </div>
            <p><?php echo jg_e(jg_text(
                'A precision platformer built around movement, tools and community-created levels.',
                'Un plataformas de precisión construido alrededor del movimiento, las herramientas y los niveles comunitarios.'
            )); ?></p>
        </div>
        <article class="card game-card feature-card">
            <div class="thumb"><img src="<?php echo jg_e(jg_asset('/images/jumpfall/Screenshot-game/5.jpg')); ?>" alt="JumpFall gameplay screenshot"></div>
            <div>
                <h3><?php echo jg_e(jg_text('JumpFall - Official Game', 'JumpFall - Juego oficial')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Use precise jumps, dashes and a limited jetpack. Create levels, share community maps and extend supported content through safe tools.',
                    'Usa saltos precisos, dash y un jetpack limitado. Crea niveles, comparte mapas comunitarios y amplía contenido compatible mediante herramientas seguras.'
                )); ?></p>
                <div class="actions">
                    <a class="button primary" href="<?php echo jg_e(jg_path('/games/jumpfall/')); ?>"><?php echo jg_e(jg_text('Official Page', 'Página oficial')); ?></a>
                    <a class="button secondary" href="<?php echo jg_e(JG_STEAM_URL); ?>" target="_blank" rel="noopener noreferrer">Steam</a>
                    <a class="button secondary" href="<?php echo jg_e(jg_path('/games/jumpfall/level-editor/')); ?>"><?php echo jg_e(jg_text('Level Editor', 'Editor de Niveles')); ?></a>
                    <a class="button secondary" href="<?php echo jg_e(jg_path('/games/jumpfall/modding/')); ?>"><?php echo jg_e(jg_text('Modding', 'Modding')); ?></a>
                </div>
            </div>
        </article>
    </section>

    <section class="section">
        <div class="section-header">
            <h2><?php echo jg_e(jg_text('Screenshots', 'Capturas')); ?></h2>
            <p><?php echo jg_e(jg_text(
                'Real in-game screenshots from the current JumpFall media folder.',
                'Capturas reales del juego desde la carpeta actual de medios de JumpFall.'
            )); ?></p>
        </div>
        <div class="screenshot-grid">
            <figure class="screenshot"><img src="<?php echo jg_e(jg_asset('/images/jumpfall/Screenshot-game/3.jpg')); ?>" alt="JumpFall checkpoint gameplay"><figcaption><?php echo jg_e(jg_text('Checkpoint and platforming', 'Checkpoint y plataformas')); ?></figcaption></figure>
            <figure class="screenshot"><img src="<?php echo jg_e(jg_asset('/images/jumpfall/Screenshot-game/5.jpg')); ?>" alt="JumpFall level flag"><figcaption><?php echo jg_e(jg_text('Level goal', 'Meta del nivel')); ?></figcaption></figure>
            <figure class="screenshot"><img src="<?php echo jg_e(jg_asset('/images/jumpfall/Screenshot-game/12-level-editor.jpg')); ?>" alt="JumpFall level editor"><figcaption><?php echo jg_e(jg_text('Level editor preview', 'Vista del editor')); ?></figcaption></figure>
        </div>
    </section>

    <section class="section">
        <div class="grid">
            <article class="card">
                <h3><?php echo jg_e(jg_text('Official Information', 'Información oficial')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Verified JumpFall information, support, press material and creator documentation in one place.',
                    'Información verificada de JumpFall, soporte, material de prensa y documentación para creadores en un solo lugar.'
                )); ?></p>
            </article>
            <article class="card">
                <h3><?php echo jg_e(jg_text('Player Tools', 'Herramientas para jugadores')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'The project includes a level editor, local creations, Workshop maps, custom skins and data-driven mod packages.',
                    'El proyecto incluye editor de niveles, creaciones locales, mapas de Workshop, skins personalizadas y paquetes de mods basados en datos.'
                )); ?></p>
            </article>
            <article class="card">
                <h3><?php echo jg_e(jg_text('Active Development', 'Desarrollo activo')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Early Access development focuses on movement, content creation workflows, compatibility and player feedback.',
                    'El desarrollo de Acceso Anticipado se enfoca en movimiento, creación de contenido, compatibilidad y feedback de jugadores.'
                )); ?></p>
            </article>
        </div>
    </section>
</main>
<?php jg_footer(); ?>
</body>
</html>
