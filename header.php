<?php
/**
 * @package Make
 */
?><!DOCTYPE html>
<!--[if lte IE 9]><html class="no-js IE9 IE" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />

		<title><?php wp_title( '|', true, 'right' ); ?></title>

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="site-wrapper" class="site-wrapper">

<?php
if ( is_front_page() ) { ?>
<div id="logos">
<a href="http://www.wsu.edu/"><img id="wsu" src="/wp-content/uploads/sites/161/2014/08/wsu.png" /></a>
<a href="http://www.wwu.edu/"><img id="wwu" src="/wp-content/uploads/sites/161/2014/08/wwu.png" /></a>
<a href="http://www.hiu.edu/"><img id="hiu" src="/wp-content/uploads/sites/161/2014/08/hiu.png" /></a>
<a href="http://www.bothell.washington.edu/"><img id="uw-bothell" src="/wp-content/uploads/sites/161/2014/08/uw-bothell.png" /></a>
<a href="http://www.ewu.edu/"><img id="ewu" src="/wp-content/uploads/sites/161/2014/08/ewu.png" /></a>
<a href="http://www.evergreen.edu/"><img id="esc" src="/wp-content/uploads/sites/161/2014/08/esc.png" /></a>
<a href="http://www.cwu.edu/"><img id="cwu" src="/wp-content/uploads/sites/161/2014/08/cwu.png" /></a>
</div>

<?php } else {
    // This is for all other pages/posts

}
?>

<div class="border"></div>

			<?php ttfmake_maybe_show_site_region( 'header' ); ?>

