<?php
require dirname(__DIR__, 3) . '/_includes/site.php';
$page = array(
    'title' => jg_text('Jumpfall Community Maps - JEVZGames', 'Mapas Comunitarios de Jumpfall - JEVZGames'),
    'description' => jg_text(
        'Official overview of Jumpfall community maps, custom level files and Workshop-oriented map sharing workflows.',
        'Resumen oficial de los mapas comunitarios de Jumpfall, archivos de niveles personalizados y flujos de publicación orientados a Workshop.'
    ),
    'path' => '/games/jumpfall/community-maps/',
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
    <div class="breadcrumb"><a href="<?php echo jg_e(jg_path('/games/jumpfall/')); ?>">Jumpfall</a> / <?php echo jg_e(jg_text('Community Maps', 'Mapas Comunitarios')); ?></div>
    <section class="hero compact">
        <div>
            <span class="eyebrow"><?php echo jg_e(jg_text('Community Maps', 'Mapas Comunitarios')); ?></span>
            <h1><?php echo jg_e(jg_text('Jumpfall Community Maps', 'Mapas Comunitarios de Jumpfall')); ?></h1>
            <p class="lead"><?php echo jg_e(jg_text(
                'Community maps are custom Jumpfall levels created with editor tools and prepared for local or Workshop-oriented workflows.',
                'Los mapas comunitarios son niveles personalizados de Jumpfall creados con herramientas del editor y preparados para flujos locales o de Workshop.'
            )); ?></p>
        </div>
    </section>

    <section class="section">
        <div class="grid">
            <article class="card">
                <h3><?php echo jg_e(jg_text('Compiled Maps', 'Mapas compilados')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Playable maps use compiled map files intended for Jumpfall runtime loading.',
                    'Los mapas jugables usan archivos compilados pensados para cargarse dentro de Jumpfall.'
                )); ?></p>
            </article>
            <article class="card">
                <h3><?php echo jg_e(jg_text('Local Assets', 'Assets locales')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Maps can reference local asset folders for supported custom content such as backgrounds or sounds.',
                    'Los mapas pueden usar carpetas de assets locales para contenido personalizado compatible, como fondos o sonidos.'
                )); ?></p>
            </article>
            <article class="card">
                <h3><?php echo jg_e(jg_text('Workshop Workflow', 'Flujo de Workshop')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Workshop publishing is part of the community map pipeline. Public upload tooling should be confirmed before release.',
                    'La publicación en Workshop forma parte del flujo de mapas comunitarios. Las herramientas públicas de subida deben confirmarse antes de publicarse.'
                )); ?></p>
            </article>
        </div>
    </section>

    <section class="section">
        <article class="card placeholder">
            <h2><?php echo jg_e(jg_text('Map Browser', 'Explorador de mapas')); ?></h2>
            <p><?php echo jg_e(jg_text(
                'TODO - add public community map browser or official Steam Workshop link when available.',
                'TODO - agregar el explorador público de mapas comunitarios o el enlace oficial de Steam Workshop cuando esté disponible.'
            )); ?></p>
        </article>
    </section>
</main>
<?php jg_footer(); ?>
</body>
</html>
