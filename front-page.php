<?php get_header(); ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CollectionPage",
  "name": "The Edge of Reality - Live War Intel & Truth Archive",
  "description": "Unfiltered intelligence on global conflicts and deep analysis of digital censorship in 2026.",
  "publisher": {
    "@type": "Organization",
    "name": "The Truth Node",
    "logo": {
      "@type": "ImageObject",
      "url": "URL_NAAR_JE_LOGO"
    }
  }
}
</script>
<style>
    :root { 
        --accent: #ff4444; 
        --bg: #050505; 
        --panel: #0a0a0c; 
        --text-dim: #666;
    }

    body { background-color: var(--bg); color: #fff; margin: 0; }

    /* MARQUEE */
    .top-marquee { 
        background: #000; 
        color: var(--accent); 
        font-family: 'JetBrains Mono', monospace; 
        font-size: 0.75rem; 
        padding: 10px 0; 
        overflow: hidden; 
        white-space: nowrap; 
        border-bottom: 1px solid var(--accent); 
        text-transform: uppercase;
        position: relative;
        z-index: 100;
    }
    .marquee-content { display: inline-block; animation: marquee-animation 60s linear infinite; }
    @keyframes marquee-animation { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
    .m-item { margin-right: 120px; display: inline-block; }
    .m-item b { color: #000; background: var(--accent); padding: 2px 6px; margin-right: 10px; border-radius: 2px; }

    /* HERO SECTION */
    .hero-section { padding: 80px 20px 20px; max-width: 1300px; margin: 0 auto; }
    .hero-label { display: flex; align-items: center; gap: 12px; font-family: 'JetBrains Mono'; font-size: 0.85rem; color: var(--text-dim); margin-bottom: 15px; }
    h1 { font-family: 'JetBrains Mono', monospace; font-size: clamp(3.5rem, 10vw, 6rem); line-height: 0.9; margin: 0 0 50px 0; font-weight: 800; letter-spacing: -2px; }

    /* DASHBOARD GRID */
    .dashboard-row { 
        display: grid; 
        grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); 
        gap: 30px; 
    }
    .dashboard-panel { 
        background: var(--panel); 
        border: 1px solid #1a1a1a; 
        padding: 30px; 
        font-family: 'JetBrains Mono', monospace; 
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    /* COUNTER & SCANNER */
    .meter-title { display: flex; justify-content: space-between; font-size: 0.75rem; color: var(--accent); opacity: 0.8; }
    .meter-value { font-size: 4.5rem; color: #fff; margin: 25px 0; font-weight: bold; letter-spacing: -2px; }
    .meter-subtitle { font-size: 0.8rem; color: #555; line-height: 1.6; border-top: 1px solid #1a1a1a; padding-top: 15px; }
    .node-title { color: var(--accent); font-size: 0.85rem; margin-bottom: 20px; display: block; }
    .status-screen { background: #000; height: 150px; overflow-y: auto; padding: 15px; font-size: 0.75rem; color: #00ff00; border: 1px solid #111; margin-bottom: 20px; }
    .scan-btn { width: 100%; background: transparent; border: 1px solid var(--accent); color: var(--accent); padding: 15px; cursor: pointer; font-family: 'JetBrains Mono'; font-weight: bold; transition: 0.3s ease; }
    .scan-btn:hover { background: var(--accent); color: #000; box-shadow: 0 0 20px rgba(255,68,68,0.2); }

    /* CATEGORY SECTIONS */
    .feed-section { max-width: 1300px; margin: 0 auto 60px; padding: 0 20px; }
    .section-title { font-family: 'JetBrains Mono'; border-left: 3px solid var(--accent); padding-left: 15px; margin-bottom: 30px; text-transform: uppercase; letter-spacing: 2px; }
    .posts-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(350px, 1fr)); gap: 30px; }
    
    .post-card { background: #0a0a0c; border: 1px solid #1a1a1a; transition: 0.3s ease; display: flex; flex-direction: column; }
    .post-card:hover { border-color: var(--accent); transform: translateY(-5px); box-shadow: 0 10px 30px rgba(255, 68, 68, 0.1); }
    .post-image-link { width: 100%; height: 200px; overflow: hidden; display: block; border-bottom: 1px solid #1a1a1a; position: relative; }
    .post-image-link img { width: 100%; height: 100%; object-fit: cover; filter: grayscale(100%) contrast(120%); transition: 0.5s ease; }
    .post-card:hover img { filter: grayscale(0%) contrast(100%); transform: scale(1.05); }
    .post-content { padding: 20px; }
    .post-meta { color: var(--accent); font-size: 0.7rem; font-family: 'JetBrains Mono'; margin-bottom: 10px; }
    .post-card h3 { margin: 0 0 10px 0; font-size: 1.25rem; }
    .post-card h3 a { color: #fff; text-decoration: none; }
    .post-excerpt { color: #777; font-size: 0.85rem; line-height: 1.5; }

    /* FLASHPOINT PANEL */
    .flashpoint-row { max-width: 1300px; margin: 40px auto; padding: 0 20px; display: grid; grid-template-columns: 2fr 1fr; gap: 20px; }
    .event-panel, .slogan-panel { background: #0a0a0c; border: 1px solid #1a1a1a; padding: 20px; font-family: 'JetBrains Mono', monospace; }
    .panel-header { color: #ff4444; font-size: 0.7rem; border-bottom: 1px solid #222; padding-bottom: 10px; margin-bottom: 15px; }
    .event-item { margin-bottom: 12px; padding-bottom: 12px; border-bottom: 1px solid #111; }
    .event-date { color: #444; font-size: 0.65rem; display: block; }
    .event-text { color: #bbb; font-size: 0.8rem; line-height: 1.4; }
</style>

<div class="top-marquee">
    <div class="marquee-content">
        <span class="m-item"><b>LIVE_DATA</b> Bot traffic: 57.4%</span>
        <span class="m-item"><b>ALERT</b> EU Digital ID mandate localized</span>
        <span class="m-item"><b>WARNING</b> 92% AI-Generated content detected</span>
        <span class="m-item"><b>NAKHCHIVAN</b> Drone strike confirmed</span>
        <span class="m-item"><b>NATO</b> Intercept activity over Hatay</span>
    </div>
</div>

<main class="hero-section">
    <div class="hero-label">
        <span style="width:10px; height:10px; background:var(--accent); border-radius:50%; display:inline-block; box-shadow: 0 0 10px var(--accent);"></span> 
        NODE_CONNECTED // EN_NL_TR_BROADCAST
    </div>
    <h1>The Edge <br>of Reality.</h1>

    <div class="dashboard-row">
        <div class="dashboard-panel">
            <div class="meter-title"><span>GLOBAL_MISINFO_ESTIMATE</span><span>SRC: ALPHA_V2</span></div>
            <div class="meter-value" id="est-meter">0</div>
            <div class="meter-subtitle">Deceptive data points circulating in the global digital stream since your connection established.</div>
        </div>
        <div class="dashboard-panel">
            <span class="node-title">[ NODE_STATUS_SCANNER ]</span>
            <div class="status-screen" id="node-screen">> SYSTEM READY. WAITING...</div>
            <button class="scan-btn" onclick="runNodeScan()" id="scan-btn">Initiate Integrity Scan</button>
        </div>
    </div>
</main>

<section class="feed-section">
    <h2 class="section-title">KINETIC_INTELLIGENCE // WORLD_WAR</h2>
    <div class="posts-grid">
        <?php 
        $ww_query = new WP_Query(array('category_name' => 'war', 'posts_per_page' => 3));
        if ( $ww_query->have_posts() ) : while ( $ww_query->have_posts() ) : $ww_query->the_post(); 
        ?>
            <article class="post-card">
                <a href="<?php the_permalink(); ?>" class="post-image-link">
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium_large'); } else { echo '<div class="post-image-placeholder">> NO_IMAGE_UPLINKED</div>'; } ?>
                </a>
                <div class="post-content">
                    <div class="post-meta"><?php echo get_the_date('Y.m.d'); ?> // WAR_SECTOR</div>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="post-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 18); ?></div>
                </div>
            </article>
        <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
</section>

<div class="flashpoint-row">
    <div class="event-panel">
        <div class="panel-header">[ RECENT_CRITICAL_EVENTS ]</div>
        <div class="event-item"><span class="event-date">MARCH 05, 2026 // NAKHCHIVAN</span><div class="event-text"><b>Drone Strike</b> on International Airport terminal confirmed.</div></div>
        <div class="event-item"><span class="event-date">MARCH 04, 2026 // HATAY</span><div class="event-text"><b>NATO Patriots</b> intercept ballistic trajectory near border.</div></div>
    </div>
    <div class="slogan-panel">
        <div class="panel-header">[ SYSTEM_SLOGANS ]</div>
        <div class="slogan-display"><div id="active-slogan">"COMFORT IS THE NEW CENSORSHIP"</div></div>
    </div>
</div>

<section class="feed-section">
    <h2 class="section-title">DEEP_ANALYSIS // THE_TRUTH_ARCHIVE</h2>
    <div class="posts-grid">
        <?php 
        $truth_query = new WP_Query(array('category_name' => 'truth', 'posts_per_page' => 3));
        if ( $truth_query->have_posts() ) : while ( $truth_query->have_posts() ) : $truth_query->the_post(); 
        ?>
            <article class="post-card">
                <a href="<?php the_permalink(); ?>" class="post-image-link">
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium_large'); } else { echo '<div class="post-image-placeholder">> NO_IMAGE_UPLINKED</div>'; } ?>
                </a>
                <div class="post-content">
                    <div class="post-meta"><?php echo get_the_date('Y.m.d'); ?> // TRUTH_NODE</div>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="post-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 18); ?></div>
                </div>
            </article>
        <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
</section>

<script>
    // Misinfo Counter
    let count = 0;
    function updateCounter() {
        count += Math.floor(Math.random() * 120) + 20;
        const el = document.getElementById('est-meter');
        if(el) el.innerText = count.toLocaleString();
        setTimeout(updateCounter, 1200);
    }

    // Node Scanner
    function runNodeScan() {
        const screen = document.getElementById('node-screen');
        const btn = document.getElementById('scan-btn');
        const logs = ["> UPLINK ESTABLISHED...", "> ANALYZING PACKET HEADERS...", "> [!] SYNTHETIC ECHO DETECTED", "> [OK] HUMAN_TRACE_VERIFIED", "> INTEGRITY: 96.4%", "> SCAN_COMPLETE."];
        btn.disabled = true; btn.innerText = "SCANNING..."; screen.innerHTML = "";
        let i = 0;
        const interval = setInterval(() => {
            if(i < logs.length) {
                const p = document.createElement('div'); p.innerText = logs[i];
                if(logs[i].includes('[!]')) p.style.color = "#ffcc00";
                screen.appendChild(p); screen.scrollTop = screen.scrollHeight; i++;
            } else { clearInterval(interval); btn.disabled = false; btn.innerText = "RUN NEW SCAN"; }
        }, 700);
    }

    // Slogan Rotator
    const slogans = ["\"COMFORT IS THE NEW CENSORSHIP\"", "\"YOUR OPINION HAS BEEN PRE-APPROVED\"", "\"THE STREAM IS NOT THE REALITY\"", "\"DATA IS BORN, TRUTH IS MADE\""];
    let sIdx = 0;
    function rotateSlogans() {
        const sEl = document.getElementById('active-slogan');
        if(sEl) {
            sEl.style.opacity = 0;
            setTimeout(() => { sIdx = (sIdx + 1) % slogans.length; sEl.innerText = slogans[sIdx]; sEl.style.opacity = 1; }, 500);
        }
    }
    setInterval(rotateSlogans, 5000);
    window.onload = updateCounter;
</script>

<?php get_footer(); ?>
