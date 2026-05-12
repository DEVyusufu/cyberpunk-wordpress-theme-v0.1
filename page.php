<?php
/**
 * The template for displaying all pages
 * Template: Default Page Template
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php
    // De WordPress Loop — zonder dit wordt er GEEN content getoond
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                </header>

                <div class="entry-content">
                    <?php
                    // Dit toont de volledige inhoud van de pagina
                    the_content();
                    ?>
                </div>
            </article>

            <?php
        endwhile;
    else :
        echo '<p>Geen inhoud gevonden.</p>';
    endif;
    ?>

</main>

<?php
get_footer();
