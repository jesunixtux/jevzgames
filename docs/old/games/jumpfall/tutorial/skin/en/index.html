<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jumpfall - Current JVSK Skin Guide</title>
  <meta name="description" content="Current English guide for creating custom Jumpfall skins with jumpfall_skin_tools, packaging them as .jvsk files and testing them in Jumpfall.">
  <link rel="canonical" href="https://jevzgames.cl/games/jumpfall/tutorial/skin/en/">
  <link rel="alternate" hreflang="en" href="https://jevzgames.cl/games/jumpfall/tutorial/skin/en/">
  <link rel="alternate" hreflang="es" href="https://jevzgames.cl/games/jumpfall/tutorial/skin/es/">
  <link rel="alternate" hreflang="x-default" href="https://jevzgames.cl/games/jumpfall/tutorial/skin/en/">
  <meta property="og:site_name" content="JEVZGames">
  <meta property="og:type" content="article">
  <meta property="og:locale" content="en_US">
  <meta property="og:title" content="Jumpfall - Current JVSK Skin Guide">
  <meta property="og:description" content="Create custom Jumpfall skins, package them as .jvsk files and test them in the game.">
  <meta property="og:url" content="https://jevzgames.cl/games/jumpfall/tutorial/skin/en/">
  <meta name="twitter:card" content="summary">
  <style>
    :root {
      color-scheme: dark;
      --bg: #10141f;
      --panel: #171d2b;
      --panel-soft: #1e2637;
      --text: #eef2f7;
      --muted: #aeb8c8;
      --border: #313b50;
      --accent: #18c28f;
      --accent-2: #56a8ff;
      --warn: #ffc857;
      --danger: #ff6b7a;
      --code: #0b0f18;
    }

    * { box-sizing: border-box; }
    html { scroll-behavior: smooth; }

    body {
      margin: 0;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
      background: var(--bg);
      color: var(--text);
      line-height: 1.6;
    }

    header {
      border-bottom: 1px solid var(--border);
      background: #121827;
      position: sticky;
      top: 0;
      z-index: 20;
    }

    .header-inner {
      max-width: 1120px;
      margin: 0 auto;
      padding: 14px 18px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 16px;
    }

    .brand {
      display: flex;
      align-items: center;
      gap: 12px;
      min-width: 0;
    }

    .brand-mark {
      width: 34px;
      height: 34px;
      border-radius: 8px;
      background: linear-gradient(135deg, var(--accent), var(--accent-2));
      color: #071018;
      font-weight: 900;
      display: grid;
      place-items: center;
      flex: 0 0 auto;
    }

    .brand-title {
      font-weight: 800;
      font-size: 1.02rem;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .brand-subtitle {
      color: var(--muted);
      font-size: 0.82rem;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .header-actions {
      display: flex;
      align-items: center;
      justify-content: flex-end;
      gap: 8px;
      flex-wrap: wrap;
    }

    .version-pill,
    .language-link {
      border: 1px solid rgba(24, 194, 143, 0.45);
      color: #b9ffe8;
      background: rgba(24, 194, 143, 0.12);
      border-radius: 999px;
      padding: 5px 10px;
      font-size: 0.78rem;
      white-space: nowrap;
      text-decoration: none;
      font-weight: 800;
    }

    .language-link {
      border-color: rgba(174, 184, 200, 0.45);
      color: var(--text);
      background: rgba(16, 20, 31, 0.85);
    }

    main {
      max-width: 1120px;
      margin: 0 auto;
      padding: 22px 18px 44px;
    }

    .layout {
      display: grid;
      grid-template-columns: minmax(0, 1fr) 290px;
      gap: 20px;
      align-items: start;
    }

    .card {
      background: var(--panel);
      border: 1px solid var(--border);
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 18px;
      box-shadow: 0 16px 28px rgba(0, 0, 0, 0.18);
    }

    .side {
      position: sticky;
      top: 86px;
    }

    h1, h2, h3 {
      margin: 0;
      line-height: 1.1;
      letter-spacing: 0;
    }

    h1 {
      font-size: clamp(2rem, 5vw, 3.2rem);
      margin-bottom: 14px;
    }

    h2 {
      font-size: 1.55rem;
      margin-bottom: 12px;
    }

    h3 {
      font-size: 1.08rem;
      margin: 18px 0 10px;
    }

    p { margin: 0 0 14px; }
    a { color: #82c4ff; }
    .muted { color: var(--muted); }

    code {
      background: var(--code);
      border: 1px solid var(--border);
      border-radius: 5px;
      padding: 2px 5px;
      color: #d9fbe8;
      font-family: Consolas, Monaco, monospace;
      font-size: 0.94em;
    }

    pre {
      background: var(--code);
      border: 1px solid var(--border);
      border-radius: 8px;
      color: #e7f6ff;
      overflow-x: auto;
      padding: 14px;
      margin: 14px 0;
    }

    pre code {
      background: transparent;
      border: 0;
      padding: 0;
      color: inherit;
      font-size: 0.9rem;
      line-height: 1.45;
    }

    .notice {
      border-left: 5px solid var(--warn);
      background: rgba(255, 200, 87, 0.12);
      padding: 12px 14px;
      border-radius: 8px;
      margin: 14px 0;
    }

    .notice.ok {
      border-left-color: var(--accent);
      background: rgba(24, 194, 143, 0.12);
    }

    .notice.bad {
      border-left-color: var(--danger);
      background: rgba(255, 107, 122, 0.12);
    }

    .toc {
      margin: 0;
      padding-left: 18px;
    }

    .toc li { margin: 7px 0; }

    .grid-two {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 12px;
    }

    .mini {
      background: var(--panel-soft);
      border: 1px solid var(--border);
      border-radius: 8px;
      padding: 14px;
    }

    .mini-title {
      font-weight: 800;
      margin-bottom: 6px;
    }

    .path {
      background: var(--code);
      border: 1px solid var(--border);
      border-radius: 8px;
      padding: 10px 12px;
      margin: 8px 0 16px;
      color: #d9fbe8;
      font-family: Consolas, Monaco, monospace;
      overflow-wrap: anywhere;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin: 14px 0;
      font-size: 0.95rem;
    }

    th,
    td {
      border: 1px solid var(--border);
      padding: 10px;
      text-align: left;
      vertical-align: top;
    }

    th { background: var(--panel-soft); }
    ul, ol { padding-left: 24px; }
    li { margin: 7px 0; }

    .chip {
      display: inline-flex;
      align-items: center;
      border: 1px solid rgba(24, 194, 143, 0.45);
      color: #b9ffe8;
      background: rgba(24, 194, 143, 0.12);
      border-radius: 999px;
      padding: 5px 9px;
      margin: 4px 3px;
      font-size: 0.82rem;
    }

    input {
      width: 100%;
      background: #0d1320;
      color: var(--text);
      border: 1px solid var(--border);
      border-radius: 8px;
      padding: 10px;
      font: inherit;
    }

    details {
      border: 1px solid var(--border);
      background: var(--panel-soft);
      border-radius: 8px;
      padding: 9px 11px;
      margin: 9px 0;
    }

    summary {
      cursor: pointer;
      font-weight: 700;
    }

    @media (max-width: 900px) {
      .header-inner { align-items: flex-start; flex-direction: column; }
      .layout { grid-template-columns: 1fr; }
      .side { position: static; }
      .grid-two { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>
  <header>
    <div class="header-inner">
      <div class="brand">
        <div class="brand-mark">J</div>
        <div>
          <div class="brand-title">Jumpfall - Current Skin Guide</div>
          <div class="brand-subtitle">Current flow: Skin Tool -> JVSK Publisher -> Jumpfall</div>
        </div>
      </div>
      <div class="header-actions">
        <div class="version-pill">Current .jvsk format</div>
        <a class="language-link" href="../es/" hreflang="es" lang="es">ES</a>
      </div>
    </div>
  </header>

  <main>
    <div class="layout">
      <section>
        <div class="card" id="intro">
          <h1>Create Jumpfall skins without breaking the current format</h1>
          <p>
            This guide replaces the old manual ZIP workflow. The recommended flow now uses three parts:
            the skin tool, the JVSK packager and the game.
          </p>

          <div class="notice ok">
            <strong>Correct summary:</strong>
            create and test the skin in <code>jumpfall_skin_tools</code>, package the folder with
            <code>jumpfall-skin-jvsk</code>, and copy the final <code>.jvsk</code> to
            <code>Documents/jumpfall/skin/local</code>.
          </div>

          <div class="notice bad">
            <strong>Important:</strong>
            inside the <code>.jvsk</code>, <code>skin.json</code> must be at the archive root.
            It must not be inside an extra folder such as <code>mySkin/skin.json</code>.
          </div>
        </div>

        <div class="card" id="index">
          <h2>Quick index</h2>
          <ul class="toc">
            <li><a href="#flow">1. Current workflow</a></li>
            <li><a href="#paths">2. Important paths</a></li>
            <li><a href="#structure">3. Skin structure</a></li>
            <li><a href="#animations">4. Supported animations</a></li>
            <li><a href="#json">5. Current skin.json template</a></li>
            <li><a href="#meta">6. meta.json for publisher and Workshop</a></li>
            <li><a href="#jvsk">7. Create the .jvsk correctly</a></li>
            <li><a href="#test">8. Test the skin in Jumpfall</a></li>
            <li><a href="#issues">9. Common issues</a></li>
          </ul>
        </div>

        <div class="card" id="flow">
          <h2>1. Current workflow</h2>
          <div class="grid-two">
            <div class="mini">
              <div class="mini-title">1. Create and preview</div>
              <p class="muted">
                Use <code>jumpfall_skin_tools</code>. This tool is for live-previewing the skin while you edit the PNG files and JSON.
              </p>
            </div>
            <div class="mini">
              <div class="mini-title">2. Package</div>
              <p class="muted">
                Use <code>jumpfall-skin-jvsk</code>. This app converts the skin folder into a valid <code>.jvsk</code> file.
              </p>
            </div>
            <div class="mini">
              <div class="mini-title">3. Test locally</div>
              <p class="muted">
                Copy the <code>.jvsk</code> to <code>Documents/jumpfall/skin/local</code> and activate it from the in-game skin menu.
              </p>
            </div>
            <div class="mini">
              <div class="mini-title">4. Publish</div>
              <p class="muted">
                The same <code>.jvsk</code> can be uploaded to Steam Workshop with the publisher when the skin is ready.
              </p>
            </div>
          </div>
        </div>

        <div class="card" id="paths">
          <h2>2. Important paths</h2>
          <p>Folder where the skin tool reads and previews your work:</p>
          <div class="path">C:\Users\YOUR_USER\Documents\jumpfall_skin_manager\skin</div>

          <p>Folder where Jumpfall reads already packaged local skins:</p>
          <div class="path">C:\Users\YOUR_USER\Documents\jumpfall\skin\local</div>

          <p>Folder where Jumpfall temporarily extracts <code>.jvsk</code> files:</p>
          <div class="path">C:\Users\YOUR_USER\Documents\jumpfall\skin\temp_extract</div>

          <p>Folder used by skins downloaded from Workshop:</p>
          <div class="path">C:\Users\YOUR_USER\Documents\jumpfall\skin\workshop</div>

          <div class="notice">
            On Android/iOS, personal skins are disabled for now. Personal skins are currently intended for PC/Steam builds.
          </div>
        </div>

        <div class="card" id="structure">
          <h2>3. Recommended skin structure</h2>
          <p>
            The folder you package must have <code>skin.json</code> at its root.
            You can name frame folders however you want, but clear <code>_frames</code> names are recommended.
          </p>

<pre><code>skin/
  skin.json
  meta.json              optional, recommended for Workshop
  preview.png            optional, recommended for Workshop

  idle_frames/
    0.png
    1.png

  walk_frames/
    0.png
    1.png

  run_frames/
    0.png
    1.png

  jump_frames/
    0.png

  fly_frames/
    0.png
    1.png

  punch_frames/
    0.png

  landing_frames/
    0.png

  death_frames/
    0.png

  dash_ground_frames/
    0.png
    1.png

  dash_air_frames/
    0.png
    1.png

  climbing_wall_frames/
    0.png
    1.png

  climbing_wall_jump_frames/
    0.png</code></pre>

          <div class="notice">
            PNG files should be numbered in order: <code>0.png</code>, <code>1.png</code>, <code>2.png</code>.
            Avoid mixed names such as <code>idle_final.png</code> inside animation frame folders.
          </div>
        </div>

        <div class="card" id="animations">
          <h2>4. Currently supported animations</h2>
          <p>These are the keys that go inside <code>files</code> in <code>skin.json</code>:</p>

          <table>
            <thead>
              <tr>
                <th>JSON key</th>
                <th>Game use</th>
                <th>Recommended loop</th>
              </tr>
            </thead>
            <tbody>
              <tr><td><code>idle</code></td><td>Standing still</td><td><code>true</code></td></tr>
              <tr><td><code>walk</code></td><td>Walking</td><td><code>true</code></td></tr>
              <tr><td><code>run</code></td><td>Running</td><td><code>true</code></td></tr>
              <tr><td><code>jump</code></td><td>Jumping</td><td><code>false</code></td></tr>
              <tr><td><code>fly</code></td><td>Falling or long air time</td><td><code>true</code></td></tr>
              <tr><td><code>punch</code></td><td>Attack/punch</td><td><code>false</code></td></tr>
              <tr><td><code>landing</code></td><td>Landing</td><td><code>false</code></td></tr>
              <tr><td><code>death</code></td><td>Death</td><td><code>false</code></td></tr>
              <tr><td><code>dashground</code></td><td>Ground dash</td><td><code>true</code></td></tr>
              <tr><td><code>dashair</code></td><td>Air dash</td><td><code>true</code></td></tr>
              <tr><td><code>climbing_wall</code></td><td>Holding/sliding on a wall</td><td><code>true</code></td></tr>
              <tr><td><code>climbing_wall_jump</code></td><td>Wall jump</td><td><code>false</code></td></tr>
            </tbody>
          </table>

          <p class="muted">
            The game also accepts <code>climbingwall</code> and <code>climbingwalljump</code> as compatibility aliases,
            but new skins should use <code>climbing_wall</code> and <code>climbing_wall_jump</code>.
          </p>
        </div>

        <div class="card" id="json">
          <h2>5. Current skin.json template</h2>
          <p>
            This template uses the format understood by Jumpfall and <code>jumpfall_skin_tools</code>.
            You can remove animations you do not have yet, but keep at least <code>idle</code>.
          </p>

<pre><code>{
  "active": true,
  "fps": 12,
  "visual": {
    "scale": 1,
    "widthScale": 1,
    "heightScale": 1,
    "mirror": true,
    "colorOverlay": [255, 255, 255, 255]
  },
  "files": {
    "idle": {
      "path": "idle_frames",
      "fps": 12,
      "pivotX": 0.5,
      "pivotY": 0,
      "xOffset": 0,
      "yOffset": 0,
      "loop": true
    },
    "walk": {
      "path": "walk_frames",
      "fps": 12,
      "pivotX": 0.5,
      "pivotY": 0,
      "xOffset": 0,
      "yOffset": 0,
      "loop": true
    },
    "run": {
      "path": "run_frames",
      "fps": 12,
      "pivotX": 0.5,
      "pivotY": 0,
      "xOffset": 0,
      "yOffset": 0,
      "loop": true
    },
    "jump": {
      "path": "jump_frames",
      "fps": 12,
      "pivotX": 0.5,
      "pivotY": 0,
      "xOffset": 0,
      "yOffset": 0,
      "loop": false
    },
    "fly": {
      "path": "fly_frames",
      "fps": 12,
      "pivotX": 0.5,
      "pivotY": 0,
      "xOffset": 0,
      "yOffset": 0,
      "loop": true
    },
    "punch": {
      "path": "punch_frames",
      "fps": 12,
      "pivotX": 0.5,
      "pivotY": 0,
      "xOffset": 0,
      "yOffset": 0,
      "loop": false
    },
    "landing": {
      "path": "landing_frames",
      "fps": 12,
      "pivotX": 0.5,
      "pivotY": 0,
      "xOffset": 0,
      "yOffset": 0,
      "loop": false
    },
    "death": {
      "path": "death_frames",
      "fps": 12,
      "pivotX": 0.5,
      "pivotY": 0,
      "xOffset": 0,
      "yOffset": 0,
      "loop": false
    },
    "dashground": {
      "path": "dash_ground_frames",
      "fps": 12,
      "pivotX": 0.5,
      "pivotY": 0,
      "xOffset": 0,
      "yOffset": 0,
      "loop": true
    },
    "dashair": {
      "path": "dash_air_frames",
      "fps": 12,
      "pivotX": 0.5,
      "pivotY": 0,
      "xOffset": 0,
      "yOffset": 0,
      "loop": true
    },
    "climbing_wall": {
      "path": "climbing_wall_frames",
      "fps": 12,
      "pivotX": 0.5,
      "pivotY": 0,
      "xOffset": 0,
      "yOffset": 0,
      "loop": true
    },
    "climbing_wall_jump": {
      "path": "climbing_wall_jump_frames",
      "fps": 12,
      "pivotX": 0.5,
      "pivotY": 0,
      "xOffset": 0,
      "yOffset": 0,
      "loop": false
    }
  }
}</code></pre>

          <details>
            <summary>What each parameter means</summary>
            <ul>
              <li><code>fps</code>: animation speed. If an animation does not define FPS, it uses the global FPS.</li>
              <li><code>scale</code>: general skin scale.</li>
              <li><code>widthScale</code> and <code>heightScale</code>: adjust width and height separately.</li>
              <li><code>mirror</code>: lets the skin face left/right with the player.</li>
              <li><code>colorOverlay</code>: RGBA color. Use <code>[255,255,255,255]</code> to avoid changing colors.</li>
              <li><code>path</code>: folder containing that animation PNG frames.</li>
              <li><code>pivotX</code> and <code>pivotY</code>: sprite anchor point from 0 to 1.</li>
              <li><code>xOffset</code> and <code>yOffset</code>: fine visual offset. The game divides these values by 100.</li>
              <li><code>loop</code>: whether the animation repeats or stays on the last frame.</li>
            </ul>
          </details>
        </div>

        <div class="card" id="meta">
          <h2>6. meta.json for publisher and Workshop</h2>
          <p>
            <code>meta.json</code> does not control animation. It is used by the packager and Workshop information.
          </p>

<pre><code>{
  "mod_name": "My Skin",
  "description": "Short skin description.",
  "author": "Your name",
  "version": "1.0.0",
  "preview": "preview.png"
}</code></pre>

          <p class="muted">
            When updating an already published skin, the publisher can add <code>workshop_id</code>
            automatically so it knows which item to update.
          </p>
        </div>

        <div class="card" id="jvsk">
          <h2>7. Create the .jvsk correctly</h2>

          <h3>Recommended method: jumpfall-skin-jvsk</h3>
          <ol>
            <li>Open <code>jumpfall-skin-jvsk</code>.</li>
            <li>In <strong>Folder or file (.jvsk)</strong>, select the folder that contains <code>skin.json</code>.</li>
            <li>Fill title, description, author, version and preview if needed.</li>
            <li>Choose where to save the final file, for example <code>my_skin.jvsk</code>.</li>
            <li>Press <strong>Package (.jvsk)</strong>.</li>
          </ol>

          <div class="notice ok">
            This method is correct because it packages the contents of the folder at the ZIP root.
            Jumpfall can find <code>skin.json</code> immediately after extracting.
          </div>

          <h3>Manual method, only if you know what you are doing</h3>
          <ol>
            <li>Open the skin folder.</li>
            <li>Select <code>skin.json</code>, <code>meta.json</code>, <code>preview.png</code> and the frame folders.</li>
            <li>Create a ZIP with those selected files.</li>
            <li>Rename the ZIP from <code>.zip</code> to <code>.jvsk</code>.</li>
          </ol>

          <div class="grid-two">
            <div class="mini">
              <div class="mini-title">Correct</div>
<pre><code>my_skin.jvsk
  skin.json
  meta.json
  preview.png
  idle_frames/
  walk_frames/</code></pre>
            </div>
            <div class="mini">
              <div class="mini-title">Incorrect</div>
<pre><code>my_skin.jvsk
  my_skin/
    skin.json
    idle_frames/
    walk_frames/</code></pre>
            </div>
          </div>
        </div>

        <div class="card" id="test">
          <h2>8. Test the skin in Jumpfall</h2>
          <ol>
            <li>Copy the final <code>.jvsk</code> file to:</li>
          </ol>
          <div class="path">C:\Users\YOUR_USER\Documents\jumpfall\skin\local</div>
          <ol start="2">
            <li>Open Jumpfall on PC.</li>
            <li>Open the local skins menu.</li>
            <li>Enable the skin.</li>
            <li>Enter a level and test idle, walk, jump, climbing wall and wall jump.</li>
          </ol>

          <div class="notice">
            If you are replacing an existing skin with the same name, close the game and delete the matching folder inside
            <code>Documents/jumpfall/skin/temp_extract</code>, then open the game again so it extracts the new version.
          </div>
        </div>

        <div class="card" id="issues">
          <h2>9. Common issues</h2>
          <details open>
            <summary>The skin does not appear in the menu</summary>
            <ul>
              <li>Confirm the file ends with <code>.jvsk</code>.</li>
              <li>Open the <code>.jvsk</code> as a ZIP and check that <code>skin.json</code> is at the root.</li>
              <li>Confirm the file is in <code>Documents/jumpfall/skin/local</code>.</li>
            </ul>
          </details>

          <details>
            <summary>The skin loads but stays on idle</summary>
            <ul>
              <li>Check the <code>files</code> keys in <code>skin.json</code>.</li>
              <li>Check that each <code>path</code> points to an existing folder.</li>
              <li>Check that frames are named <code>0.png</code>, <code>1.png</code>, <code>2.png</code>.</li>
            </ul>
          </details>

          <details>
            <summary>Climbing wall looks wrong</summary>
            <ul>
              <li>Add <code>climbing_wall</code> and <code>climbing_wall_jump</code> to <code>skin.json</code>.</li>
              <li>Use <code>loop: true</code> for <code>climbing_wall</code>.</li>
              <li>Use <code>loop: false</code> for <code>climbing_wall_jump</code>.</li>
              <li>Use the compatibility names only for older skins. New skins should use the underscore names.</li>
            </ul>
          </details>

          <details>
            <summary>The size is wrong in game</summary>
            <ul>
              <li>Use <code>scale</code>, <code>widthScale</code> and <code>heightScale</code> in <code>skin.json</code>.</li>
              <li>Use <code>xOffset</code> and <code>yOffset</code> for small visual corrections.</li>
              <li>Preview changes in <code>jumpfall_skin_tools</code> before packaging.</li>
            </ul>
          </details>
        </div>
      </section>

      <aside class="side">
        <div class="card">
          <h3>Name generator</h3>
          <p class="muted">Type a skin name to see the recommended file path.</p>
          <input id="skinNameInput" type="text" value="my_skin" aria-label="Skin name">
          <p class="muted">Output file:</p>
          <div id="filePreview" class="path">my_skin.jvsk</div>
          <p class="muted">Local install path:</p>
          <div id="localPreview" class="path">Documents/jumpfall/skin/local/my_skin.jvsk</div>
        </div>

        <div class="card">
          <h3>Packaging checklist</h3>
          <span class="chip">skin.json at root</span>
          <span class="chip">Numbered PNG frames</span>
          <span class="chip">meta.json recommended</span>
          <span class="chip">preview.png recommended</span>
          <span class="chip">climbing_wall added</span>
          <span class="chip">climbing_wall_jump added</span>
          <span class="chip">Package as .jvsk</span>
        </div>

        <div class="card">
          <h3>Useful tools</h3>
          <ul>
            <li><code>jumpfall_skin_tools</code> for previewing and editing.</li>
            <li><code>jumpfall-skin-jvsk</code> for packaging and publishing.</li>
            <li>Jumpfall local skin menu for testing.</li>
          </ul>
        </div>

        <div class="card">
          <h3>Golden rule</h3>
          <p>
            A <code>.jvsk</code> is a ZIP. Jumpfall extracts it and expects to find
            <code>skin.json</code> directly inside the extracted folder.
          </p>
        </div>
      </aside>
    </div>
  </main>

  <script>
    const input = document.getElementById('skinNameInput');
    const filePreview = document.getElementById('filePreview');
    const localPreview = document.getElementById('localPreview');

    function cleanSkinName(value) {
      return (value || 'my_skin')
        .trim()
        .replace(/\s+/g, '_')
        .replace(/[^a-zA-Z0-9_-]/g, '')
        .replace(/^_+|_+$/g, '') || 'my_skin';
    }

    function updatePreview() {
      const name = cleanSkinName(input.value);
      filePreview.textContent = name + '.jvsk';
      localPreview.textContent = 'Documents/jumpfall/skin/local/' + name + '.jvsk';
    }

    input.addEventListener('input', updatePreview);
    updatePreview();
  </script>
</body>
</html>
