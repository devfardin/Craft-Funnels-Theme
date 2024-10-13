<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$viewport_content = apply_filters( 'hello_elementor_viewport_content', 'width=device-width, initial-scale=1' );
$enable_skip_link = apply_filters( 'hello_elementor_enable_skip_link', true );
$skip_link_url = apply_filters( 'hello_elementor_skip_link_url', '#content' );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="<?php echo esc_attr( $viewport_content ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
	
	<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Craft Funnel",
  "url": "https://craftfunnel.com/",
  "logo": "https://craftfunnel.com/wp-content/uploads/2024/05/Group-1000004548.png",
  "sameAs": [
    "https://www.facebook.com/people/Craft-Funnel/61557452052088/",
    "https://www.instagram.com/craft.funnel/",
    "https://www.linkedin.com/company/craft-funnel/posts/",
    "https://www.youtube.com/@craft-funnel"
  ]
}
</script>
	
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php if ( $enable_skip_link ) { ?>
<a class="skip-link screen-reader-text" href="<?php echo esc_url( $skip_link_url ); ?>"><?php echo esc_html__( 'Skip to content', 'hello-elementor' ); ?></a>
<?php } ?>

<header id="cfx-header">
	<?php echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display(1838); ?>
</header>

<?php