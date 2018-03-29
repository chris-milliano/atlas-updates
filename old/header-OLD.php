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
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="utf-8">
<link href="<?php echo $data['custom_favicon']; ?>" rel="icon" type="image/x-icon" />

<meta name="keywords" content="<?php echo $data['meta_keywords']; ?>" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />


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

</head>

 <?php
  if($data['maintenance_mode'] == 1) {

    if (current_user_can('administrator')){
    } else {
     include (TEMPLATEPATH . '/maintenance_page.php');
    die();
    }

  }
  ?>


<?php if( is_page_template( 'template-home.php' ) ) {
    	    $bodyid = 'id="home"';
    	} else { $bodyid = ''; }
?>
<body <?php echo $bodyid; ?> <?php body_class(); ?>>

<div id="page">


	<div id="nav_scroll" class="sticky-bar <?php if($data['header_stylesheet'] =='dark') { ?> dark <?php } ?>">
		<div class="header_top">

			<nav id="scroll">

				<?php if ($template == "template-home.php") {
							 get_template_part('includes/home-navigation'); }
						else {
							get_template_part('includes/navigation');
						}
				?>

			</nav>


		</div>
	</div>

<header id="header">

	<div class="header_inner <?php if($data['header_stylesheet'] =='dark') { ?> dark <?php } ?> clearfix">

        <div class="header_top">

			<div class="header_logo  left_float">
            <div id="logo" class=" left_float">
				<a class="logotype" href="<?php echo home_url(); ?>">
				<?php if(!empty($data['header_logo_image'])) { ?> <img src="<?php echo $data['header_logo_image'];?>" alt="<?php bloginfo('name'); ?>"> <?php }
				else { ?> <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Rhino | Wordpress Theme" />
				<?php } ?>
				</a>
            </div>
			</div>

<div class="new_btns red_head">

<ul>
<li><a href="https://atlaslabels.com/submit-your-artwork/">Upload Artwork</a></li>
<li><a href="https://atlaslabels.com/payment-portal/">Payment Portal</a></li>
<li><a href="https://boxshop.atlaslabels.com/">Online Catalog</a></li>
</ul>

</div>
			<div class="header_content right_float">


				<?php if ($template == "template-home.php") {
							 get_template_part('includes/home-navigation'); }
						else {
							get_template_part('includes/navigation');
						}
				?>


			</div>

			<div class="clearfix"></div>

		</div>


    </div>
</header>
