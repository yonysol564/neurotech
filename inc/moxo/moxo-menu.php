<?php $parent_id = $object->post_parent; ?>
<div class="moxo_menu">
    <?php
        $args = array(
            'post_type'      => 'page',
            'posts_per_page' => -1,
            'post_parent'    => $parent_id,
            'order'          => 'ASC',
            'orderby'        => 'menu_order'
        );

    $parent = new WP_Query( $args ); 
    if ( $parent->have_posts() ) { ?>
        <ul>
            <?php while ( $parent->have_posts() ) : $parent->the_post();   $current_page = ''; ?>
                <?php if ($object->ID == $post->ID) {
                    $current_page = 'current-menu-item';
                }  ?> 
                <li class="<?php echo $current_page; ?>">
                    <a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a>
                </li>
            <?php endwhile; ?>
        </ul> 
    <?php } wp_reset_query(); ?>
</div>