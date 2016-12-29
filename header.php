<?php
	$logo_img            = get_field('main_logo','option');
	$facebook_img 		= get_field('facebook_img','option');
	$facebook_link 		= get_field('facebook_link','option');
	$youtube_img 		= get_field('youtube_img','option');
	$youtube_link 		= get_field('youtube_link','option');
	$insta_img 			= get_field('insta_img','option');
	$insta_link 		= get_field('instagram_link','option');
	$linkdin_img 		= get_field('linkdin_img','option');
	$linkdin_link 		= get_field('linkdin_link','option');
	$google_plus_image  = get_field('google_plus_image','option');
	$google_plus_link 	= get_field('google_plus_link','option');
	$log_in			 	= get_field('log_in','option');
	$header_login_link	= get_field('header_login_link','option');
?>
<!doctype html>
<!--[if lt IE 10]><html lang="he" class="lt10"><![endif]-->
<!--[if gt IE 9]><!-->
<html <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta charset="utf-8" />
<meta name="google-site-verification" content="vmLkLfOZkrvfS7PaWDu47YnJ_4nI_utLgLidkFmOXcg" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
<title><?php echo the_title(); ?></title>
<!-- <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri();?>/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/favicons/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php echo get_template_directory_uri();?>/favicons/manifest.json">
<link rel="mask-icon" href="<?php echo get_template_directory_uri();?>/favicons/safari-pinned-tab.svg" color="#000000"> -->
<meta name="theme-color" content="#ffffff">
<!--[if lt IE 10]>
	<script type='text/javascript'>
		$(document).ready(function(){
			$.get('browsers.html' , function(data){
				$('body').html(data);
			});
		});
	</script>
<![endif]-->

<script>
<?php if( is_rtl() ): ?>
    global_rtl = true;
<?php else: ?>
    global_rtl = false;
<?php endif; ?>
</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php get_template_part("inc/skiplinks"); ?>

<div class="wrapper">
	<div class="abs_from">
		<a class="close_search" href="#" title="close search">
			<i class="fa fa-times" aria-hidden="true"></i>
		</a>
		<div class="header_form">
			<?php get_search_form();?>
		</div>
	</div>
	<header>
		<div class="mob_top_header">
			<div class="row">
				<div class="small-8 column">
			  		<a class="logo_img" href="<?php echo home_url(); ?>" title="<?php echo get_bloginfo($show = 'name'); ?>">
					   	<?php $logo = get_field('main_logo', 'option'); ?>
						<div>
							<img src="<?php echo $logo['url']; ?>" title="<?php echo get_bloginfo($show = 'name'); ?>" alt="<?php echo get_bloginfo('name'); ?>">
						</div>
					</a>
				</div>
				<div class="small-4 column">
					<div class="lang_wrap">
						<?php icl_post_languages(); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="top_header desk_top_header">
			<div class="row top_row">
				<div class="large-12 column">
					<div class="top-bar top_row">
						<div class="large-6 small-7 column socials_col">
							<div class="socials">
								<?php if($facebook_link):?>
									<a href="<?php echo $facebook_link; ?>" title="" target="_blank">
										<img src="<?php echo $facebook_img['url']; ?>" alt="facebook">
									</a>
								<?php endif;?>

								<?php if($linkdin_link):?>
									<a href="<?php echo $linkdin_link; ?>" title="" target="_blank">
										<img src="<?php echo $linkdin_img['url']; ?>" alt="facebook">
									</a>
								<?php endif;?>

								<?php if($google_plus_link):?>
									<a href="<?php echo $google_plus_link; ?>" title="" target="_blank">
										<img src="<?php echo $google_plus_image['url']; ?>" alt="waze">
									</a>
								<?php endif;?>

								<?php if($youtube_link):?>
									<a href="<?php echo $youtube_link; ?>" title="" target="_blank">
										<img src="<?php echo $youtube_img['url']; ?>" alt="youtube">
									</a>
								<?php endif;?>

								<?php if($insta_link):?>
									<a href="<?php echo $insta_link; ?>" title="" target="_blank">
										<img src="<?php echo $insta_img['url']; ?>" alt="instagram">
									</a>
								<?php endif;?>
							</div>
						</div>
						<div class="large-6 small-5 column">

							<div class="lang_wrap">
								<?php icl_post_languages(); ?>
							</div>
							<div class="wrap_login">
								<a class="various" data-fancybox-type="iframe" href="http://app.moxo-adhdtest.com/users/login">
									<img src="<?php echo THEME_DIR; ?>/images/login_img.png" alt="login"><span><?php echo $log_in; ?></span>
								</a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<nav>
			<div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
			  <button class="menu-icon" type="button" data-toggle></button>
			  	<div class="wrap_search">
					<div class="inner_wrap">
						 <a class="toggle_search" href="#" title="">
			                <img src="<?php echo THEME_DIR; ?>/images/searchicon.png" alt="search">
			            </a>
					</div>
				</div>
			  <div class="title-bar-title"></div>
			</div>


			<div class="top-bar menu_div" id="example-menu">
		  		<div class="row">
		  			<div class="large-4 small-3 column logo_col">
						<div class="abs_logo">
					  		<a class="logo_img" href="<?php echo home_url(); ?>" title="<?php echo get_bloginfo($show = 'name'); ?>">
							   	<?php
							   		$logo = get_field('main_logo', 'option');
							   	?>
								<div>
									<img src="<?php echo $logo['url']; ?>" title="<?php echo get_bloginfo($show = 'name'); ?>" alt="<?php echo get_bloginfo('name'); ?>">
								</div>
							</a>
						</div>
					</div>
					<div class="large-7 small-8 column main_menu_col">
			    		<?php
				           	wp_nav_menu( array(
				                  'theme_location'    => 'top_menu',
				                  'menu_class'        => '',
				                  'container'         => '',
				                  'container_class'   => '',
				                  )
				            );
				        ?>
					</div>
					<div class="large-1 small-1 column search_col">
						<div class="wrap_search">
							<div class="inner_wrap">
								 <a class="toggle_search" href="#" title="">
					                <img src="<?php echo THEME_DIR; ?>/images/searchicon.png" alt="search">
					            </a>
							</div>
						</div>
					</div>
				 </div>
		  	</div>
		</nav>
		<?php if( ! is_page_template('tpl-home.php')) { ?>
			<div class="sub_menu_wraper">

			</div>
		<?php } ?>
	</header>
	<div class="inner_wrapper">
