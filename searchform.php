<?php
/**
 * Template for displaying search forms
 *
 * @package Maju
 * @since 1.0.0
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label for="search-field" class="sr-only">
        <span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'maju' ); ?></span>
    </label>
    <input type="search" id="search-field" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'maju' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    <button type="submit" class="search-submit" aria-label="<?php echo esc_attr_x( 'Search', 'submit button', 'maju' ); ?>">
        <span class="search-icon" aria-hidden="true">🔍</span>
        <span class="sr-only"><?php echo esc_html_x( 'Search', 'submit button', 'maju' ); ?></span>
    </button>
</form>
