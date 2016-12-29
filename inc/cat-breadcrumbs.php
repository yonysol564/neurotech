<?php global $breadcrumbs_custom;  ?>
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
	</div>
</div>