<?php
require dirname(__DIR__) . '/_includes/site.php';
$page = array(
    'title' => jg_text('About JEVZGames', 'Acerca de JEVZGames'),
    'description' => jg_text(
        'Learn about JEVZGames, an independent game project developing Jumpfall and related community-focused tools.',
        'Conoce JEVZGames, un proyecto independiente que desarrolla Jumpfall y herramientas enfocadas en la comunidad.'
    ),
    'path' => '/about/',
    'jsonld' => array(jg_org_schema())
);
?><!doctype html>
<html lang="<?php echo jg_e(jg_lang()); ?>">
<head>
<?php jg_head($page); ?>
</head>
<body>
<?php jg_header('about'); ?>
<main id="main" class="page">
    <section class="hero compact">
        <div>
            <span class="eyebrow"><?php echo jg_e(jg_text('About', 'Acerca de')); ?></span>
            <h1><?php echo jg_e(jg_text('About JEVZGames', 'Acerca de JEVZGames')); ?></h1>
            <p class="lead"><?php echo jg_e(jg_text(
                'JEVZGames is an independent game project focused on Jumpfall and tools that support player-created content.',
                'JEVZGames es un proyecto independiente enfocado en Jumpfall y en herramientas que apoyan contenido creado por jugadores.'
            )); ?></p>
        </div>
    </section>

    <section class="section">
        <div class="grid">
            <article class="card">
                <h3><?php echo jg_e(jg_text('Indie Focus', 'Enfoque indie')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'JEVZGames presents its work as an independent game brand with a clean, professional public identity.',
                    'JEVZGames presenta su trabajo como una marca independiente con una identidad pública limpia y profesional.'
                )); ?></p>
            </article>
            <article class="card">
                <h3><?php echo jg_e(jg_text('Official Game', 'Juego oficial')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Jumpfall is the official game project developed by JEVZGames.',
                    'Jumpfall es el proyecto de videojuego oficial desarrollado por JEVZGames.'
                )); ?></p>
            </article>
            <article class="card">
                <h3><?php echo jg_e(jg_text('Community Tools', 'Herramientas comunitarias')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'The project includes documentation and workflows for level editor tools and community maps.',
                    'El proyecto incluye documentación y flujos de trabajo para herramientas de editor de niveles y mapas comunitarios.'
                )); ?></p>
            </article>
        </div>
    </section>
</main>
<?php jg_footer(); ?>
</body>
</html>
