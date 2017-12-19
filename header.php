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
<a href="http://www.everett.wsu.edu/"><img id="wsu" alt="Washington State University" src="/wp-content/uploads/sites/161/2014/08/wsu.png" /></a>
<a href="https://ee.wwu.edu/about/locations/everett"><img id="wwu" alt="Western Washington University" src="/wp-content/uploads/sites/161/2014/08/wwu.png" /></a>
<a href="http://www.hiu.edu/washington/"><img id="hiu" alt="Hope International University" src="/wp-content/uploads/sites/161/2014/08/hiu.png" /></a>
<a href="http://www.uwb.edu/nhs/nhsdegrees/rnbprograms/rnbsn-everett"><img id="uw-bothell" alt="University of Washington Bothell" src="/wp-content/uploads/sites/161/2014/08/uw-bothell.png" /></a>
<a href="http://www.ewu.edu/csbssw/programs/social-work/off-campus-degrees/everett"><img id="ewu" alt="Eastern Washington University" src="/wp-content/uploads/sites/161/2014/08/ewu.png" /></a>
</div>

<?php } else {
    // This is for all other pages/posts

}
?>

<div class="border"></div>

			<?php ttfmake_maybe_show_site_region( 'header' ); ?>

