<?php
/* Template Name: Homepage */
	get_header();
?>

	<!--==============   S E C T I O N - 1   ==================-->

		<?php get_template_part('inc/home/home','sec_one'); ?>

	<!--==============   S E C T I O N - 2   ==================-->

		<?php get_template_part('inc/home/home','sec_two'); ?>

	<!--==============   S E C T I O N - 3   ==================-->

		<?php get_template_part('inc/home/home','sec_three'); ?>

	<!--==============   S E C T I O N - 4   ==================-->
		
		<?php get_template_part('inc/home/home','sec_four'); ?>

<?php
get_footer();
?>
