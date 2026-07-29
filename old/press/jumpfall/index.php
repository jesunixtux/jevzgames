<?php
require dirname(__DIR__, 2) . '/_includes/site.php';
$page = array(
    'title' => jg_text('Jumpfall Press Kit - JEVZGames', 'Kit de prensa de Jumpfall - JEVZGames'),
    'description' => jg_text(
        'Official press kit for Jumpfall, an indie game developed by JEVZGames. Includes approved descriptions, links and media placeholders.',
        'Kit de prensa oficial de Jumpfall, un videojuego indie desarrollado por JEVZGames. Incluye descripciones aprobadas, enlaces y marcadores de medios.'
    ),
    'path' => '/press/jumpfall/',
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
    <section class="hero compact">
        <div>
            <span class="eyebrow"><?php echo jg_e(jg_text('Press Kit', 'Kit de prensa')); ?></span>
            <h1><?php echo jg_e(jg_text('Jumpfall Press Kit', 'Kit de prensa de Jumpfall')); ?></h1>
            <p class="lead"><?php echo jg_e(jg_text(
                'Official media and information page for Jumpfall, an indie game developed by JEVZGames.',
                'Página oficial de medios e información para Jumpfall, un videojuego indie desarrollado por JEVZGames.'
            )); ?></p>
        </div>
    </section>

    <section class="section">
        <div class="grid two">
            <article class="card">
                <h2><?php echo jg_e(jg_text('Short Description', 'Descripción corta')); ?></h2>
                <p>Jumpfall is an indie game developed by JEVZGames.</p>
                <p>Jumpfall es un videojuego indie desarrollado por JEVZGames.</p>
            </article>
            <article class="card">
                <h2><?php echo jg_e(jg_text('Fact Sheet', 'Ficha técnica')); ?></h2>
                <ul class="meta-list">
                    <li><span><?php echo jg_e(jg_text('Game', 'Juego')); ?></span><strong>Jumpfall</strong></li>
                    <li><span><?php echo jg_e(jg_text('Developer', 'Desarrollador')); ?></span><strong>JEVZGames</strong></li>
                    <li><span><?php echo jg_e(jg_text('Status', 'Estado')); ?></span><strong>TODO</strong></li>
                    <li><span>Steam URL</span><strong>TODO</strong></li>
                    <li><span><?php echo jg_e(jg_text('Press Contact', 'Contacto de prensa')); ?></span><a href="mailto:contact@jevzgames.cl">contact@jevzgames.cl</a></li>
                </ul>
            </article>
        </div>
    </section>

    <section class="section">
        <div class="section-header">
            <h2><?php echo jg_e(jg_text('Media', 'Medios')); ?></h2>
            <p><?php echo jg_e(jg_text(
                'Replace these placeholders with approved screenshots, logos and trailers.',
                'Reemplaza estos marcadores con capturas, logos y trailers aprobados.'
            )); ?></p>
        </div>
        <div class="screenshot-grid">
            <div class="screenshot" role="img" aria-label="<?php echo jg_e(jg_text('Jumpfall press screenshot placeholder', 'Captura provisional de prensa de Jumpfall')); ?>"></div>
            <div class="screenshot" role="img" aria-label="<?php echo jg_e(jg_text('Jumpfall logo placeholder', 'Logo provisional de Jumpfall')); ?>"></div>
            <div class="screenshot" role="img" aria-label="<?php echo jg_e(jg_text('Jumpfall trailer placeholder', 'Trailer provisional de Jumpfall')); ?>"></div>
        </div>
    </section>
</main>
<?php jg_footer(); ?>
</body>
</html>
