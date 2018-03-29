<?php

$prefix = "_ns";
global $data;

?>

<div id="footer_widget">
	<div class="footer_inner wrapper clearfix">
    	<div class="column one_fourth">
        	<?php dynamic_sidebar('Footer left'); ?>
        </div>

        <div class="column one_fourth">
            <?php dynamic_sidebar('Footer center one'); ?>
        </div>

		 <div class="column one_fourth">
            <?php dynamic_sidebar('Footer center two'); ?>
        </div>

        <div class="column one_fourth last">
        	<?php dynamic_sidebar('Footer right'); ?>
        </div>
	</div>  <!-- END .footer_inner -->
</div><!-- END #footer_widget -->

<footer id="footer">

	<div id="footer_bottom">
	<div class="wrapper clearfix">
		<div class="footer_bottom"><?php echo $data['footer_txt_content']; ?></div>
	</div> <!-- END .footer_inner -->
	</div> <!-- END #footer_bottom -->

</footer> <!-- END #footer -->

<a href="" class="totop" title="Back to top">ToTop</a>

</div> <!-- END #page -->


<?php echo $data['google_analytics']; ?>

<?php wp_footer(); ?>


</body>
</html>
