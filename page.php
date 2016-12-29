<?php
    get_header();
    $contact_form  = get_field('page_contactform');
    $menu = get_field("moxo_menu_selector");
    $col_class = '12';
    if ($menu || get_field("display_sidebar")) {
       $col_class = '9 moxo_col_9';
    }
?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part('inc/page', 'banner'); ?>
    <?php get_template_part('inc/breadcrumbs'); ?>

    <section class="page_sec">
        <div class="inner_about">
            <div class="row">
                <div class="large-<?php echo $col_class; ?> column">
                    <div class="about_con">
                        <?php the_content(); ?>
                    </div>
                    <?php if($contact_form){ ?>
                        <div class="wrap_form page_wrap_form">
                           <?php echo do_shortcode($contact_form); ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="large-3 column">
                    <div class="about_con">
                        <?php if ($menu || get_field("display_sidebar")) {
                         get_sidebar();
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; // End of the loop.?>
<?php
get_footer();
?>

<!-- [checkbox checkbox-354 class:class:checkbox_designed  use_label_element ""] -->
