<?php
require dirname(__DIR__) . '/_includes/site.php';
$page = array(
    'title' => jg_text('About Us | JEVZGames', 'Sobre nosotros | JEVZGames'),
    'description' => jg_text(
        'JEVZGames is an independent game development and publishing studio based in Santiago, Chile. We create original games and support independent projects.',
        'JEVZGames es un estudio independiente de desarrollo y publicación de videojuegos con sede en Santiago, Chile. Creamos juegos originales y apoyamos proyectos independientes.'
    ),
    'path' => '/about-us/',
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
            <span class="eyebrow"><?php echo jg_e(jg_text('Independent Studio · Santiago, Chile', 'Estudio independiente · Santiago, Chile')); ?></span>
            <h1><?php echo jg_e(jg_text('About Us', 'Sobre nosotros')); ?></h1>
            <p class="lead"><?php echo jg_e(jg_text(
                'JEVZGames is an independent game development and publishing studio based in Santiago, Chile. We are a four-person team focused on creating original experiences and helping independent games move forward.',
                'JEVZGames es un estudio independiente de desarrollo y publicación de videojuegos con sede en Santiago, Chile. Somos un equipo de cuatro personas enfocado en crear experiencias originales y ayudar a que otros juegos independientes puedan salir adelante.'
            )); ?></p>
        </div>
        <div class="hero-media"><img src="<?php echo jg_e(jg_asset('/images/jumpfall/library_header.jpg')); ?>" alt="<?php echo jg_e(jg_text('JEVZGames studio and JumpFall artwork', 'Arte de JEVZGames y JumpFall')); ?>"></div>
    </section>

    <section class="section">
        <div class="section-header">
            <div>
                <span class="eyebrow"><?php echo jg_e(jg_text('What we do', 'Qué hacemos')); ?></span>
                <h2><?php echo jg_e(jg_text('Development and publishing', 'Desarrollo y publicación')); ?></h2>
            </div>
            <p><?php echo jg_e(jg_text(
                'We work on our own games while also helping independent projects with publishing, support and the practical steps needed to reach players.',
                'Trabajamos en nuestros propios juegos y, al mismo tiempo, ayudamos a proyectos independientes con publicación, apoyo y los pasos prácticos necesarios para llegar a los jugadores.'
            )); ?></p>
        </div>

        <div class="grid">
            <article class="card">
                <h3><?php echo jg_e(jg_text('Game Development', 'Desarrollo de videojuegos')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'We create original games and tools with a focus on clear ideas, experimentation and player-driven experiences.',
                    'Creamos juegos y herramientas originales con foco en ideas claras, experimentación y experiencias pensadas para los jugadores.'
                )); ?></p>
            </article>

            <article class="card">
                <h3><?php echo jg_e(jg_text('Independent Publishing', 'Publicación independiente')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'JEVZGames also acts as a publisher, helping independent games with release preparation, presentation and distribution when a project is a good fit.',
                    'JEVZGames también actúa como publisher, ayudando a juegos independientes con preparación de lanzamiento, presentación y distribución cuando un proyecto encaja con el estudio.'
                )); ?></p>
            </article>

            <article class="card">
                <h3><?php echo jg_e(jg_text('A Small Team', 'Un equipo pequeño')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'We are currently a four-person team. Staying small lets us work closely, make decisions quickly and keep a direct connection with the projects we support.',
                    'Actualmente somos un equipo de cuatro personas. Mantenernos pequeños nos permite trabajar de cerca, tomar decisiones rápido y conservar una relación directa con los proyectos que apoyamos.'
                )); ?></p>
            </article>
        </div>
    </section>

    <section class="section">
        <div class="section-header">
            <div>
                <span class="eyebrow"><?php echo jg_e(jg_text('Our goal', 'Nuestro objetivo')); ?></span>
                <h2><?php echo jg_e(jg_text('Build, support and grow independent games', 'Crear, apoyar y hacer crecer juegos independientes')); ?></h2>
            </div>
        </div>
        <article class="card">
            <p class="lead"><?php echo jg_e(jg_text(
                'Our goal is to create memorable experiences while contributing to the independent game ecosystem. We want to build our own projects, share what we learn and help other developers turn promising ideas into games that can reach an audience.',
                'Nuestro objetivo es crear experiencias memorables y, al mismo tiempo, aportar al ecosistema de videojuegos independientes. Queremos construir nuestros propios proyectos, compartir lo que aprendemos y ayudar a otros desarrolladores a convertir buenas ideas en juegos capaces de llegar a una audiencia.'
            )); ?></p>
        </article>
    </section>

    <section class="section">
        <div class="section-header">
            <div>
                <span class="eyebrow"><?php echo jg_e(jg_text('Independent structure', 'Estructura independiente')); ?></span>
                <h2><?php echo jg_e(jg_text('JEVZGames and Jeval Networks', 'JEVZGames y Jeval Networks')); ?></h2>
            </div>
        </div>
        <article class="card">
            <p><?php echo jg_e(jg_text(
                'JEVZGames is an independent studio and is not part of Jeval Networks. Jeval Networks may provide financial support to selected projects during their early development stages, but it does not own or operate JEVZGames.',
                'JEVZGames es un estudio independiente y no forma parte de Jeval Networks. Jeval Networks puede entregar apoyo financiero a proyectos seleccionados durante sus primeras etapas de desarrollo, pero no es propietaria ni opera JEVZGames.'
            )); ?></p>
        </article>
    </section>

    <section class="section" id="publishing">
        <div class="section-header">
            <div>
                <span class="eyebrow"><?php echo jg_e(jg_text('Publish with JEVZGames', 'Publica con JEVZGames')); ?></span>
                <h2><?php echo jg_e(jg_text('Would you like to publish your game with us?', '¿Te gustaría publicar tu juego con nosotros?')); ?></h2>
            </div>
            <p><?php echo jg_e(jg_text(
                'We want to work with independent developers who have a clear idea, a realistic project and the commitment to finish it.',
                'Queremos trabajar con desarrolladores independientes que tengan una idea clara, un proyecto realista y el compromiso de terminarlo.'
            )); ?></p>
        </div>

        <div class="grid">
            <article class="card">
                <h3><?php echo jg_e(jg_text('Basic requirements', 'Requisitos básicos')); ?></h3>
                <ul>
                    <li><?php echo jg_e(jg_text(
                        'Your project must be an original independent game and you must own, or have permission to use, all content included in it.',
                        'Tu proyecto debe ser un juego independiente original y debes ser dueño, o contar con permiso para usar, todo el contenido incluido en él.'
                    )); ?></li>
                    <li><?php echo jg_e(jg_text(
                        'You should have a playable prototype, demo or build that clearly shows the core idea of the game.',
                        'Debes contar con un prototipo, demo o build jugable que muestre claramente la idea principal del juego.'
                    )); ?></li>
                    <li><?php echo jg_e(jg_text(
                        'The project should have a realistic scope, development plan and a clear idea of the platforms you want to target.',
                        'El proyecto debe tener un alcance realista, un plan de desarrollo y una idea clara de las plataformas a las que quieres llegar.'
                    )); ?></li>
                    <li><?php echo jg_e(jg_text(
                        'You should be able to explain what kind of publishing support you are looking for and what stage the project is currently in.',
                        'Debes poder explicar qué tipo de apoyo de publicación estás buscando y en qué etapa se encuentra actualmente el proyecto.'
                    )); ?></li>
                    <li><?php echo jg_e(jg_text(
                        'Submitting a project does not guarantee that JEVZGames will publish, finance or accept it.',
                        'Enviar un proyecto no garantiza que JEVZGames vaya a publicarlo, financiarlo o aceptarlo.'
                    )); ?></li>
                </ul>
            </article>

            <article class="card">
                <h3><?php echo jg_e(jg_text('Applications', 'Postulaciones')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Our publishing application system is still being prepared. When applications open, this section will include the form and the information required to submit your project.',
                    'Nuestro sistema de postulaciones para publishing todavía está en preparación. Cuando abramos las postulaciones, esta sección incluirá el formulario y la información necesaria para enviar tu proyecto.'
                )); ?></p>

                <div class="actions">
                    <button class="button primary" type="button" disabled aria-disabled="true"><?php echo jg_e(jg_text('Apply now', 'Aplicar ahora')); ?></button>
                </div>

                <p><strong><?php echo jg_e(jg_text(
                    'Applications are not available yet.',
                    'Las postulaciones aún no se encuentran disponibles.'
                )); ?></strong></p>
            </article>
        </div>
    </section>

    <section class="section">
        <div class="actions">
            <a class="button primary" href="<?php echo jg_e(jg_path('/games/')); ?>"><?php echo jg_e(jg_text('Explore our games', 'Explorar nuestros juegos')); ?></a>
            <a class="button secondary" href="<?php echo jg_e(jg_path('/press/jumpfall/')); ?>"><?php echo jg_e(jg_text('Press Kit', 'Kit de prensa')); ?></a>
            <a class="button secondary" href="<?php echo jg_e(jg_path('/support/')); ?>"><?php echo jg_e(jg_text('Contact & Support', 'Contacto y soporte')); ?></a>
        </div>
    </section>
</main>
<?php jg_footer(); ?>
</body>
</html>
