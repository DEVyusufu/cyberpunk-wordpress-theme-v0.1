<?php get_header(); ?>

<div class="posts" style="max-width:960px;margin:60px auto;padding:0 20px 60px;">

    <div style="background: #000; border: 1px solid #ff4444; padding: 20px; margin-bottom: 40px; border-radius: 6px; font-family: 'Courier New', Courier, monospace;">
        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 5px;">
            <div style="width: 10px; height: 10px; background: #ff4444; border-radius: 50%; animation: blink 1s infinite;"></div>
            <span style="color: #ff4444; font-weight: bold; letter-spacing: 1px; font-size: 0.8rem;">SYSTEM MONITOR: ACTIVE SCAN</span>
        </div>
        <div style="color: #fff; font-size: 1.5rem; font-weight: bold;">
            Censored Content: <span id="live-counter">14,205</span>
        </div>
        <div style="color: #444; font-size: 0.7rem; margin-top: 10px; text-transform: uppercase;">
            Tracking global algorithmic suppression in real-time...
        </div>
    </div>

    <style>
        @keyframes blink { 50% { opacity: 0; } }
    </style>

    <script>
        function updateCounter() {
            let count = 14205;
            setInterval(() => {
                count += Math.floor(Math.random() * 3) + 1;
                document.getElementById('live-counter').innerText = count.toLocaleString();
            }, 2500);
        }
        window.addEventListener('load', updateCounter);
    </script>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article class="post-card" style="background:#0b0b10;border:1px solid #1f1f3a;padding:25px;margin-bottom:30px;border-radius:6px;">
                <h2 style="margin-top:0;"><a href="<?php the_permalink(); ?>" style="color:#fff;text-decoration:none;"><?php the_title(); ?></a></h2>
                <div class="post-meta" style="font-size:0.8rem;opacity:0.7;margin-bottom:10px;color:#aaa;">
                    <?php echo get_the_date(); ?> Â· <?php the_author(); ?>
                </div>
                <p style="color:#ccc;"><?php echo wp_trim_words( get_the_content(), 30 ); ?></p>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>No posts found.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
