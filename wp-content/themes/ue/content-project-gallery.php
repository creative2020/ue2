<?php
		// Query
		$args = array(
			'posts_per_page'   => 12,
			'offset'           => 0,
			'category'         => '',
			'category_name'    => '',
			'orderby'          => 'rand',
			'order'            => 'DESC',
			'include'          => '',
			'exclude'          => '',
			'meta_key'         => '',
			'meta_value'       => '',
			'post_type'        => 'project',
			'post_mime_type'   => '',
			'post_parent'      => '',
			'post_status'      => 'publish',
			'suppress_filters' => true 
		);
		$the_query = new WP_Query( $args );
		
		?>
        <div id="projects" class="row">
			<div class="col-sm-12">
			<!-- before loop -->
            <div id="gallery-1" class="gallery gallery-size-thumbnail fbx-instance">
				<!-- loop -->
	            <?php 
	                if ( $the_query->have_posts() ) {
	                    
	                    while ( $the_query->have_posts() ) {
	                        
	                        $the_query->the_post();
	                        $permalink = get_permalink( $id );
	                        $post = get_post();
	                        $category = get_the_category();
	                        $cat_name = $category[0]->category_nicename;
	                        
	                        
						    $post_id = get_the_ID();
						    $category = get_the_category(); 
						    $cat_name = $category[0]->category_nicename;
						    $tt_pre_title = 'Project: ';
						    $tt_icon_name = get_post_meta( $post_id, 'tt_icon' );
						        if ( $tt_icon_name[0] != null ) {
						            $tt_icon = $tt_icon_name[0];
						        } else {
						            $tt_icon = 'rocket';
						        }
						    $icon_size = '6.0em';
						    $font_color = 'red';
						    $bg_color = 'white';
						    
						    $image = '<i class="fa fa-'.$tt_icon.'" style="color:'.$font_color.';font-size:4.0em;"></i>';
						    $post_thumbnail_id = get_post_thumbnail_id( $post_id );
						    $image_info = wp_get_attachment_image_src( $post_thumbnail_id, 'square', $icon );
						    $image_full = wp_get_attachment_image_src( $post_thumbnail_id, 'large', $icon );
						
						    $tt_project_name = get_post_meta( $post_id, 'tt_project_name' );
						    $tt_project_headline = get_post_meta( $post_id, 'tt_project_headline' );
						    $tt_project_cityst = get_post_meta( $post_id, 'tt_project_cityst' );


	                   
	                    //Project item   ?> 
	                    <div class="project-image-wrap">
	                        <dl class="gallery-item col-sm-4 col-md-3 col-lg-3">
								<dt class="row project-wrap">
									<a data-attachment-id="<?php echo $post_thumbnail_id; ?>" href="<?php echo $image_full[0]; ?>" class="fbx-link">
										<img src="<?php echo $image_info[0]; ?>" class="img-responsive" aria-describedby="gallery-1-<?php echo $tt_project_name[0]; ?>">
										<div class="project-desc">
				                            
				                            	<h2><?php echo $tt_project_headline[0]; ?></h2>
				                            	
				                            <h3><?php echo $tt_project_name[0]; ?></h3>
				                            <p><?php echo $tt_project_cityst[0]; ?></p>
				                        </div>
									</a>
								</dt>
								<dd class="gallery-caption" id="gallery-1-<?php echo $post_thumbnail_id; ?>">
	                            	<?php echo $tt_project_headline[0]; ?>
	                            </dd>
							</dl>
	                    </div>    
	                        
	                        
	            
	            
	            <?php } //loop end ?>
	            
				<!-- after loop -->
				
            </div><!--/gallery-1-->
            
            
        <?php } else { 
                
                // no posts found
                } ?>

<?php wp_reset_postdata(); ?>

			</div>
        </div>