<?php get_header(); ?>

	<section class="sec_404">
	 	<div class="row">
	        <div class="large-12 column">
                <div class="wrap_h1">
                    <h1 class="page-title"><?php _e( 'Page Not Found', 'neurotech' ); ?></h1>
                </div>
	        </div>
	    </div>   
	    <div class="row">
	        <div class="large-12 column">
				<div class="back_404">
					<a class="back_home" href="<?php echo home_url(); ?>"><?php _e( 'Back to Homepage', 'neurotech' ); ?></a>
				</div>
	        </div>
	    </div>    
	</section>

<?php get_footer(); ?>