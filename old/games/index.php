<?php
require dirname(__DIR__) . '/_includes/site.php';
$page = array(
    'title' => jg_text('Games - JEVZGames', 'Juegos - JEVZGames'),
    'description' => jg_text(
        'Explore official game projects from JEVZGames, including Jumpfall, an indie game with level editor tools and community maps.',
        'Explora los proyectos oficiales de JEVZGames, incluyendo Jumpfall, un juego indie con editor de niveles y mapas comunitarios.'
    ),
    'path' => '/games/',
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
                'This page lists official game projects developed by JEVZGames.',
                'Esta página reúne los proyectos de videojuegos oficiales desarrollados por JEVZGames.'
            )); ?></p>
        </div>
    </section>

    <section class="section">
        <article class="card game-card">
            <div class="thumb" role="img" aria-label="<?php echo jg_e(jg_text('Jumpfall official game placeholder', 'Imagen provisional del juego oficial Jumpfall')); ?>"></div>
            <div>
                <h2>Jumpfall</h2>
                <p><?php echo jg_e(jg_text(
                    'Jumpfall is an indie game developed by JEVZGames.',
                    'Jumpfall es un videojuego indie desarrollado por JEVZGames.'
                )); ?></p>
                <div class="actions">
                    <a class="button primary" href="<?php echo jg_e(jg_path('/games/jumpfall/')); ?>"><?php echo jg_e(jg_text('Open Official Page', 'Abrir página oficial')); ?></a>
                    <a class="button secondary" href="<?php echo jg_e(jg_path('/press/jumpfall/')); ?>"><?php echo jg_e(jg_text('Press Kit', 'Kit de prensa')); ?></a>
                </div>
            </div>
        </article>
    </section>
</main>
<?php jg_footer(); ?>
</body>
</html>
