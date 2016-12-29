<?php 
	$footer_copy = get_field('footer_copy', 'option');
	$footer_ce = get_field('footer_ce', 'option');
	$footer_bottom_text = get_field('footer_bottom_text', 'option');

	$footer_logo 		= get_field('footer_logo','option');

	$facebook_img 		= get_field('footer_facebook_image','option');
	$facebook_link 		= get_field('facebook_link','option');
	$youtube_img 		= get_field('footer_youtube_image','option');
	$youtube_link 		= get_field('youtube_link','option');
	$insta_img 			= get_field('footer_instagram_image','option');
	$insta_link 		= get_field('instagram_link','option');
	$linkdin_img 		= get_field('footer_linkdin_image','option');
	$linkdin_link 		= get_field('linkdin_link','option');
	$google_plus_image  = get_field('footer_google_plus_image','option');
	$google_plus_link 	= get_field('google_plus_link','option');
?>
<footer>
	<div class="footer_menu">
		<div class="row footer_row">
			<div class="large-12 column">
				<div class="row footer_row">
					<div class="large-2 medium-4 small-12 column menu_col">
			            <?php wp_nav_menu( array( 'theme_location' => 'footer_menu_one', 'menu_class' => 'footer_menu_one' ) ); ?>
					</div>
					<div class="large-2 medium-4 small-12 column menu_col">
			            <?php wp_nav_menu( array( 'theme_location' => 'footer_menu_tow', 'menu_class' => 'footer_menu_tow' ) ); ?>
					</div>
					<div class="large-2 medium-4 small-12 column menu_col">
			             <?php wp_nav_menu( array( 'theme_location' => 'footer_menu_three', 'menu_class' => 'footer_menu_three' ) ); ?>
					</div>
					<div class="large-2 medium-4 small-12 column menu_col">
			             <?php wp_nav_menu( array( 'theme_location' => 'footer_menu_four', 'menu_class' => 'footer_menu_four' ) ); ?>
					</div>
					<div class="large-2 medium-4 small-12 column menu_col">
			            <?php wp_nav_menu( array( 'theme_location' => 'footer_menu_five', 'menu_class' => 'footer_menu_five' ) ); ?>
					</div>
					<div class="large-2 column">
						
						<div class="footer_logo">
							<a href="<?php echo home_url(); ?>" title="home">
								<img src="<?php echo $footer_logo['url']; ?>" alt="logo">
							</a>
						</div>
						<div class="socials_footer">
							<?php if ($facebook_img) { ?>
								<a href="<?php echo $facebook_link; ?>" title="facebook" target="_blank">
									<img src="<?php echo $facebook_img['url']; ?>" alt="facebook">
								</a>
							<?php } ?>
							<?php if ($linkdin_img) { ?>
								<a href="<?php echo $linkdin_link; ?>" title="Linkdin" target="_blank">
									<img src="<?php echo $linkdin_img['url']; ?>" alt="facebook">
								</a>
							<?php } ?>
							<?php if ($google_plus_image) { ?>
								<a href="<?php echo $google_plus_link; ?>" title="googleplus" target="_blank">
									<img src="<?php echo $google_plus_image['url']; ?>" alt="googleplus">
								</a>
							<?php } ?>
							<?php if ($youtube_img) { ?>
								<a href="<?php echo $youtube_link; ?>" title="youtube" target="_blank">
									<img src="<?php echo $youtube_img['url']; ?>" alt="youtube">
								</a>	
							<?php } ?>
							<?php if ($insta_img) { ?>
								<a href="<?php echo $insta_link; ?>" title="instagram" target="_blank">
									<img src="<?php echo $insta_img['url']; ?>" alt="instagram">
								</a>	
							<?php } ?>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer_copy">
		<div class="row footer_row">
			<div class="large-12 column">
				<div class="row footer_row">
					<div class="large-4 column">
						<div class="copy">
							<p class="p_copy">&#9400;</p> <?php echo $footer_copy; ?>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="large-8 column">
						<div class="ce_div">
							<img src="<?php echo THEME_DIR; ?>/images/ce.png" alt="ce"> <span><?php echo $footer_ce; ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer_bottom">
		<div class="row footer_row">
			<div class="large-12 column">
				<?php echo $footer_bottom_text; ?>
			</div>
		</div>
	</div>
</footer>
	</div>
</div> <!-- end wrapper -->
<?php wp_footer(); ?>

<!-- Go to www.addthis.com/dashboard to customize your tools --> 
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-581596cf85ebe836"></script> 
</body>
</html>
