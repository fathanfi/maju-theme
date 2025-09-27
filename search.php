<?php
/**
 * The template for displaying search results pages
 *
 * @package Maju
 * @since 1.0.0
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header(); ?>

<main id="main" class="site-main" role="main">
    <header class="page-header">
        <h1 class="page-title">
            <?php
            printf(
                /* translators: %s: search query. */
                esc_html__( 'Search Results for: %s', 'maju' ),
                '<span>' . get_search_query() . '</span>'
            );
            ?>
        </h1>
    </header>

    <?php
    if ( have_posts() ) :
        ?>
        <div class="search-results">
            <?php
            while ( have_posts() ) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php
                        the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
                        
                        if ( 'post' === get_post_type() ) :
                            ?>
                            <div class="entry-meta">
                                <span class="posted-on">
                                    <time class="entry-date published" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
                                        <?php echo esc_html( get_the_date() ); ?>
                                    </time>
                                </span>
                            </div>
                            <?php
                        endif;
                        ?>
                    </header>

                    <div class="entry-summary">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
                <?php
            endwhile;
            ?>
        </div>

        <?php
        // Pagination
        the_posts_navigation( array(
            'prev_text' => esc_html__( 'Older posts', 'maju' ),
            'next_text' => esc_html__( 'Newer posts', 'maju' ),
        ) );
        ?>
        <?php
    else :
        ?>
        <section class="no-results not-found">
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e( 'Nothing found', 'maju' ); ?></h1>
            </header>
            <div class="page-content">
                <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'maju' ); ?></p>
                <?php get_search_form(); ?>
            </div>
        </section>
        <?php
    endif;
    ?>
</main>

<?php
get_sidebar();
get_footer();
