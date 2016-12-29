<div class="moxo_menu sidebar_menu">
    <?php
        $object = get_queried_object();
        $parent_id = $object->post_parent;
        if(!$parent_id){
            $parent_id = get_field("display_child_pages") ? $object->ID : true;
        }

        if( $parent_id ){
            $args = array(
                'post_type'      => 'page',
                'posts_per_page' => -1,
                'post_parent'    =>  $parent_id,
                'order'          => 'ASC',
                'orderby'        => 'menu_order'
            );
            $parent = new WP_Query( $args );
            if ( $parent->have_posts() ) : ?>
                <ul>
                    <?php while ( $parent->have_posts() ) : $parent->the_post(); $current_page = ''; ?>
                        <?php if ($object->ID == $post->ID) {
                            $current_page = 'current-menu-item';
                        } ?>
                        <li class="<?php echo $current_page; ?>">
                            <a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; wp_reset_query();
        }
        $menu = get_field("moxo_menu_selector");
        if ($menu) {
            wp_nav_menu( array( 'menu' => $menu , 'menu_class' => 'moxo_child_menu' ) );
        }
    ?>
</div>

<?php
    $newletter_desc     = get_field('newletter_desc', 'option');
    $newletter_form     = get_field('newletter_form', 'option');
    $newletter_top_text = get_field('newletter_top_text', 'option');
?>
<div class="newsletter_form">
    <div class="top_div">
       <div class="inner_div">
           <?php echo $newletter_top_text; ?>
       </div>
    </div>
    <div class="bottom_div">
        <div class="desc_p">
           <?php echo $newletter_desc; ?>
        </div>
        <div>
            <?php echo do_shortcode($newletter_form); ?>
        </div>
    </div>
</div>
