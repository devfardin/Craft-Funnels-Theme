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
    <div id="content">
        <?php the_content(); ?>
    </div>
</div>

<?php
get_footer();