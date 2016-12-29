<?php
    /* Template Name: Moxo Parent  */
    get_header();
    $moxo_parent_img = get_field('moxo_parent_img');
    $moxo_parent_title = get_field('moxo_parent_title');
    $moxo_parent_desc= get_field('moxo_parent_desc');
    $moxo_parent_url = get_field('moxo_parent_url');
?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part('inc/page', 'banner'); ?>
    <?php get_template_part('inc/breadcrumbs'); ?>
    <section class="about_sec">
        <div class="inner_about">
            <div class="row">
                <div class="large-12 column">
                    <div class="about_con">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="large-12 column">
                    <div class="about_thumb">
                        <?php the_post_thumbnail(); ?>
                    </div>
                </div>
            </div>
            <?php if ($moxo_parent_desc) { ?>
                <div class="about_moxo_desc">
                    <div class="row">
                        <div class="large-12 column main_col">
                            <div class="inner_wrap">
                                <div class="row">                    
                                    <div class="large-4 medium-4 column">
                                        <a href="<?php echo $moxo_parent_url; ?>" title="">          
                                            <div class="wrap_img">
                               					<img src="<?php echo $moxo_parent_img['url']; ?>" alt="about">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="large-8 medium-8 column">
                                        <a href="<?php echo $moxo_parent_url; ?>" title="">  
                                            <div class="wrap_moxo_title_desc">
                                                <h3>
                                                    <?php echo $moxo_parent_title; ?>
                                                </h3>
                                                <div class="wrap_p">
                                                    <?php echo $moxo_parent_desc; ?>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>                          
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php $parent_moxo_boxes = get_field('parent_moxo_boxes'); ?>

            <?php if ($parent_moxo_boxes) { 
                $cnt = count($parent_moxo_boxes); 
                $col = '6';
                switch ($cnt) {
                    case 1:  $col = '12';  break;
                    case 2:  $col = '6';   break;
                    case 3:  $col = '4';   break;
                    default: $col = '6';   break;
                }
            ?>
            <div class="about_moxo_boxes">
                <div class="row">
                    <?php foreach ($parent_moxo_boxes as $value) { 
                        $open_mew_link = $value['open_mew_link'];
                    ?>    
                        <div class="large-<?php echo $col; ?> medium-<?php echo $col; ?> column col_moxo">                          
                            <a href="<?php echo $value['parent_moxo_boxes_link']; ?>" <?php if($open_mew_link){ echo 'target="_blank"'; } ?> title="">
                                <div class="top_div">
                                    <img src="<?php echo $value['parent_moxo_boxes']['url']; ?>" alt="moxo_img">
                                </div>
                            </a>
                            <a class="moxo_hover" href="<?php echo $value['parent_moxo_boxes_link']; ?>" <?php if($open_mew_link){ echo 'target="_blank"'; } ?>  title="">    
                                <div class="img_div" style="background-image: url( <?php echo $value['parent_moxo_boxes_bgimg']['url']; ?> );"> 
                                    <div class="bottom_div">
                                        <?php echo $value['parent_moxo_boxes_con']; ?>                     
                                    </div>
                                </div>
                            </a>
                        </div>
                     <?php } ?>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>
    <section class="about_des_sec"> 
        <div class="row">
            <div class="large-12 column">
               <div class="desc_bottom">   
                <?php echo get_field('moxo_description'); ?>
               </div> 
            </div>
        </div>
    </section>
<?php endwhile; // End of the loop.?>
<?php
get_footer();
?>
