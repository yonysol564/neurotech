<?php
    /* Template Name: FAQ  */
    get_header();
    $question = get_field('question' ,'option');
?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part('inc/page', 'banner'); ?>
    <?php get_template_part('inc/breadcrumbs'); ?>
    <section class="faq_sec">
        <div class="inner_faq">
            <div class="row">
                <div class="large-12 column">
                    <div class="faq_con">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="large-12 column">
                    <div class="faq_accordion">
                        <ul class="accordion" data-accordion>
                        <?php if( have_rows('faq_rep') ): $cnt = 0; $is_active = ''; ?>
                            <?php while ( have_rows('faq_rep') ) : the_row(); 
                                if($cnt == 0) { $is_active = 'is-active'; } else { $is_active = ''; }
                                    $faq_ques = get_sub_field('faq_ques');
                                    $ques_len = strlen($faq_ques);
                                    if($ques_len >= 75){ $class_table = 'class_table'; } else { $class_table = ''; }
                                    $faq_ans = get_sub_field('faq_ans');
                                ?>  
                                    <li class="accordion-item <?php echo $is_active; ?>" data-accordion-item>
                                        <a href="#" class="accordion-title">
                                            <div class="ques_label">
                                                <span>                               
                                                    <?php echo $question; ?>
                                                </span>
                                                <i class="fa fa-question-circle mob_sign" aria-hidden="true"></i>
                                            </div>
                                            <div class="ques_con <?php echo $class_table; ?>">                     
                                                <?php echo $faq_ques; ?>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a>
                                        <div class="accordion-content" data-tab-content>
                                            <?php echo $faq_ans; ?>
                                        </div>
                                    </li>                             
                            <?php $cnt++; endwhile; ?>       
                        <?php endif;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; // End of the loop.?>
<?php
get_footer();
?>
