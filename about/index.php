<?php
require dirname(__DIR__) . '/_includes/site.php';
$page = array(
    'title' => jg_text('About JEVZGames', 'Acerca de JEVZGames'),
    'description' => jg_text(
        'Learn about JEVZGames, the independent developer of JumpFall and its safe creator-focused tools.',
        'Conoce JEVZGames, desarrollador independiente de JumpFall y sus herramientas seguras para creadores.'
    ),
    'path' => '/about/',
    'image' => '/images/jumpfall/library_header.jpg',
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
    <section class="hero">
        <div>
            <span class="eyebrow"><?php echo jg_e(jg_text('About', 'Acerca de')); ?></span>
            <h1><?php echo jg_e(jg_text('About JEVZGames', 'Acerca de JEVZGames')); ?></h1>
            <p class="lead"><?php echo jg_e(jg_text(
                'JEVZGames is an independent game project developing JumpFall and documented tools for player-created levels, skins and data-driven extensions.',
                'JEVZGames es un proyecto independiente que desarrolla JumpFall y herramientas documentadas para niveles, skins y extensiones basadas en datos.'
            )); ?></p>
        </div>
        <div class="hero-media"><img src="<?php echo jg_e(jg_asset('/images/jumpfall/library_header.jpg')); ?>" alt="JEVZGames and JumpFall artwork"></div>
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
                    'JumpFall is the official game project developed by JEVZGames.',
                    'JumpFall es el proyecto de videojuego oficial desarrollado por JEVZGames.'
                )); ?></p>
            </article>
            <article class="card">
                <h3><?php echo jg_e(jg_text('Community Tools', 'Herramientas comunitarias')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'The project includes documentation and workflows for the Level Editor, community maps, custom skins, Lua map events and safe .jfmod packages.',
                    'El proyecto incluye documentación y flujos para el Editor de Niveles, mapas comunitarios, skins, eventos Lua y paquetes .jfmod seguros.'
                )); ?></p>
            </article>
        </div>
    </section>
</main>
<?php jg_footer(); ?>
</body>
</html>
