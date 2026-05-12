<?php get_header(); ?>

<style>
.article-header {
    padding: 120px 20px 60px;
    text-align: center;
    max-width: 900px;
    margin: 0 auto;
}

.post-cat {
    font-family: 'JetBrains Mono', monospace;
    color: var(--accent);
    text-transform: uppercase;
    font-size: 0.8rem;
    letter-spacing: 2px;
    display: block;
    margin-bottom: 20px;
}

.article-header h1 {
    font-size: clamp(2rem, 5vw, 3.5rem);
    color: #fff;
    line-height: 1.2;
    margin: 0 0 20px 0;
}

.article-meta {
    font-family: 'JetBrains Mono', monospace;
    font-size: 0.8rem;
    color: var(--text-dim);
}

.article-content {
    max-width: 700px;
    margin: 0 auto 100px;
    padding: 0 20px;
    font-size: 1.15rem;
    line-height: 1.8;
    color: #ceced5;
}

.article-content p {
    margin-bottom: 30px;
}

.article-content h2, .article-content h3 {
    color: #fff;
    margin-top: 50px;
}

.article-content img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    border: 1px solid var(--border);
    margin: 40px 0;
}

/* Deelbare link of "Back" knop */
.article-footer {
    max-width: 700px;
    margin: 60px auto;
    padding-top: 40px;
    border-top: 1px solid var(--border);
    display: flex;
    justify-content: space-between;
}
</style>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="article-header">
            <span class="post-cat">System_Log // <?php the_category(', '); ?></span>
            <h1><?php the_title(); ?></h1>
            <div class="article-meta">
                Published on <?php echo get_the_date(); ?> — Written by <?php the_author(); ?>
            </div>
        </header>

        <div class="article-content">
            <?php the_content(); ?>
        </div>

        <footer class="article-footer">
            <a href="<?php echo home_url(); ?>" class="read-more">&#8592; Return to Terminal</a>
        </footer>
    </article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
