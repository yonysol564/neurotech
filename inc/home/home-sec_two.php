<?php 
	$sec_two_img 		= get_field('home_sectwo_img');
	$sectwo_title 		= get_field('home_sectwo_main_title');
	$image_box_1 		= get_field('image_box_1');
	$title_box_1   		= get_field('title_box_1');
	$content_box_1 		= get_field('content_box_1');
	$link_box_1 		= get_field('link_box_1');	
	$find_clinick     	= get_field('find_clinick');
	$find_clinic_link 	= get_field('find_clinic_link');
	$box_two_image    	= get_field('box_two_image');
	$box_two_title    	= get_field('box_two_title');
	$box_two_content  	= get_field('box_two_content');
	$box_two_link     	= get_field('box_two_link');
	$read_more = get_field('read_more','option');
?>
<a href="#section02" title=""></a>
<div class="home_section_two par" id="section02" style="background-image: url( <?php echo $sec_two_img['url']; ?> );">
	<div class="inner_div">

		<div class="top_div">
			<h3>
				<?php echo $sectwo_title; ?>
			</h3>
		</div>

		<div class="wrap_divs">
			<div class="mid_div" style="background-image: url( <?php echo $image_box_1['url']; ?>);">
				<div class="inner_mid">
					<h3>
						<?php echo $title_box_1; ?>
					</h3>
					<div class="con_div">
						<?php echo $content_box_1; ?>
					</div>
					<div class="read_more_div">
						<a href="<?php echo $link_box_1; ?>" title=""><?php echo $read_more; ?></a>
					</div>
				</div>
			</div>

			<div class="third_div">
				<a href="<?php echo $find_clinic_link; ?>" title="">
					<h3>
						<?php echo $find_clinick; ?>
					</h3>
				</a>
			</div>

			<div class="four_div" style="background-image: url( <?php echo $box_two_image['url']; ?>);">
				<div class="inner_mid">
					<h3>
						<?php echo $box_two_title; ?>
					</h3>
					<div class="con_div">
						<?php echo $box_two_content; ?>
					</div>
					<div class="read_more_div">
						<a href="<?php echo $box_two_link; ?>" title=""><?php echo $read_more; ?></a>
					</div>
				</div>
			</div>
		</div>


	</div>
</div>
<div class="bg_line"></div>