<?php
require dirname(__DIR__, 2) . '/_includes/site.php';

$page = array(
    'title' => 'CH-FireDanger - JEVZGames',
    'description' => jg_text(
        'Official JEVZGames page for CH-FireDanger, an experimental 2D simulation playtest for Windows available on itch.io.',
        'Página oficial de JEVZGames para CH-FireDanger, un playtest experimental de simulación 2D para Windows disponible en itch.io.'
    ),
    'path' => '/games/ch-fire/',
    'jsonld' => array(jg_org_schema(), jg_ch_fire_schema())
);
?><!doctype html>
<html lang="<?php echo jg_e(jg_lang()); ?>">
<head>
<?php jg_head($page); ?>
</head>
<body>
<?php jg_header('games'); ?>
<main id="main" class="page">
    <div class="breadcrumb">
        <a href="<?php echo jg_e(jg_path('/games/')); ?>"><?php echo jg_e(jg_text('Games', 'Juegos')); ?></a>
        <span aria-hidden="true"> / </span>
        <span>CH-FireDanger</span>
    </div>

    <section class="hero compact">
        <div>
            <span class="eyebrow"><?php echo jg_e(jg_text('Experimental Playtest', 'Playtest experimental')); ?></span>
            <h1>CH-FireDanger</h1>
            <p class="lead"><?php echo jg_e(jg_text(
                'An experimental 2D simulation playtest for Windows published by JEVZGames on itch.io.',
                'Un playtest experimental de simulación 2D para Windows publicado por JEVZGames en itch.io.'
            )); ?></p>
            <div class="actions">
                <a class="button primary" href="<?php echo jg_e(JG_CH_FIRE_URL); ?>" target="_blank" rel="noopener noreferrer"><?php echo jg_e(jg_text('Get it on itch.io', 'Ver en itch.io')); ?></a>
                <a class="button secondary" href="<?php echo jg_e(JG_ITCH_URL); ?>" target="_blank" rel="noopener noreferrer"><?php echo jg_e(jg_text('JEVZGames on itch.io', 'JEVZGames en itch.io')); ?></a>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="grid two">
            <article class="card">
                <h2><?php echo jg_e(jg_text('Project information', 'Información del proyecto')); ?></h2>
                <ul class="meta-list">
                    <li><span><?php echo jg_e(jg_text('Status', 'Estado')); ?></span><span><?php echo jg_e(jg_text('Released playtest', 'Playtest publicado')); ?></span></li>
                    <li><span><?php echo jg_e(jg_text('Platform', 'Plataforma')); ?></span><span>Windows</span></li>
                    <li><span><?php echo jg_e(jg_text('Genre', 'Género')); ?></span><span><?php echo jg_e(jg_text('Simulation', 'Simulación')); ?></span></li>
                    <li><span><?php echo jg_e(jg_text('Tags', 'Etiquetas')); ?></span><span>2D · Singleplayer · Unity</span></li>
                    <li><span><?php echo jg_e(jg_text('Distribution', 'Distribución')); ?></span><a href="<?php echo jg_e(JG_CH_FIRE_URL); ?>" target="_blank" rel="noopener noreferrer">itch.io</a></li>
                    <li><span><?php echo jg_e(jg_text('Price', 'Precio')); ?></span><span><?php echo jg_e(jg_text('Name your own price', 'Paga lo que quieras')); ?></span></li>
                </ul>
            </article>

            <article class="card notice">
                <h2><?php echo jg_e(jg_text('About this build', 'Sobre esta build')); ?></h2>
                <p><?php echo jg_e(jg_text(
                    'This page is the official JEVZGames home for CH-FireDanger. The current public build is distributed through itch.io while the project remains experimental.',
                    'Esta página es el espacio oficial de JEVZGames para CH-FireDanger. La build pública actual se distribuye mediante itch.io mientras el proyecto sigue siendo experimental.'
                )); ?></p>
            </article>
        </div>
    </section>

    <section class="section">
        <article class="card placeholder">
            <h2><?php echo jg_e(jg_text('Project media', 'Material del proyecto')); ?></h2>
            <p><?php echo jg_e(jg_text(
                'This section is ready for screenshots, development notes, system requirements and future project updates.',
                'Esta sección queda preparada para capturas, notas de desarrollo, requisitos del sistema y futuras actualizaciones del proyecto.'
            )); ?></p>
        </article>
    </section>
</main>
<?php jg_footer(); ?>
</body>
</html>
