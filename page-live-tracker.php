<?php
/* Template Name: Live Tracker */
get_header(); ?>

<style>
/* Live Indicator - Nu feller rood voor Oorlogsstatus */
.live-status-bar {
    background: rgba(255, 0, 0, 0.2);
    border-bottom: 2px solid #ff4444;
    padding: 10px 40px;
    display: flex;
    align-items: center;
    gap: 15px;
    font-family: 'JetBrains Mono', monospace;
    font-size: 0.75rem;
    color: #ff4444;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.blink {
    width: 10px;
    height: 10px;
    background: #ff4444;
    border-radius: 50%;
    animation: blinker 1s linear infinite;
    box-shadow: 0 0 10px #ff4444;
}

@keyframes blinker { 50% { opacity: 0; } }

/* Layout Grid */
.live-container {
    display: grid;
    grid-template-columns: 1fr 350px;
    max-width: 1400px;
    margin: 0 auto;
    min-height: 100vh;
}

/* Timeline/Feed */
.live-feed {
    padding: 60px 40px;
    border-right: 1px solid #1a1a1a;
}

.feed-header h1 {
    font-size: 2.8rem;
    margin: 0 0 10px 0;
    color: #fff;
    text-transform: uppercase;
    font-family: 'JetBrains Mono';
}

.feed-header p {
    color: #ff4444;
    font-family: 'JetBrains Mono';
    font-size: 0.9rem;
    margin-bottom: 50px;
}

.timeline {
    position: relative;
    padding-left: 30px;
    border-left: 1px solid #1a1a1a;
}

.event-node {
    position: relative;
    margin-bottom: 60px;
}

.event-node::before {
    content: '';
    position: absolute;
    left: -35px;
    top: 5px;
    width: 11px;
    height: 11px;
    background: #ff4444;
    border-radius: 50%;
    box-shadow: 0 0 15px #ff4444;
}

.event-time {
    font-family: 'JetBrains Mono', monospace;
    font-size: 0.8rem;
    color: #ff4444;
    margin-bottom: 10px;
}

.event-content {
    background: #0a0a0c;
    padding: 25px;
    border: 1px solid #1a1a1a;
    border-left: 4px solid #ff4444;
}

.event-content h3 {
    margin: 0 0 10px 0;
    color: #fff;
    font-size: 1.4rem;
}

/* Sidebar Stats */
.live-sidebar {
    padding: 60px 40px;
    background: rgba(10, 10, 12, 0.5);
}

.stat-card {
    margin-bottom: 30px;
    padding: 20px;
    border: 1px solid #1a1a1a;
    background: #050505;
}

.stat-label {
    font-family: 'JetBrains Mono', monospace;
    font-size: 0.7rem;
    color: #555;
    text-transform: uppercase;
    margin-bottom: 10px;
}

.stat-value {
    font-size: 1.4rem;
    color: #fff;
    font-weight: 600;
    font-family: 'JetBrains Mono';
}

.threat-critical { color: #ff0000; text-shadow: 0 0 10px rgba(255,0,0,0.5); }

@media (max-width: 1000px) {
    .live-container { grid-template-columns: 1fr; }
    .live-sidebar { border-top: 1px solid #1a1a1a; }
}

.radar-ping {
    width: 10px; height: 10px; background: #ff4444; border-radius: 50%;
    position: relative; top: 30%; left: 65%;
    animation: pulse-map 2s infinite;
}
@keyframes pulse-map {
    0% { transform: scale(1); opacity: 1; }
    100% { transform: scale(8); opacity: 0; }
}
</style>

<div class="live-status-bar">
    <div class="blink"></div>
    WAR_PROTOCOL: ACTIVE
</div>

<div class="live-container">
    <main class="live-feed">
        <header class="feed-header">
            <h1>Operation <span style="color:#ff4444;">Epic Fury</span></h1>
            <p>> Monitoring Kinetic & Cyber Engagement in Persian Gulf Sector</p>
        </header>

        <div class="timeline">
            <?php
            $live_query = new WP_Query([
                'category_name' => 'cyber-war', 
                'posts_per_page' => 15
            ]);

            if ( $live_query->have_posts() ) : 
                while ( $live_query->have_posts() ) : $live_query->the_post(); ?>
                    <div class="event-node">
                        <div class="event-time">
                            [ <?php the_time('H:i'); ?> UTC ] — MAR_05_2026
                        </div>
                        <div class="event-content">
                            <h3><?php the_title(); ?></h3>
                            <div style="color: #ccc; line-height: 1.6;">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); 
            else : ?>
                <div class="event-node">
                    <div class="event-time">[ 00:00 UTC ]</div>
                    <div class="event-content">
                        <h3>Waiting for Decryption...</h3>
                        <p>No active intel packets found in the 'cyber-war' category.</p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </main>

    <aside class="live-sidebar">
        <div class="stat-card">
            <div class="stat-label">Operation Status</div>
            <div class="stat-value threat-critical">PHASE_3: SIEGE</div>
        </div>

        <div class="stat-card">
            <div class="stat-label">Tehran Connectivity</div>
            <div class="stat-value" style="color: #ff4444;">0.4% (BLACKOUT)</div>
        </div>

        <div class="stat-card">
            <div class="stat-label">Active Combatants</div>
            <div class="stat-value" style="font-size: 0.9rem;">US_CENTCOM / IDF / IRGC_NODES</div>
        </div>

        <div class="stat-card">
            <div class="stat-label">Target Area: Central Tehran</div>
            <div class="map-placeholder" style="height:150px; background: url('https://cybermap.kaspersky.com/assets/images/share.png') center/cover; opacity: 0.3; filter: grayscale(1) invert(1) hue-rotate(320deg);">
                <div class="radar-ping"></div>
            </div>
            <div class="stat-value" style="font-size: 0.7rem; margin-top: 10px; color: #ff4444;">
                COORD: 35.6892° N, 51.3890° E
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-label">Oil Market Volatility</div>
            <div class="stat-value" style="color: #ffff00;">+22.4% / BBL</div>
        </div>
    </aside>
</div>

<?php get_footer(); ?>
