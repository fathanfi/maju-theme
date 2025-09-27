<?php
/**
 * The template for displaying all single posts
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
    <?php
    while ( have_posts() ) :
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php
                the_title( '<h1 class="entry-title">', '</h1>' );
                
                if ( 'post' === get_post_type() ) :
                    ?>
                    <div class="entry-meta">
                        <span class="posted-on">
                            <time class="entry-date published" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
                                <?php echo esc_html( get_the_date() ); ?>
                            </time>
                        </span>
                        <span class="byline">
                            <?php esc_html_e( 'by', 'maju' ); ?>
                            <span class="author vcard">
                                <a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
                                    <?php echo esc_html( get_the_author() ); ?>
                                </a>
                            </span>
                        </span>
                    </div>
                    <?php
                endif;
                ?>
            </header>

            <?php if ( has_post_thumbnail() ) : ?>
                <div class="entry-thumbnail">
                    <?php the_post_thumbnail( 'large' ); ?>
                </div>
            <?php endif; ?>

            <div class="entry-content">
                <?php
                the_content(
                    sprintf(
                        wp_kses(
                            /* translators: %s: Name of current post. Only visible to screen readers */
                            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'maju' ),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        wp_kses_post( get_the_title() )
                    )
                );

                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'maju' ),
                    'after'  => '</div>',
                ) );
                ?>
            </div>

            <footer class="entry-footer">
                <?php
                $categories_list = get_the_category_list( esc_html__( ', ', 'maju' ) );
                if ( $categories_list ) {
                    printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'maju' ) . '</span>', $categories_list );
                }

                $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'maju' ) );
                if ( $tags_list ) {
                    printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'maju' ) . '</span>', $tags_list );
                }
                ?>
            </footer>
        </article>

        <?php
        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
        ?>
        <?php
    endwhile;
    ?>
</main>

<?php
get_sidebar();
get_footer();
