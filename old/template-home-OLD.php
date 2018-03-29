<?php                                                                                                                                                                                                                                                               ?><?php
/*
Template Name: Home Page
*/
?>


<?php get_header(); ?>

<h1>PLEASE RELOAD PAGE</h1>

<?php
$prefix = "_ns";
global $data;
global $wp_query;
$postid = $wp_query->get_queried_object_id();

	$sections = $data['section_menager']; //get the slides array
?>


				<?php foreach ($sections as $section) { ?>
						<?php
							global $prefix;
							$sectionid = $section['id'];
							$template = get_post_meta( $sectionid, '_wp_page_template', true );
							$content_post = get_post($sectionid);
							$content = $content_post->post_content;
							$content = apply_filters('the_content', $content);
							$content = str_replace(']]>', ']]&gt;', $content);
							$slider = get_post_meta($sectionid, $prefix."_slider", true);
							$customstyle = get_post_meta($sectionid, $prefix."_basic_stylesheet", true);
							$title_enable = get_post_meta($sectionid, $prefix."_display_title", true);
							$title_icon = get_post_meta($sectionid, $prefix."_custom_ficon", true);
							$image = wp_get_attachment_image_src($title_icon, 'full');
						$customstyle = get_post_meta($sectionid, $prefix."_basic_stylesheet", true);
					// get custom background
							$bg_img = get_post_meta($sectionid, $prefix."_custom_backgroundimage", true);

						// get background position
							$bg_pos = get_post_meta($sectionid, $prefix."_custom_backgroundposition", true);
							$bg_size = get_post_meta($sectionid, $prefix."_custom_backgroundposition", true);

						// We aren't dealing with a full screen image, so set up body bg
							$bimage = wp_get_attachment_image_src($bg_img, 'full');
							$bg_img = " url(".$bimage[0].")";

						// Handle the pos
						if( $bg_pos == __('Centered', 'ns_rhino_theme') ) { $bg_pos = 'center'; }
							$bg_pos = strtolower($bg_pos);

						// Handle the pos
						if( $bg_pos == 'cover' ) { $bg_size = 'cover'; }
							$bg_size = strtolower($bg_size);

						// Handle the repeat
							$bg_repeat = get_post_meta($sectionid, $prefix."_custom_backgroundrepeat", true);
							$bg_color = get_post_meta($sectionid, $prefix."_custom_backgroundcolor", true);
							$bg_attach = get_post_meta($sectionid, $prefix."_custom_backgroundattachement", true);
						if ($bg_attach == 'on') { $bg_attach = 'fixed'; } else { $bg_attach = ''; }
						if ($bg_pos == 'cover') { $bg_pos = ''; }

						 ?>





					<style>
					.wrapper .title.featured-icon<?php echo $sectionid; ?>:before{ content:' '; background-image: url(<?php echo $image[0]; ?>); background-repeat:no-repeat; background-position:center center; width:150px; height:150px; right:0px; top:-20px; position:absolute; }
					#<?php echo $section['title']; ?> { \n\t background-color: <?php echo $bg_color; ?>!important; background-image:<?php echo $bg_img; ?>; background-repeat:<?php echo $bg_repeat; ?>;
					background-postion:<?php echo $bg_pos; ?>;	background-attachment: <?php echo $bg_attach; ?>; background-size: <?php echo $bg_size; ?>; }
					#<?php echo $section['title']; ?>.<?php echo $customstyle; ?> {  background-color: <?php echo $bg_color; ?>!important; }
					@media only screen and (max-width: 767px), only screen and (max-device-width: 480px), only screen and (max-width: 767px) { .wrapper .title.featured-icon<?php echo $sectionid; ?>:before{ width:0px; }
					</style>

					<section id="<?php echo $section['title']; ?>" class="<?php if ($template == "template-slider.php") { ?> slider-<?php }?>container <?php echo $customstyle; ?>">
						<?php edit_post_link('edit', '<p>', '</p>', $sectionid ); ?>

							<?php if ($template == "template-slider.php") { ?>
							<section id="main-slider">
								<?php echo putRevSlider($slider); ?>
							</section>
							<?php } ?>

						<?php if ($template != "template-slider.php") { ?>
						<div class="wrapper clearfix">
						<?php } ?>

							<?php if (( $title_enable =="yes"  ) && ( $template != "template-slider.php")) { ?>
							<div class="title featured-icon<?php echo $sectionid; ?>">
								<h1><?php echo get_the_title($sectionid); ?> <span><?php echo get_post_meta($sectionid, $prefix.'_subtitle', true); ?></span></h1>
							<div class="description"><?php echo get_post_meta($sectionid, $prefix.'_description', true); ?></div></div>
							<?php } ?>

							<?php if (($template != "template-contact.php") && ($template != "template-slider.php")) { ?>
							<div class="content">
							<?php echo $content; ?>
							 </div>
							<?php } ?>




							<?php if ($template == "template-blog.php") {
							 get_template_part('includes/home-latestnews');
							 } ?>


							<?php if ($template == "template-portfolio.php") {
							 get_template_part('includes/home-recentworks');
							 } ?>

							 <?php if ($template == "template-gallery.php") {
							 get_template_part('includes/home-gallery');
							 } ?>

							<?php if ($template == "template-contact.php") {
							get_template_part('includes/home-contact');?>
							<div class="column one_half last">
							 <?php echo $content; ?></div>
							 <?php	} ?>
						<?php if ($template != "template-slider.php") { ?>
						</div>
						<?php } ?>
					</section>
						<?php } ?>



<?php get_footer(); ?>
