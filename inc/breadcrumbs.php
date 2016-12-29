<?php $breadcrumbs_custom = get_field('breadcrumbs_custom'); ?>
<div class="breadcrumbs_div">
	<div class="row">
		<div class="large-8 column">
			<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
				<?php if ($breadcrumbs_custom) {
					echo $breadcrumbs_custom;
				} else {
					if ( function_exists('yoast_breadcrumb') ) {
					     yoast_breadcrumb('<p id="breadcrumbs">','</p>');
					}
				} ?>
			</div>
		</div>
		
		<?php if( !is_page_template('tpl-videos.php') && !is_category() && !is_search() ) { ?>
			<div class="large-4 column">
				<div class="share_btns">
					<!-- Go to www.addthis.com/dashboard to customize your tools --> 
					<div class="addthis_inline_share_toolbox"></div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>