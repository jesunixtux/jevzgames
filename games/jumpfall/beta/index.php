<?php
require dirname(__DIR__, 3) . '/_includes/site.php';

$page = array(
    'title' => jg_text('JumpFall Beta Access - Coming Soon | JEVZGames', 'Beta de JumpFall - Próximamente | JEVZGames'),
    'description' => jg_text(
        'JumpFall Beta Access is coming soon. Free closed-beta applications are not open yet; follow the official page for updates.',
        'El acceso a la beta de JumpFall llegará próximamente. Las solicitudes para la beta cerrada gratuita aún no están abiertas.'
    ),
    'path' => '/games/jumpfall/beta/',
    'image' => '/images/jumpfall/Screenshot-game/3.jpg',
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
    <div class="breadcrumb">
        <a href="<?php echo jg_e(jg_path('/games/')); ?>"><?php echo jg_e(jg_text('Games', 'Juegos')); ?></a> /
        <a href="<?php echo jg_e(jg_path('/games/jumpfall/')); ?>">JumpFall</a> /
        <?php echo jg_e(jg_text('Beta Access', 'Acceso a la beta')); ?>
    </div>

    <section class="hero beta-hero">
        <div>
            <span class="eyebrow beta-eyebrow"><?php echo jg_e(jg_text('Closed Beta · Coming Soon', 'Beta cerrada · Próximamente')); ?></span>
            <h1>JumpFall<br><span class="beta-title-accent">Beta Access</span></h1>
            <p class="lead"><?php echo jg_e(jg_text(
                'Be among the players who help shape JumpFall before its Early Access launch.',
                'Sé parte de quienes ayudarán a mejorar JumpFall antes de su lanzamiento en Acceso Anticipado.'
            )); ?></p>
            <p class="beta-intro"><?php echo jg_e(jg_text(
                'We are preparing a limited, free closed beta through Steam. Applications are not open yet, and no keys are being distributed from this page.',
                'Estamos preparando una beta cerrada gratuita con cupos limitados a través de Steam. Las solicitudes aún no están abiertas y esta página no distribuye claves.'
            )); ?></p>
            <div class="beta-status" role="status">
                <span class="beta-status-dot" aria-hidden="true"></span>
                <strong><?php echo jg_e(jg_text('Applications not open', 'Inscripciones no disponibles')); ?></strong>
                <span><?php echo jg_e(jg_text('Coming soon', 'Próximamente')); ?></span>
            </div>
            <div class="actions">
                <a class="button primary" href="<?php echo jg_e(JG_STEAM_URL); ?>" target="_blank" rel="noopener noreferrer"><?php echo jg_e(jg_text('View JumpFall on Steam', 'Ver JumpFall en Steam')); ?></a>
                <a class="button secondary" href="<?php echo jg_e(jg_path('/games/jumpfall/')); ?>"><?php echo jg_e(jg_text('Explore the game', 'Conoce el juego')); ?></a>
            </div>
        </div>
        <div class="hero-media beta-media">
            <img src="<?php echo jg_e(jg_asset('/images/jumpfall/Screenshot-game/3.jpg')); ?>" alt="<?php echo jg_e(jg_text('JumpFall gameplay preview', 'Vista previa del gameplay de JumpFall')); ?>">
            <span class="beta-media-label"><?php echo jg_e(jg_text('Development preview', 'Vista del desarrollo')); ?></span>
        </div>
    </section>

    <section class="section">
        <div class="section-header">
            <div>
                <span class="eyebrow"><?php echo jg_e(jg_text('What to expect', 'Qué esperar')); ?></span>
                <h2><?php echo jg_e(jg_text('A place for future testers', 'Un espacio para futuros testers')); ?></h2>
            </div>
            <p><?php echo jg_e(jg_text(
                'The application process, access conditions and available places will be announced here when they are ready.',
                'El proceso de solicitud, las condiciones de acceso y los cupos disponibles se anunciarán aquí cuando estén definidos.'
            )); ?></p>
        </div>
        <div class="grid">
            <article class="card beta-info-card">
                <span class="beta-step">01</span>
                <h3><?php echo jg_e(jg_text('Apply', 'Postular')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'An application option will appear here when registration opens. There is no active form yet.',
                    'La opción para postular aparecerá aquí cuando se abran las inscripciones. Todavía no existe un formulario activo.'
                )); ?></p>
            </article>
            <article class="card beta-info-card">
                <span class="beta-step">02</span>
                <h3><?php echo jg_e(jg_text('Selection', 'Selección')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Places will be limited. Sending an application will not automatically guarantee access.',
                    'Los cupos serán limitados. Enviar una solicitud no garantizará acceso automáticamente.'
                )); ?></p>
            </article>
            <article class="card beta-info-card">
                <span class="beta-step">03</span>
                <h3><?php echo jg_e(jg_text('Steam access', 'Acceso por Steam')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Selected testers will receive the activation instructions once the access method is confirmed.',
                    'Los testers seleccionados recibirán instrucciones de activación cuando se confirme el método de acceso.'
                )); ?></p>
            </article>
        </div>
    </section>

    <section class="section">
        <article class="card notice beta-faq">
            <span class="eyebrow"><?php echo jg_e(jg_text('Current status', 'Estado actual')); ?></span>
            <h2><?php echo jg_e(jg_text('Not accepting applications yet', 'Aún no recibimos solicitudes')); ?></h2>
            <p><?php echo jg_e(jg_text(
                'No opening date has been announced. The intended beta is free for selected participants, subject to final Steam access arrangements. Check this official page for updates; do not purchase a beta key from third parties.',
                'Todavía no se ha anunciado una fecha de apertura. La beta está prevista como gratuita para participantes seleccionados, sujeta a la confirmación del acceso en Steam. Revisa esta página oficial para novedades y no compres supuestas claves beta a terceros.'
            )); ?></p>
            <div class="actions">
                <a class="button secondary" href="<?php echo jg_e(jg_path('/games/jumpfall/')); ?>"><?php echo jg_e(jg_text('Back to JumpFall', 'Volver a JumpFall')); ?></a>
            </div>
        </article>
    </section>
</main>
<?php jg_footer(); ?>
</body>
</html>
