<?php
require dirname(__DIR__) . '/_includes/site.php';
$skinManualPath = jg_lang() === 'es' ? '/games/jumpfall/tutorial/skin/es/' : '/games/jumpfall/tutorial/skin/en/';
$page = array(
    'title' => jg_text('Support - JEVZGames', 'Soporte - JEVZGames'),
    'description' => jg_text(
        'Official support page for JEVZGames and JumpFall. Find contact information and links to JumpFall documentation.',
        'Página oficial de soporte para JEVZGames y JumpFall. Encuentra información de contacto y enlaces a la documentación de JumpFall.'
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
                'Official support links for JEVZGames and JumpFall.',
                'Enlaces oficiales de soporte para JEVZGames y JumpFall.'
            )); ?></p>
        </div>
    </section>

    <section class="section">
        <div class="grid two">
            <article class="card">
                <h2><?php echo jg_e(jg_text('Contact', 'Contacto')); ?></h2>
                <p>Email: <a href="mailto:<?php echo jg_e(JG_CONTACT_EMAIL); ?>"><?php echo jg_e(JG_CONTACT_EMAIL); ?></a></p>
                <p><?php echo jg_e(jg_text(
                    'Use this contact for official support, press or website-related requests.',
                    'Usa este contacto para soporte oficial, prensa o solicitudes relacionadas con el sitio web.'
                )); ?></p>
            </article>
            <article class="card">
                <h2><?php echo jg_e(jg_text('JumpFall Help', 'Ayuda de JumpFall')); ?></h2>
                <p><?php echo jg_e(jg_text(
                    'Find manuals and official pages for JumpFall tools.',
                    'Encuentra manuales y páginas oficiales para las herramientas de JumpFall.'
                )); ?></p>
                <div class="actions">
                    <a class="button secondary" href="<?php echo jg_e(jg_path('/games/jumpfall/')); ?>">JumpFall</a>
                    <a class="button secondary" href="<?php echo jg_e(jg_path('/games/jumpfall/level-editor/')); ?>"><?php echo jg_e(jg_text('Level Editor', 'Editor de Niveles')); ?></a>
                    <a class="button secondary" href="<?php echo jg_e(jg_path('/games/jumpfall/community-maps/')); ?>"><?php echo jg_e(jg_text('Community Maps', 'Mapas Comunitarios')); ?></a>
                    <a class="button secondary" href="<?php echo jg_e(jg_path('/games/jumpfall/modding/')); ?>"><?php echo jg_e(jg_text('Modding', 'Modding')); ?></a>
                    <a class="button secondary" href="<?php echo jg_e(jg_path($skinManualPath, 'en')); ?>"><?php echo jg_e(jg_text('Custom Skins', 'Skins personalizadas')); ?></a>
                </div>
            </article>
        </div>
    </section>
</main>
<?php jg_footer(); ?>
</body>
</html>
