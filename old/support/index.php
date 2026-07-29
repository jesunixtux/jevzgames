<?php
require dirname(__DIR__) . '/_includes/site.php';
$skinManualPath = jg_lang() === 'es' ? '/games/jumpfall/tutorial/skin/es/' : '/games/jumpfall/tutorial/skin/en/';
$page = array(
    'title' => jg_text('Support - JEVZGames', 'Soporte - JEVZGames'),
    'description' => jg_text(
        'Official support page for JEVZGames and Jumpfall. Find contact information and links to Jumpfall documentation.',
        'Página oficial de soporte para JEVZGames y Jumpfall. Encuentra información de contacto y enlaces a la documentación de Jumpfall.'
    ),
    'path' => '/support/',
    'jsonld' => array(jg_org_schema())
);
?><!doctype html>
<html lang="<?php echo jg_e(jg_lang()); ?>">
<head>
<?php jg_head($page); ?>
</head>
<body>
<?php jg_header('support'); ?>
<main id="main" class="page">
    <section class="hero compact">
        <div>
            <span class="eyebrow"><?php echo jg_e(jg_text('Support', 'Soporte')); ?></span>
            <h1><?php echo jg_e(jg_text('Support', 'Soporte')); ?></h1>
            <p class="lead"><?php echo jg_e(jg_text(
                'Use this page for official JEVZGames and Jumpfall support links.',
                'Usa esta página para encontrar enlaces oficiales de soporte de JEVZGames y Jumpfall.'
            )); ?></p>
        </div>
    </section>

    <section class="section">
        <div class="grid two">
            <article class="card">
                <h2><?php echo jg_e(jg_text('Contact', 'Contacto')); ?></h2>
                <p>Email: <a href="mailto:contact@jevzgames.cl">contact@jevzgames.cl</a></p>
                <p><?php echo jg_e(jg_text(
                    'TODO - add preferred support form or official issue channel if available.',
                    'TODO - agregar el formulario de soporte preferido o canal oficial de reportes cuando esté disponible.'
                )); ?></p>
            </article>
            <article class="card">
                <h2><?php echo jg_e(jg_text('Jumpfall Help', 'Ayuda de Jumpfall')); ?></h2>
                <p><?php echo jg_e(jg_text(
                    'Find manuals and official pages for Jumpfall tools.',
                    'Encuentra manuales y páginas oficiales para las herramientas de Jumpfall.'
                )); ?></p>
                <div class="actions">
                    <a class="button secondary" href="<?php echo jg_e(jg_path('/games/jumpfall/')); ?>">Jumpfall</a>
                    <a class="button secondary" href="<?php echo jg_e(jg_path('/games/jumpfall/level-editor/')); ?>"><?php echo jg_e(jg_text('Level Editor', 'Editor de Niveles')); ?></a>
                    <a class="button secondary" href="<?php echo jg_e(jg_path('/games/jumpfall/community-maps/')); ?>"><?php echo jg_e(jg_text('Community Maps', 'Mapas Comunitarios')); ?></a>
                    <a class="button secondary" href="<?php echo jg_e(jg_path($skinManualPath, 'en')); ?>"><?php echo jg_e(jg_text('Custom Skins', 'Skins personalizadas')); ?></a>
                </div>
            </article>
        </div>
    </section>
</main>
<?php jg_footer(); ?>
</body>
</html>
