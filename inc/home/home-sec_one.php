<?php  
$main_slider 	= get_field('section_one_slider');
$top_menu_rep	= get_field('top_menu_rep');

?>
<a href="#section01" title=""></a>
<div class="wrap_home_slider">
	<?php if($main_slider):?>
		<div class="home_top_slider par" id="section01">
			<?php foreach ($main_slider as $slider) {
				$article_img = wp_get_attachment_url( get_post_thumbnail_id($slider->ID) );
				$menu_rep 	= get_field('menu_rep', $slider->ID);
			?>
				<div class="inner_slider" style="background-image: url( <?php echo $article_img; ?>);">

				</div>
			<?php } ?>
		</div>
		
		<div class="top_menu_rep">
			<?php if ($top_menu_rep) { ?>
				<div class="row">
					<?php foreach ($top_menu_rep as $value) { ?>				
						<div class="large-2 medium-4 column end">  
							<ul>
								<?php foreach ($value['top_menu_links_rep'] as $link) { ?>
									<li><a href="<?php echo $link['top_rep_link_url']; ?>" title=""><?php echo $link['top_rep_link_title']; ?></a></li>
								<?php } ?>
							</ul>
						</div>
					<?php } ?>
				</div>
			<?php } ?>
		</div>


		<div class="slick_pause">
			<a href="#" title="pause">
				<img src="<?php echo THEME_DIR; ?>/images/pause.png" alt="pause">
			</a>
		</div>

		<div class="slick_play">
			<a href="#" title="play">
				<img src="<?php echo THEME_DIR; ?>/images/playicon.png" alt="play">
			</a>
		</div>

	<?php endif; ?>
</div>

<div class="vNav">
   <ul class="vNav">
   <?php $act = ''; ?>
	<?php for ($i=1; $i <=4 ; $i++) { 
		if($i == 1){ $act = 'active'; } else { $act = ''; }	
	?>
	    <li>
	        <a href="#section0<?php echo $i; ?>" class="<?php echo $act; ?>"></a>
	    </li>
	<?php } ?>
 </ul>
</div>
<div class="bg_line"></div>