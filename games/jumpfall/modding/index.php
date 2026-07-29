<?php
require dirname(__DIR__, 3) . '/_includes/site.php';
$page = array(
    'title' => jg_text('JumpFall Modding - Official .jfmod Tools', 'Modding de JumpFall - Herramientas oficiales .jfmod'),
    'description' => jg_text(
        'Official overview of JumpFall data-driven .jfmod packages, the integrated Mod Manager and the cross-platform JumpFall SDK.',
        'Resumen oficial de los paquetes .jfmod basados en datos, el Mod Manager integrado y el SDK multiplataforma de JumpFall.'
    ),
    'path' => '/games/jumpfall/modding/',
    'image' => '/images/jumpfall/Screenshot-game/12-level-editor.jpg',
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
    <div class="breadcrumb"><a href="<?php echo jg_e(jg_path('/games/jumpfall/')); ?>">JumpFall</a> / <?php echo jg_e(jg_text('Modding', 'Modding')); ?></div>
    <section class="hero">
        <div>
            <span class="eyebrow"><?php echo jg_e(jg_text('PC Creator Tools', 'Herramientas para creadores en PC')); ?></span>
            <h1><?php echo jg_e(jg_text('JumpFall Modding', 'Modding de JumpFall')); ?></h1>
            <p class="lead"><?php echo jg_e(jg_text(
                'JumpFall Modding 1.0 loads validated .jfmod data packages as a reversible layer over the base game without replacing the executable.',
                'JumpFall Modding 1.0 carga paquetes de datos .jfmod validados como una capa reversible sobre el juego base sin reemplazar el ejecutable.'
            )); ?></p>
            <div class="actions">
                <a class="button primary" href="<?php echo jg_e(JG_SDK_URL); ?>" target="_blank" rel="noopener noreferrer"><?php echo jg_e(jg_text('Open JumpFall SDK', 'Abrir JumpFall SDK')); ?></a>
                <a class="button secondary" href="<?php echo jg_e(jg_path('/games/jumpfall/level-editor/')); ?>"><?php echo jg_e(jg_text('Level Editor', 'Editor de Niveles')); ?></a>
                <a class="button secondary" href="<?php echo jg_e(jg_path('/games/jumpfall/community-maps/')); ?>"><?php echo jg_e(jg_text('Community Maps', 'Mapas Comunitarios')); ?></a>
            </div>
        </div>
        <div class="hero-media"><img src="<?php echo jg_e(jg_asset('/images/jumpfall/Screenshot-game/12-level-editor.jpg')); ?>" alt="<?php echo jg_e(jg_text('JumpFall creator tools interface', 'Interfaz de herramientas para creadores de JumpFall')); ?>"></div>
    </section>

    <section class="section">
        <div class="section-header">
            <h2><?php echo jg_e(jg_text('What .jfmod Can Do', 'Qué puede hacer .jfmod')); ?></h2>
            <p><?php echo jg_e(jg_text(
                'The current runtime exposes controlled content capabilities instead of arbitrary executable code.',
                'El runtime actual expone capacidades de contenido controladas en lugar de código ejecutable arbitrario.'
            )); ?></p>
        </div>
        <div class="grid">
            <article class="card">
                <h3><?php echo jg_e(jg_text('Maps and Editor Pieces', 'Mapas y piezas del editor')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Register .jfue maps and safe 2D editor pieces derived from approved base archetypes such as platforms, checkpoints, jump plates and elevators.',
                    'Registra mapas .jfue y piezas 2D seguras derivadas de arquetipos aprobados como plataformas, checkpoints, placas de impulso y ascensores.'
                )); ?></p>
            </article>
            <article class="card">
                <h3><?php echo jg_e(jg_text('Visuals, Audio and Localization', 'Visuales, audio y localización')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Use validated images, silent map videos, WAV/OGG audio and external localization files within documented limits.',
                    'Usa imágenes validadas, videos de mapa sin audio, audio WAV/OGG y archivos de localización dentro de límites documentados.'
                )); ?></p>
            </article>
            <article class="card">
                <h3><?php echo jg_e(jg_text('Controlled Game Extensions', 'Extensiones controladas')); ?></h3>
                <p><?php echo jg_e(jg_text(
                    'Apply scene patches, limited menu layers and bounded player tuning while dependency, conflict and priority rules keep the active profile deterministic.',
                    'Aplica parches de escena, capas limitadas de menú y ajustes acotados del jugador mientras dependencias, conflictos y prioridades mantienen un perfil determinista.'
                )); ?></p>
            </article>
        </div>
    </section>

    <section class="section">
        <div class="grid two">
            <article class="card">
                <h2><?php echo jg_e(jg_text('Install and Manage', 'Instalar y administrar')); ?></h2>
                <ol>
                    <li><?php echo jg_e(jg_text('Place the .jfmod in Documents/jumpfall/mods/packages.', 'Coloca el .jfmod en Documents/jumpfall/mods/packages.')); ?></li>
                    <li><?php echo jg_e(jg_text('Open JumpFall on PC and enter the Mod Manager.', 'Abre JumpFall en PC y entra al Mod Manager.')); ?></li>
                    <li><?php echo jg_e(jg_text('Refresh the list and review validation diagnostics.', 'Actualiza la lista y revisa los diagnósticos de validación.')); ?></li>
                    <li><?php echo jg_e(jg_text('Choose the pending profile and restart to apply it.', 'Elige el perfil pendiente y reinicia para aplicarlo.')); ?></li>
                </ol>
                <p><?php echo jg_e(jg_text(
                    'Safe mode launch options can disable mods without deleting packages or the saved profile.',
                    'Los parámetros de modo seguro pueden desactivar mods sin borrar paquetes ni el perfil guardado.'
                )); ?></p>
            </article>
            <article class="card notice">
                <h2><?php echo jg_e(jg_text('Security Boundary', 'Límite de seguridad')); ?></h2>
                <p><?php echo jg_e(jg_text(
                    '.jfmod does not load external DLLs, C# assemblies, native code or arbitrary AssetBundles. Packages are checked for unsafe paths, symlinks, oversized files, undeclared capabilities and invalid dependencies before activation.',
                    '.jfmod no carga DLL externas, assemblies C#, código nativo ni AssetBundles arbitrarios. Los paquetes se revisan por rutas inseguras, enlaces simbólicos, archivos excesivos, capacidades no declaradas y dependencias inválidas antes de activarse.'
                )); ?></p>
            </article>
        </div>
    </section>

    <section class="section">
        <div class="grid two">
            <article class="card">
                <h2><?php echo jg_e(jg_text('Map Lua Is Separate', 'Lua de mapas es separado')); ?></h2>
                <p><?php echo jg_e(jg_text(
                    'Restricted Lua events belong to custom map packages and run through the map API. They are documented in the Level Editor workflow.',
                    'Los eventos Lua restringidos pertenecen a paquetes de mapas personalizados y se ejecutan mediante la API de mapas. Se documentan en el flujo del Level Editor.'
                )); ?></p>
                <p><?php echo jg_e(jg_text(
                    'Lua is currently disabled inside .jfmod packages. A .jfmod containing Lua files is rejected instead of executing them.',
                    'Lua está deshabilitado actualmente dentro de paquetes .jfmod. Un .jfmod que contenga archivos Lua se rechaza en lugar de ejecutarlos.'
                )); ?></p>
            </article>
            <article class="card">
                <h2><?php echo jg_e(jg_text('Platforms and Status', 'Plataformas y estado')); ?></h2>
                <p><?php echo jg_e(jg_text(
                    'The .jfmod runtime is available for Windows, Linux and macOS builds. Android and iOS do not discover or run .jfmod packages.',
                    'El runtime .jfmod está disponible en builds de Windows, Linux y macOS. Android e iOS no descubren ni ejecutan paquetes .jfmod.'
                )); ?></p>
                <p><?php echo jg_e(jg_text(
                    'The integrated manager is functional but still being polished for controller navigation, macOS restart behavior and broader public distribution.',
                    'El gestor integrado es funcional, pero sigue en pulido para navegación con mando, reinicio en macOS y distribución pública más amplia.'
                )); ?></p>
            </article>
        </div>
    </section>
</main>
<?php jg_footer(); ?>
</body>
</html>
