<?php
    /* Template Name: Moxo Child  */
    get_header();
    $articles = get_field('moxo_child_articles') ? get_field('moxo_child_articles'): '';  
    $moxo_child_title = get_field('moxo_child_title') ? get_field('moxo_child_title'): '';    
?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part('inc/page', 'banner'); ?>
    <?php get_template_part('inc/breadcrumbs'); ?>
    <section class="about_sec moxo_sec moxo_child_sec">
        <div class="inner_about inner_moxo">
            <?php if ($moxo_child_title) { ?>
                <div class="row">
                    <div class="large-12 column">
                        <div class="moxo_child_title">
                            <h2><?php echo $moxo_child_title; ?></h2>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <div class="row">
                <div class="large-9 column moxo_col_9">
                    <div class="about_con">
                        <?php the_content(); ?>
                    </div>

                    <?php if($articles):?>
                        <div class="moxo_articles">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 column">
                                        <div class="article_slider_head">
                                            <h4><?php echo get_field('more_about', 'option'); ?></h4>
                                        </div>
                                        <div class="wrap_articles">
                                            <?php foreach ($articles as $artilce) {
                                                $article_img = wp_get_attachment_url( get_post_thumbnail_id($artilce->ID) );
                                            ?>
                                                <div class="inner_article">
                                                    <a href="<?php echo get_permalink($artilce->ID); ?>" title="<?php echo get_the_title($artilce->ID); ?>">
                                                        <div class="article_slide" style="background-image: url( <?php echo $article_img; ?> );">
                                                            <div class="article_label">
                                                                <?php echo get_the_title($artilce->ID); ?>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="large-3 column">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; // End of the loop.?>
<?php
get_footer();
?>
