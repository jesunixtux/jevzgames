<?php
require dirname(__DIR__) . '/_includes/site.php';
$page = array(
    'title' => jg_text('Games - JEVZGames', 'Juegos - JEVZGames'),
    'description' => jg_text(
        'Explore official JEVZGames projects including JumpFall and the CH-FireDanger experimental playtest.',
        'Conoce los proyectos oficiales de JEVZGames, incluyendo JumpFall y el playtest experimental CH-FireDanger.'
    ),
    'path' => '/games/',
    'image' => '/images/jumpfall/Screenshot-game/5.jpg',
    'jsonld' => array(jg_org_schema())
);
?><!doctype html>
<html lang="<?php echo jg_e(jg_lang()); ?>">
<head>
<?php jg_head($page); ?>
</head>
<body>
<?php jg_header('games'); ?>
<main id="main" class="page">
    <section class="hero compact">
        <div>
            <span class="eyebrow"><?php echo jg_e(jg_text('Games', 'Juegos')); ?></span>
            <h1><?php echo jg_e(jg_text('Official Games', 'Juegos oficiales')); ?></h1>
            <p class="lead"><?php echo jg_e(jg_text(
                'Official game projects developed and published under the JEVZGames name.',
                'Proyectos de videojuegos oficiales desarrollados y publicados bajo el nombre JEVZGames.'
            )); ?></p>
        </div>
    </section>

    <section class="section">
        <div class="game-list">
        <article class="card game-card feature-card">
            <div class="thumb"><img src="<?php echo jg_e(jg_asset('/images/jumpfall/Screenshot-game/3.jpg')); ?>" alt="JumpFall gameplay screenshot"></div>
            <div>
                <h2>JumpFall</h2>
                <p><?php echo jg_e(jg_text(
                    'A 2D platformer focused on movement and precision, with a level editor, community maps, custom skins and safe data-driven mods.',
                    'Un plataformas 2D enfocado en movimiento y precisión, con editor de niveles, mapas comunitarios, skins personalizadas y mods seguros basados en datos.'
                )); ?></p>
                <div class="actions">
                    <a class="button primary" href="<?php echo jg_e(jg_path('/games/jumpfall/')); ?>"><?php echo jg_e(jg_text('Open Official Page', 'Abrir página oficial')); ?></a>
                    <a class="button secondary" href="<?php echo jg_e(JG_STEAM_URL); ?>" target="_blank" rel="noopener noreferrer">Steam</a>
                    <a class="button secondary" href="<?php echo jg_e(jg_path('/press/jumpfall/')); ?>"><?php echo jg_e(jg_text('Press Kit', 'Kit de prensa')); ?></a>
                </div>
            </div>
        </article>

        <article class="card game-card">
            <div class="thumb placeholder ch-fire-placeholder"><span>CH-FireDanger</span></div>
            <div>
                <h2>CH-FireDanger</h2>
                <p><?php echo jg_e(jg_text(
                    'An experimental 2D simulation playtest for Windows, published through the official JEVZGames itch.io page.',
                    'Un playtest experimental de simulación 2D para Windows, publicado a través de la página oficial de JEVZGames en itch.io.'
                )); ?></p>
                <div class="actions">
                    <a class="button primary" href="<?php echo jg_e(jg_path('/games/ch-fire/')); ?>"><?php echo jg_e(jg_text('Open Official Page', 'Abrir página oficial')); ?></a>
                    <a class="button secondary" href="<?php echo jg_e(JG_CH_FIRE_URL); ?>" target="_blank" rel="noopener noreferrer">itch.io</a>
                </div>
            </div>
        </article>
        </div>
    </section>
</main>
<?php jg_footer(); ?>
</body>
</html>
