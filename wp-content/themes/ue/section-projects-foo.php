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
<!--get page content-->
<?php $tt_post_content = get_post_field( 'post_content', $id ); ?>
            
<!-- add if empty code-->
<?php if ( $tt_post_content != null ) { ?>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <?php echo $tt_post_content; ?>
        </div>
    </div>
<?php } ?>

<div id="projects" class="row">
	<div class="col-sm-12">
            
        
            <?php 
                if ( $the_query->have_posts() ) {
                    
                    while ( $the_query->have_posts() ) {
                        
                        $the_query->the_post();
                        $post_id = get_the_ID();
                        $permalink = get_permalink( $id );
                        $post = get_post();
                        $category = get_the_category();
                        $cat_name = $category[0]->category_nicename;
                   
                    //testimonial content    
                        get_template_part( 'content', 'project-foo' );
            ?>
            
            <?php } //loop end ?>
            
      <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
            
            <?php } else { 
                    
                    // no posts found
                    } ?>

<?php wp_reset_postdata(); ?>

      
        
        
    </div><!--col-->
    
</div><!--row-->