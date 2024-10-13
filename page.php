<?php
/**
 * Default page template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>
<div class="cf-body">
    <main id="content" <?php post_class( 'site-main' ); ?>>
        <?php the_content(); ?>
    </main>
</div>

<?php
get_footer();