<?php
require __DIR__ . '/_includes/site.php';
$page = array(
    'title' => jg_text('JEVZGames - Indie Games and Jumpfall', 'JEVZGames - Juegos indie y Jumpfall'),
    'description' => jg_text(
        'Official website for JEVZGames, an indie game project developing Jumpfall, level editor tools and community map features.',
        'Sitio oficial de JEVZGames, un proyecto indie que desarrolla Jumpfall, herramientas de editor de niveles y funciones para mapas comunitarios.'
    ),
    'path' => '/',
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
    <section class="hero">
        <div>
            <span class="eyebrow"><?php echo jg_e(jg_text('Indie Game Project', 'Proyecto Indie')); ?></span>
            <h1>JEVZGames</h1>
            <p class="lead"><?php echo jg_e(jg_text(
                'JEVZGames is an independent game project focused on building clear, playable and community-friendly game experiences.',
                'JEVZGames es un proyecto independiente enfocado en crear experiencias de juego claras, jugables y pensadas para la comunidad.'
            )); ?></p>
            <p class="lead"><?php echo jg_e(jg_text(
                'Jumpfall is an indie game developed by JEVZGames.',
                'Jumpfall es un videojuego indie desarrollado por JEVZGames.'
            )); ?></p>
            <div class="actions">
                <a class="button primary" href="<?php echo jg_e(jg_path('/games/jumpfall/')); ?>"><?php echo jg_e(jg_text('View Jumpfall', 'Ver Jumpfall')); ?></a>
                <a class="button secondary" href="<?php echo jg_e(jg_path('/press/jumpfall/')); ?>"><?php echo jg_e(jg_text('Press Kit', 'Kit de prensa')); ?></a>
            </div>
        </div>
        <div class="visual-card" role="img" aria-label="<?php echo jg_e(jg_text('Official Jumpfall visual placeholder', 'Imagen provisional oficial de Jumpfall')); ?>">
            <strong>Jumpfall</strong>
            <span><?php echo jg_e(jg_text('Official game by JEVZGames', 'Juego oficial de JEVZGames')); ?></span>
        </div>
    </section>

    <section class="section">
        <div class="section-header">
            <div>
                <span class="eyebrow"><?php echo jg_e(jg_text('Official Game', 'Juego oficial')); ?></span>
                <h2>Jumpfall</h2>
            </div>
            <p><?php echo jg_e(jg_text(
                'Jumpfall is the main official game project from JEVZGames, with editor tools, community maps and Steam integration work.',
                'Jumpfall es el juego oficial principal de JEVZGames, con herramientas de editor, mapas comunitarios e integración con Steam.'
            )); ?></p>
        </div>
        <article class="card game-card">
            <div class="thumb" role="img" aria-label="<?php echo jg_e(jg_text('Clean placeholder image for Jumpfall', 'Imagen provisional limpia para Jumpfall')); ?>"></div>
            <div>
                <h3><?php echo jg_e(jg_text('Jumpfall - Official Game', 'Jumpfall - Juego oficial')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Jumpfall is an indie game developed by JEVZGames.',
                    'Jumpfall es un videojuego indie desarrollado por JEVZGames.'
                )); ?></p>
                <div class="actions">
                    <a class="button primary" href="<?php echo jg_e(jg_path('/games/jumpfall/')); ?>"><?php echo jg_e(jg_text('Official Page', 'Página oficial')); ?></a>
                    <a class="button secondary" href="<?php echo jg_e(jg_path('/games/jumpfall/level-editor/')); ?>"><?php echo jg_e(jg_text('Level Editor', 'Editor de Niveles')); ?></a>
                    <a class="button secondary" href="<?php echo jg_e(jg_path('/games/jumpfall/community-maps/')); ?>"><?php echo jg_e(jg_text('Community Maps', 'Mapas Comunitarios')); ?></a>
                </div>
            </div>
        </article>
    </section>

    <section class="section">
        <div class="grid">
            <article class="card">
                <h3><?php echo jg_e(jg_text('Professional Identity', 'Identidad profesional')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'JEVZGames is presented as a clean indie game brand, separated from personal identities and unrelated external communities.',
                    'JEVZGames se presenta como una marca indie limpia, separada de identidades personales y comunidades externas no relacionadas.'
                )); ?></p>
            </article>
            <article class="card">
                <h3><?php echo jg_e(jg_text('Player Tools', 'Herramientas para jugadores')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Jumpfall includes work around level editor tools, local creations, community maps and creator documentation.',
                    'Jumpfall incluye trabajo en herramientas de editor de niveles, creaciones locales, mapas comunitarios y documentación para creadores.'
                )); ?></p>
            </article>
            <article class="card">
                <h3><?php echo jg_e(jg_text('Official Information', 'Información oficial')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'The site links search engines and players to one official source for Jumpfall, press information and support.',
                    'El sitio conecta a buscadores y jugadores con una fuente oficial para Jumpfall, prensa y soporte.'
                )); ?></p>
            </article>
        </div>
    </section>
</main>
<?php jg_footer(); ?>
</body>
</html>
