<?php 
    $page_banner = get_field('page_banner'); 
    $page_banner_color = get_field('page_banner_color'); 

    if ($page_banner_color) {
        $bg_color = 'style="background-color:' . $page_banner_color . ';"';
    }else{
        $bg_color = 'style="background-color:#f69331;"';
    }

    if ($page_banner) {
        $bg_img = 'style="background-image: url('.$page_banner['url'].');"';
    }else{
        $bg_img = 'style="background-image: url("");"';
    }
?>
<div class="page_banner" <?php echo $bg_color; ?>>
    <div class="row">
        <div class="large-12 column" >
            <div class="inner_banner" <?php echo $bg_img; ?>">
                <div class="wrap_h1">
                    <h1 class="head videos_title"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>    
</div>