<?php
    get_header();
    $contact_form  = get_field('page_contactform');
?>
<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part('inc/page', 'banner'); ?>
    <?php get_template_part('inc/breadcrumbs'); ?>
    <section class="page_sec">
        <div class="inner_about">
            <div class="row">
                <div class="large-12 column">
                    <div class="about_con">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <?php if ($contact_form) { ?>
                <div class="row">
                    <div class="large-12 column">
                        <div class="wrap_form page_wrap_form">
                           <?php echo do_shortcode($contact_form); ?>
                         </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
<?php endwhile; // End of the loop.?>
<?php
get_footer();
?>





