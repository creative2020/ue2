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
        $estimate_postname = get_post_field( 'post_name', $post_id );
?>

<?php if ($name == 'all') { ?>

<a href="#EstimateDesc-<?php echo $post_id ?>" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">
<div class="row estimate" style="padding:1.0em 0;border-bottom:1px solid #cccccc">
        <div class="col-sm-9">
	        <div class="col-sm-2">
		        <i class="fa fa-info-circle est-desc"></i>
	            <?php echo $estimate_date[0]; ?>
	        </div>
	        <div class="col-sm-5">
	            <?php echo the_title(); ?>            
	        </div>
	        <div class="col-sm-2">
	            <?php echo $estimate_location[0]; ?>
	        </div>
	        <div class="col-sm-3">
	            <?php echo $estimate_budget[0]; ?>
	        </div>
        </div>    
        <div class="col-sm-3">
            <a class="btn btn-primary btn-sm" href="/user-login/estimating-opportunities/?pm=y&contact=<?php echo $estimate_contact[0]; ?>&proj=<?php echo urlencode(get_the_title($post_id)); ?>#est-form" style="margin-top:-0.4em;"><?php echo $estimate_contact[0]; ?></a>
            
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
            
            
            
            
        </div>
</a>
        <div class="col-sm-12">
			<div class="collapse" id="EstimateDesc-<?php echo $post_id ?>">
				<div class="well">
					<h3>Description</h3>
				    <p><?php echo the_content(); ?></p>
				</div>
			</div>
        </div>
</div><!--row-->


<?php } else if ( is_single() ){ ?>

    <!--nothing-->
    
<?php } else { ?><!--default--> 
    
    nothing
    
<?php } ?><!--end-->