<?php
	$prefix = "_ns";
	global $data;
	global $wp_query;
	$postid = $wp_query->get_queried_object_id();
	$template = get_post_meta( $postid, '_wp_page_template', true );

	// blogcolumn PLUGIN
	if (get_post_meta(get_the_ID(), $prefix.'_blogcolumn', true) !== "" && get_post_meta(get_the_ID(), $prefix.'_blogcolumn', true) !== "no") {
		$blogcolumn = get_permalink( get_post_meta(get_the_ID(), $prefix.'_blogcolumn', true) );
		header("Location:".$blogcolumn);
	}
?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html id="cm_html" class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="keywords" content="<?php echo $data['meta_keywords']; ?>" >

	<link href="<?php echo $data['custom_favicon']; ?>" rel="icon" type="image/x-icon" />

	<?php if( is_home() && !is_tax( 'portfolio' ) && !is_tax( 'gallery' ) ) { $blog = get_post(get_option('page_for_posts')); ?>
	<title><?php echo $blog->post_title; ?> | <?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
	<?php } else { ?>
	<title><?php the_title(); ?> | <?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
	<?php } ?>

	<?php echo get_template_part('includes/google-fonts'); ?>
	<link href='https://fonts.googleapis.com/css?family=Russo+One' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

	<?php get_social_metas(); ?>
	<?php wp_head(); ?>

	<style type="text/css"><?php echo $data['custom_css']; ?></style>
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>


<?php
	if($data['maintenance_mode'] == 1) {
		if (current_user_can('administrator')) {}
		else { include (TEMPLATEPATH . '/maintenance_page.php'); die(); }
	}
?>


<?php
	if( is_page_template('template-home.php') ) { $bodyid = 'id="home"'; }
	else { $bodyid = ''; }
?>


<body <?php echo $bodyid; ?> <?php body_class(); ?>>
	<!-- NAV - START -->

	<nav id="cm_nav" class="cm_box">
	    <div id="cm_nav__spacer" class="cm_box"></div>

	    <div id="cm_nav__logos" class="cm_box">
	        <a href="https://atlaslabels.com/" title="Home">
	            <div id="cm_nav__logo" class="cm_box"></div>
	        </a>
	        <div id="cm_nav__menu-button" class="cm_box" onclick="toggleMenu()">
	            <div id="cm_nav__menu-icon">
	                <div class="bar bar--1"></div>
	                <div class="bar bar--2"></div>
	                <div class="bar bar--3"></div>
	            </div>
	        </div>

	        <div id="cm_nav__desktop-options" class="cm_box">
	            <a href="https://atlaslabels.com/our-products/" title="Our Products" class="cm_box cm_desktop__option">
	                <div>OUR PRODUCTS</div>
	            </a>
	            <a href="https://atlaslabels.com/about-atlas-labels/" title="About" class="cm_box cm_desktop__option">
	                <div>ABOUT US</div>
	            </a>
	            <a href="https://atlaslabels.com/submit-your-artwork/" title="Upload Artwork" class="cm_box cm_desktop__option">
	                <div>UPLOAD ARTWORK</div>
	            </a>
	            <a href="https://atlaslabels.com/payment-portal/" title="Payment Portal" class="cm_box cm_desktop__option">
	                <div>PAYMENT PORTAL</div>
	            </a>
	            <a href="https://atlaslabels.com/contact-us/" title="Contact Us" class="cm_box cm_desktop__option">
	                <div>CONTACT US</div>
	            </a>
	        </div>
	    </div>

	    <div id="cm_nav__menu-options" class="cm_box">
	        <ul id="cm_nav__options" class="cm_box">
	            <a href="https://atlaslabels.com/our-products/" title="Our Products" class="cm_box cm_nav__option">
	                <li>OUR PRODUCTS</li>
	            </a>
	            <a href="https://atlaslabels.com/about-atlas-labels/" title="About" class="cm_box cm_nav__option">
	                <li>ABOUT US</li>
	            </a>
	            <a href="https://atlaslabels.com/submit-your-artwork/" title="Upload Artwork" class="cm_box cm_nav__option">
	                <li>UPLOAD ARTWORK</li>
	            </a>
	            <a href="https://atlaslabels.com/payment-portal/" title="Payment Portal" class="cm_box cm_nav__option">
	                <li>PAYMENT PORTAL</li>
	            </a>
	            <a href="https://atlaslabels.com/contact-us/" title="Contact Us" class="cm_box cm_nav__option">
	                <li>CONTACT US</li>
	            </a>
	            <a href="https://atlaslabels.com/atlas-labels-blog/" title="Our Blog" class="cm_box cm_nav__option">
	                <li>OUR BLOG</li>
	            </a>
	            <a href="https://boxshop.atlaslabels.com/" title="Online Catalog" class="cm_box cm_nav__option">
	                <li>ONLINE CATALOG</li>
	            </a>
	        </ul>
	    </div>

	</nav>

	<script>

	    // Handle all menu button click animations
	    function toggleMenu() {

	        // Update menu button
	        document.getElementById('cm_nav__menu-icon').classList.toggle("change");

	        // Update menu options
	        document.getElementById('cm_nav__options').classList.toggle("cm_nav__options--open");
	    }

	</script>

	<!-- NAV - END -->
