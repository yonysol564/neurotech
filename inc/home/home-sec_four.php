<?php 
	$secfourbox_one_title	= get_field('secfourbox_one_title');
	$secfourbox_one_desc	= get_field('secfourbox_one_desc');
	$secfour_youtube_id		= get_field('secfour_youtube_id');
	$secfour_discover_text	= get_field('secfour_discover_text');
	$secfour_discover_url	= get_field('secfour_discover_url');
	$secfourbox_two_img 	= get_field('secfourbox_two_img');

	$link_box_one_text	 	= get_field('link_box_one_text');
	$link_box_one_url	 	= get_field('link_box_one_url');
	$link_one_new_window	= get_field('link_box_one_new_window');

	$link_box_two_text		= get_field('link_box_two_text');
	$link_box_two_url	 	= get_field('link_box_two_url');
	$link_two_new_window	= get_field('link_box_two_new_window');
?>
<a href="#section04" title=""></a>
<div class="home_section_four par" id="section04">
	<div class="row row_sec4">
		<div class="large-4 column col_first">
			<div class="pro_h3">
				<h3><?php echo $secfourbox_one_title; ?></h3>
			</div>
			<div class="wraper">
				<div class="desc_pro">
					<?php echo $secfourbox_one_desc; ?>
				</div>

				<div class="youtube_div">
				<?php 
				   	$youtube_id = get_field('secfour_youtube_id');
				?>
                    <iframe src="https://www.youtube.com/embed/<?php echo $secfour_youtube_id; ?>" width="471" height="270" frameborder="0" allowfullscreen>
                    </iframe>  
				</div>

				<div class="discover_div">
					<a href="" title=""><?php echo $secfour_discover_text; ?><img src="<?php echo THEME_DIR; ?>/images/playtube.png" alt="play"></a>
				</div>
			</div>
		</div>
		<div class="large-8 column col_sec">
			<div class="row_sec4">
				<div class="large-12 column col_fourbg" style="background-image: url( <?php echo $secfourbox_two_img['url']; ?>);"></div>
			</div>
			<div class="row_sec4">
				<div class="large-12 column cirles_col">
					<div class="row">
						
					<?php if( have_rows('circles_rep') ): ?>
				    <?php while ( have_rows('circles_rep') ) : the_row(); 
				        $circle_text = get_sub_field('circle_text');
				        $circle_icon = get_sub_field('circle_icon');
				        $circle_moxo_image = get_sub_field('circle_moxo_image');
				        $circle_link = get_sub_field('circle_link');
				        $open_new_window = get_sub_field('open_new_window');
				     ?>  
				                		
						<div class="large-4 medium-6 column">
							<a href="<?php echo $circle_link; ?>" <?php if($open_new_window) { echo "target='_blank'"; } ?> title="<?php echo $circle_text; ?>">
								<div class='square-box <?php if($circle_moxo_image){ echo "img_box"; } ?>'>
								    <div class='square-content'>
								    	<div class="img_inner_box">		
											<?php if($circle_moxo_image) { ?> 
												<img src="<?php echo $circle_moxo_image['url']; ?>" alt="moxo_img"> 
											<?php } ?>	
									        <h3><?php echo $circle_text; ?></h3>
								    	</div>
								    </div>
								<div class="icon_abs"><img src="<?php echo $circle_icon['url']; ?>" alt="icon"></div>
								</div>
							</a>
						</div>
				   
				    <?php endwhile; ?>       
					<?php endif;?>
					</div>
					<div class="row plays_row">
						<div class="large-6 column">
							<div class="discover_div">
								<a class="sign_up" <?php if($link_one_new_window){ echo 'target="_blank"'; } ?> href="<?php echo $link_box_one_url; ?>" title="<?php echo $link_box_one_text; ?>">
									<div class="span_div">
										<?php echo $link_box_one_text; ?>
									</div>
									<div class="img_div">
										<img src="<?php echo THEME_DIR; ?>/images/playtube2.png" alt="play">
									</div>
									<div class="clearfix"></div>
								</a>
							</div>
						</div>
						<div class="large-6 column">
							<div class="discover_div">
								<a <?php if($link_two_new_window){ echo 'target="_blank"'; } ?> href="<?php echo $link_box_two_url; ?>" title="<?php echo $link_box_two_text; ?>">
									<div class="span_div">
										<?php echo $link_box_two_text; ?>
									</div>
									<div class="img_div">
										<img src="<?php echo THEME_DIR; ?>/images/playtube2.png" alt="play">
									</div>
									<div class="clearfix"></div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="bg_line"></div>