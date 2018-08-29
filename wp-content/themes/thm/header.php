<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package THM
 * @subpackage Tagalog HD Movies
 * @since THM
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="container">
			<div class="row flex">
				<div class="col-md-2">
					<img src="<?php echo site_url; ?>/images/logo.svg" class="img-responsive" />
				</div>
				<div class="col-md-7">
					1
				</div>
				<div class="col-md-3">
					<form class="form-inline my-2 my-lg-0">
				      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				    </form>
				</div>
			</div>
		</div>
	</header>