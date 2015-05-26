<?php
// pull meta for each post
        $post_id = get_the_ID();
        $post_thumbnail_id = get_post_thumbnail_id( $post_id );
        $post_thumbnail_url = wp_get_attachment_image_src( $post_thumbnail_id, 'medium' );
        $post_thumbnail_url_tn = wp_get_attachment_image_src( $post_thumbnail_id, 'thumbnail' );
        $permalink = get_permalink( $id );

//Variables inside loop
        $sig_id = get_post_meta( $post_id, 'people_sig' );
        $people_quote = get_post_meta( $post_id, 'people_quote' );
        $sig_img = wp_get_attachment_image_src( $sig_id[0], 'medium' );
        $people_title = get_post_meta( $post_id, 'people_title' );
    
        $image = get_the_post_thumbnail( $post_id, 'medium' );
            if (empty( $image )) {
                $image = '<img src="/wp-content/themes/pkr/images/img-fpo.png">';
            }
?>

<?php if ($name == 'all') { ?>

    <div class="col-sm-12 people-wrap">
        <div class="col-sm-3">
            <img src="<?php echo $post_thumbnail_url[0]; ?>" class="img-responsive grayscale">
            
        </div>
        <div id="<?php echo the_title() ?>" class="col-sm-9">
        <div>
            <span class="people-name" style="font-size:2.0em;color:#412020;"><?php echo the_title(); ?> </span>
            <span class="people-title"style="font-size:1.0em;color:grey;"><?php echo $people_title[0]; ?></span>
        </div>
            <?php echo the_content(); ?>
            <?php echo do_shortcode('[tt_rule top="y"]'); ?>
        </div>
        
    </div>
    
    


<?php } else if ($name == 'short') { ?>

    <a href="/our-people/#<?php echo the_title(); ?>">
        <div class="people-wrap col-sm-4">
            <div class="row">
                <img src="<?php echo $post_thumbnail_url_tn[0]; ?>" class="img-responsive headshot grayscale">
                <h3 class="people-name-short"><?php echo the_title(); ?></h3>
                <h5 class="people-title-short"><?php echo $people_title[0]; ?></h5>
            </div>
        </div>
    </a>
    
<?php } else { ?><!--default--> 
    
    nothing
    
<?php } ?><!--end-->