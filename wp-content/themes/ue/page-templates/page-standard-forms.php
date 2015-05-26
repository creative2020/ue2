<?php
/*
Template Name: Standard Forms
*/
?>
<?php get_header(); ?>

<div id="page-main" class="row">
    <div class="page-inside col-sm-10 col-sm-offset-1 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
    
	    <div id="page-header" class="row">    
	      <div class="col-sm-12">
	        <h1><?php the_title(); ?></h1>
	      </div>
	    </div>
      
		<div id="page-content" class="row">  
			<div class="col-sm-12">
				
				<?php
	$postid = get_the_ID();
	$tt_post = get_post($postid);
    $allow_meta = 'sub';
    $allow_meta_key = 'ue_sub';
	$allow_role = 'administrator';
    $current_user = wp_get_current_user();
    $current_user_data = get_userdata( $current_user->ID );
    $sub = get_user_meta($current_user->ID, 'ue_sub', true);
    $user_roles = $current_user->roles;
	$user_role = array_shift($user_roles);
	$user_meta_custom = get_user_meta($current_user->ID, $allow_meta_key, true);
	
	    
	if ( $sub == 'sub' ) { 
		
		echo '<div><a class="btn btn-sm" href="/estimating-opportunities/">Back to Estimating Opportunities</a></div></br>';
		
		if (have_posts()) : while (have_posts()) : the_post();
			      the_content('<p class="serif">Read the rest of this page &raquo;</p>');
			      wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number'));
			    endwhile; endif;	
	
	} else {
		
		echo 'Please <a class="btn btn-sm" href="/user-login">login</a> as a subcontractor to view/download our forms. If you do not have a login please <a class="btn btn-sm" href="/registration/subcontractor/">register</a> here.';
		
	} ?>			
			    
		  	</div>
		</div>
	</div>
</div> <!-- page main -->

<?php get_footer() ?>