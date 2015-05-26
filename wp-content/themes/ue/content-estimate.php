<?php
// pull meta for each post
        $post_id = get_the_ID();
        $post_thumbnail_id = get_post_thumbnail_id( $post_id );
        $post_thumbnail_url = wp_get_attachment_image_src( $post_thumbnail_id, 'medium' );
        $post_thumbnail_url_tn = wp_get_attachment_image_src( $post_thumbnail_id, 'thumbnail' );
        $permalink = get_permalink( $id );
    
    //Variables inside loop
        $estimate_date = get_post_meta( $post_id, 'tt_estimate_date' );
        $estimate_location = get_post_meta( $post_id, 'tt_estimate_location' );
        $estimate_budget = get_post_meta( $post_id, 'tt_estimate_budget' );
        $estimate_contact = get_post_meta( $post_id, 'tt_estimate_contact_name' );
?>

<?php if ($name == 'all') { ?>

<div class="row estimate" style="padding:1.0em 0;border-bottom:1px solid #cccccc">
        <div class="col-sm-2">
            <?php echo $estimate_date[0]; ?>
        </div>
        <div class="col-sm-4">
            <?php echo the_title(); ?>
        </div>
        <div class="col-sm-2">
            <?php echo $estimate_location[0]; ?>
        </div>
        <div class="col-sm-2">
            $ <?php echo $estimate_budget[0]; ?>
        </div>
        <div class="col-sm-2">
            <a class="btn btn-primary btn-sm" href="#" style="margin-top:-0.4em;"><?php echo $estimate_contact[0]; ?></a>
            
            <?php 
	            if ( current_user_can('edit_post', $post_id) ) {
					echo '<a class="fbx-link" href="#"><i class="fa fa-pencil"></i></a>';
					do_action('gform_update_post/edit_link', array(
    'post_id' => $post_id,
    'url'     => home_url('/estimating/'),
    'text' => 'edit',
) );
				}
			?>
            
            <a data-attachment-id="" href="/estimating/" class="fbx-link">
            
            
        </div>
</div><!--row-->


<?php } else if ( is_single() ){ ?>

    <!--nothing-->
    
<?php } else { ?><!--default--> 
    
    nothing
    
<?php } ?><!--end-->