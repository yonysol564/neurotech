<?php 
	$box_one_title			= get_field('box_one_title');
	$box_one_image			= get_field('box_one_image');
	$box_one_content		= get_field('box_one_content');
	$box_one_link_text		= get_field('box_one_link_text');
	$box_one_link 			= get_field('box_one_link');
	
	$box_two_img 			= get_field('box_two_img');
	
	$box_three_title 		= get_field('box_three_title');
	$box_three_content 		= get_field('box_three_content');
	$box_three_youtube_id 	= get_field('box_three_youtube_id');
	
	$box_four_image 		= get_field('box_four_image');
	$box_four_title 		= get_field('box_four_title');
	$box_four_content 		= get_field('box_four_content');
	$box_four_link   		= get_field('box_four_link');
	
	$box_five_image  		= get_field('box_five_image');
	$box_five_title  		= get_field('box_five_title');
	$box_five_content  		= get_field('box_five_content');
	$box_five_link  		= get_field('box_five_link');
	$read_more = get_field('read_more','option');
?>
<a href="#section03" title=""></a>
<div class="home_section_three par" id="section03">
	<div class="row row_sec3">
		<div class="large-4 column col_first">
			<div class="inner_col">
				<div class="parents_h3">
					<h3><?php echo$box_one_title; ?></h3>
				</div>
				<div class="wraper">
					<div class="img_div">
						<img src="<?php echo $box_one_image['url']; ?>" alt="img">
					</div>
					<div class="con_div">
						<?php echo $box_one_content; ?>
						<a href="<?php echo $box_one_link; ?>" title=""><?php echo $box_one_link_text; ?></a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="large-8 column col_sec" style="background-image: url( <?php echo $box_two_img['url']; ?>);">
			<div class="inner_col">
				<img src="<?php echo THEME_DIR; ?>/images/people_img.png" alt="">
			</div>
		</div>
	</div>

	<div class="row row_sec3">
		<div class="large-4 column youtube_col">
			<div class="inner_div">
				<h3><?php echo $box_three_title; ?></h3>
				<div>
					<?php echo $box_three_content; ?>
				</div>
				<div class="youtube_div">
					<iframe src="https://www.youtube.com/embed/<?php echo $box_three_youtube_id; ?>" width="471" height="270" frameborder="0" allowfullscreen>
                    </iframe>  
				</div>
			</div>
		</div>
		<div class="large-4 column four_col" style="background-image: url( <?php echo $box_four_image['url']; ?>);">
			<div class="inner_div">
				<h3><?php echo $box_four_title; ?></h3>
				<div>
					<?php echo $box_four_content; ?>
				</div>
				<div class="readmore_div">
					<a href="<?php echo $box_four_link; ?>" title=""><?php echo $read_more; ?></a>
				</div>
			</div>
		</div>
		<div class="large-4 column five_col" style="background-image: url( <?php echo $box_five_image['url']; ?>);">
			<div class="inner_div">
				<h3><?php echo $box_five_title; ?></h3>
				<div>
					<?php echo $box_five_content; ?>
				</div>
				<div class="readmore_div">
					<a href="<?php echo $box_five_link; ?>" title=""><?php echo $read_more; ?></a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="bg_line"></div>