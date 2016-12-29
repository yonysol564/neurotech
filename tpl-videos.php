<?php
    /* Template Name: Videos  */
    get_header();
    //$contact_content_form = get_field('contact_content_form');
?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part('inc/page', 'banner'); ?>
    <?php get_template_part('inc/breadcrumbs'); ?>
    <section class="video_sec_top">
        <div class="inner_about">
            <div class="row">
                <div class="large-12 column">
                    <div class="about_con">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="videos_sec">
        <div class="row video_row">
            <?php if( have_rows('video_rep') ): $cnt = 0; $is_active = ''; ?>
                <?php while ( have_rows('video_rep') ) : the_row(); 
                    if($cnt == 0) { $is_active = 'is-active'; } else { $is_active = ''; }
                        $youtube_id = get_sub_field('youtube_id');
                        $youtube_title = get_sub_field('youtube_title');
                        $youtube_con = get_sub_field('youtube_con');   
                        if ($youtube_id){
                        $youtube_img = getYoutubeThumbUrl($youtube_id);
                    ?>  
                        <div class="large-6 medium-6 small-12 column video_col">
                            <iframe src="https://www.youtube.com/embed/<?php echo $youtube_id; ?>" width="471" height="270" frameborder="0" allowfullscreen>
                            </iframe>
                            <div class="wrape_video_title">             
                                <div class="videos_addthis">
                                    <div class="addthis_inline_share_toolbox"></div>
                                </div>   
                                <div class="title_inner_wrap">
                                    <h3>
                                        <?php echo $youtube_title; ?>
                                    </h3>
                                </div> 
                                <div class="clearfix"></div>
                            </div>
                            <div>
                                <?php echo $youtube_con; ?>
                            </div>
                        </div>
                <?php } $cnt++; endwhile; ?>       
            <?php endif;?>
        </div>
    </section>
<?php endwhile; // End of the loop.?>
<?php
get_footer();
?>
