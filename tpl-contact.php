<?php
    /* Template Name: Contact  */
    get_header();
    $contact_content_form = get_field('contact_content_form');
    $contact_form  = get_field('contact_form');
?>
<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part('inc/page', 'banner'); ?>
    <?php get_template_part('inc/breadcrumbs'); ?>
    <section class="contact_sec">
        <div class="inner_contact">
            <div class="row pad_row">
                <div class="large-6 medium-7 column">
                    <div class="contact_con">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="large-6 medium-5 column">
                    <div class="form_content">
                        <?php echo $contact_content_form; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap_form contact_page_form">
            <div class="row">
                <div class="large-12 column form_col">
                    <img class="img_bubble" src="<?php echo THEME_DIR ?>/images/contact_bubble.png" alt="bubble">
                    <?php echo do_shortcode($contact_form); ?>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; // End of the loop.?>
<?php
get_footer();
?>
