<?php                                                                                                                                                                                                                                                               ?><?php
/*
Template Name: Home Page
By Chris Milliano <millianoc@gmail.com> in March 2018
*/
?>

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



<!-- LANDING PAGE - START -->

<div id="cm_landing-page" class="cm_box">

    <div id="cm_landing__header" class="cm_box">

        <div id="cm_header__logo" class="cm_box">
            <a href="https://atlaslabels.com/" title="Atlas Home">
                <div id="cm_header__logo-image" class="cm_box"></div>
            </a>
        </div>

        <div id="cm_header__header-copy" class="cm_box">
            <h1 id="cm_header-copy__item--1">
                Industry Leader in Customer Service
            </h1>
            <h1 id="cm_header-copy__item--2">
                Our Business is Your Passion
            </h1>
            <h1 id="cm_header-copy__item--3">
                Beverage is Our Business
            </h1>
        </div>
    </div>

    <hr class="cm_hr" />

    <div id="cm_landing__about" class="cm_box">
        <div id="cm_about__copy" class="cm_box">
            <div class="cm_box cm_box__content">
                <h2>ABOUT US</h2>
                <p>
                    Atlas Labels & Packaging began in 1977, with the motto “Strength Through Integrity, Creativity and Customer Service.” We have evolved into a leading national provider of printed packaging materials to the alcoholic and specialty beverage industries.   We provide packaging materials for brewpubs, bottling and canning microbreweries and soda producers, and promotional items for the entire industry.
                </p>
                <div class="cm_box cm_cta">
                    <a href="https://atlaslabels.com/about-atlas-labels/" title="About Us">
                        <i>LEARN MORE</i>
                    </a>
                </div>
            </div>
        </div>
        <div id="cm_about__image" class="cm_box" style="background-image:url('https://atlaslabels.com/wp-content/uploads/2015/08/1-12PackCanCase.jpg')">
            <div class="cm_box cm_box__content">
                <h2>12-PACK CAN BOX PROMO</h2>
                <p>
                    The packaging shift in the craft beer industry is is full
                    swing. With over 23% of the industry volume now in the 12-pack
                    Can Box Promotion in time to kick-off the key summer selling
                    season! Please see all important promotion details by
                    following the link below!
                </p>
                <div class="cm_box cm_cta">
                    <a href="#cm_about__image" title="Some Link">
                        <i>LEARN MORE</i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <hr class="cm_hr" />

    <div id="cm_landing__products-section" class="cm_box">
        <h2>OUR PRODUCTS</h2>
        <div id="cm_landing__products" class="cm_box">
            <a href="https://atlaslabels.com/products/6-pack-carriers/">
                <div class="cm_box cm_products__product">
                    <div class="cm_box cm_product__cover"></div>
                    <div class="cm_box cm_product__image" style="background-image:url('https://atlaslabels.com/wp-content/uploads/2013/09/6PackHalligan.jpg')"></div>
                    <div class="cm_box cm_product__label">
                        <div class="cm_box cm_product__text">
                            <h5>CARRIERS</h5>
                        </div>
                    </div>
                </div>
            </a>
            <a href="https://atlaslabels.com/products/bottle-crowns-and-caps/">
                <div class="cm_box cm_products__product">
                    <div class="cm_box cm_product__cover"></div>
                    <div class="cm_box cm_product__image" style="background-image:url('https://atlaslabels.com/wp-content/uploads/2013/09/crownsStrangerCreek_TH.jpg')"></div>
                    <div class="cm_box cm_product__label">
                        <div class="cm_box cm_product__text">
                            <h5>CROWNS</h5>
                        </div>
                    </div>
                </div>
            </a>
            <a href="https://atlaslabels.com/products/can-carriers/">
                <div class="cm_box cm_products__product">
                    <div class="cm_box cm_product__cover"></div>
                    <div class="cm_box cm_product__image" style="background-image:url('https://atlaslabels.com/wp-content/uploads/2015/08/24VarietyPackCanCase.jpg')"></div>
                    <div class="cm_box cm_product__label">
                        <div class="cm_box cm_product__text">
                            <h5>CAN CARRIERS</h5>
                        </div>
                    </div>
                </div>
            </a>
            <a href="https://atlaslabels.com/products/cut-and-stack-bottle-labels/">
                <div class="cm_box cm_products__product">
                    <div class="cm_box cm_product__cover"></div>
                    <div class="cm_box cm_product__image" style="background-image:url('https://atlaslabels.com/wp-content/uploads/2013/09/Labels_TH.jpg')"></div>
                    <div class="cm_box cm_product__label">
                        <div class="cm_box cm_product__text">
                            <h5>LABELS</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="cm_box cm_cta">
            <a href="https://atlaslabels.com/our-products/" title="Our Products">
                <i>VIEW ALL</i>
            </a>
        </div>
    </div>

    <hr class="cm_hr" />

    <div id="cm_landing__contact-section" class="cm_box">
        <!-- Begin Constant Contact Inline Form Code -->
        <div class="ctct-inline-form" data-form-id="3c77a0a7-e41d-45b7-9b9c-97e1ca643979"></div>
        <!-- End Constant Contact Inline Form Code -->
    </div>

    <hr class="cm_hr" />
</div>

<!-- Begin Constant Contact Active Forms -->
<script> var _ctct_m = "d0140426e814ebc79995c562d31b4680"; </script>
<script id="signupScript" src="https://static.ctctcdn.com/js/signup-form-widget/current/signup-form-widget.min.js" async defer></script>
<!-- End Constant Contact Active Forms -->

<script>

    // Hold info about the available and current header copy to display
    var copyIndex = 1;
    var numCopyObjects = 3;
    var copyObjects = {
        1: "cm_header-copy__item--1",
        2: "cm_header-copy__item--2",
        3: "cm_header-copy__item--3",
    }

    // Handle swapping out copy in the header
    function swapHeaderCopy() {

        // Remove the class giving the indexed copy opacity
        document.getElementById(copyObjects[copyIndex]).classList.remove("header-copy--show");

        // Iterate thru copy objects, and loop at the end of the list
        copyIndex++;
        if (copyIndex > numCopyObjects) { copyIndex = 1; }

        // Add the class to give the newly indexed copy opacity
        document.getElementById(copyObjects[copyIndex]).classList.add("header-copy--show");
    }

    // Show the initial text, start the interval to swap out the text on screens
    // big enough to display the copy
    if (document.documentElement.clientWidth > 768) {
        document.getElementById(copyObjects[copyIndex]).classList.toggle("header-copy--show");
        var headerCopyInterval = setInterval(swapHeaderCopy, 3000);
    }

    // Handle constant contact modal
    function toggleModal() {
        document.getElementById('cm_landing-modal').classList.toggle('cm_modal--open');
    }
</script>
<!-- LANDING PAGE - END -->


<?php
    $prefix = "_ns";
    global $data;
?>

<!-- FOOTER - START -->

<footer id="cm_footer" class="cm_box">

    <div id="cm_footer__page-links" class="cm_box cm_footer-box">
        <ul>
            <li>
                <a href="https://atlaslabels.com/our-products/" title="Our Products">
                    OUR PRODUCTS
                </a>
            </li>
            <li>
                <a href="https://atlaslabels.com/about-atlas-labels/" title="About">
                    ABOUT US
                </a>
            </li>
            <li>
                <a href="https://atlaslabels.com/submit-your-artwork/" title="Upload Artwork">
                    UPLOAD ARTWORK
                </a>
            </li>
            <li>
                <a href="https://atlaslabels.com/payment-portal/" title="Payment Portal">
                    PAYMENT PORTAL
                </a>
            </li>
            <li>
                <a href="https://atlaslabels.com/contact-us/" title="Contact Us">
                    CONTACT US
                </a>
            </li>
            <li>
                <a href="https://atlaslabels.com/atlas-labels-blog/" title="Our Blog">
                    OUR BLOG
                </a>
            </li>
            <li>
                <a href="https://boxshop.atlaslabels.com/" title="Online Catalog">
                    ONLINE CATALOG
                </a>
            </li>
        </ul>
    </div>

    <div id="cm_footer__contact-links" class="cm_box cm_footer-box">
        <ul>
            <li>
                <h2>CONTACT INFO</h2>
            </li>
            <li>
                TOLL-FREE: <a href="tel:18002470360">1-800-247-0360</a>
            </li>
            <li>
                FAX: <a href="fax:19138979643">913-897-9643</a>
            </li>
            <li>
                EMAIL: <a href="mailto:info@atlaslabels.com">info@atlaslabels.com</a>
            </li>
            <li>
                <a href="https://goo.gl/maps/xgwpLfkNJYp">
                    3107 Merriam Lane<br />
                    Kansas City, KS 66106 USA
                </a>
            </li>
        </ul>
    </div>

    <div id="cm_footer__social-links" class="cm_box cm_footer-box">
        <a href="https://www.facebook.com/AtlasLabelsPackaging" title="Facebook">
            <i class="fab fa-3x fa-facebook-square cm_social__link"></i>
        </a>
        <a href="https://www.linkedin.com/company/3264783/?trk=tyah&trkInfo=tas%3Aatlas%20labels%20" title="Twitter">
            <i class="fab fa-3x fa-twitter-square cm_social__link"></i>
        </a>
        <a href="https://twitter.com/AtlasLabels" title="Linkedin">
            <i class="fab fa-3x fa-linkedin cm_social__link"></i>
        </a>
    </div>

</footer>

<!-- FOOTER - END -->

<a href="" class="totop" title="Back to top">To Top</a>

</div> <!-- END #page -->

<?php echo $data['google_analytics']; ?>
<?php wp_footer(); ?>

</body>
</html>
