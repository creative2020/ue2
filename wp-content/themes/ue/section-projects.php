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
                        get_template_part( 'content', 'project' );
            ?>
            
            <?php } //loop end ?>
            
      <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
            
            <?php } else { 
                    
                    // no posts found
                    } ?>

<?php wp_reset_postdata(); ?>

<!--Projects-->
        
<!-- Project Modal -->
        
<!-- Modal -->
<div class="modal fade" id="project-modal" tabindex="-1" role="dialog" aria-labelledby="project-modal-Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="project-modal">Projects</h4>
      </div>
      <div class="modal-body">
        
          <!--Carousel-->
          
          <!-- Project carousel -->
<div id="carousel-projects" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators" style="display:none;">
    <li data-target="#carousel-projects" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-projects" data-slide-to="1"></li>
    <li data-target="#carousel-projects" data-slide-to="2"></li>
      <li data-target="#carousel-projects" data-slide-to="3"></li>
      <li data-target="#carousel-projects" data-slide-to="4"></li>
      <li data-target="#carousel-projects" data-slide-to="5"></li>
      <li data-target="#carousel-projects" data-slide-to="6"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
      <?php
            $upload_dir = wp_upload_dir();
            ?>
    <div class="item active">
      <img src="<?php echo $upload_dir['baseurl'].'/2015/03/FairchildPediatricWaitngRooms.png'; ?>">
      
    </div>
    <div class="item">
      <img src="<?php echo $upload_dir['baseurl'].'/2015/03/SaundersCountyHealthServices.png'; ?>">
      
    </div>
    <div class="item">
      <img src="<?php echo $upload_dir['baseurl'].'/2015/03/project-or.png'; ?>">
      
    </div>
    <div class="item">
      <img src="<?php echo $upload_dir['baseurl'].'/2015/03/BirthCenter.png'; ?>">
     
    </div>
    <div class="item">
      <img src="<?php echo $upload_dir['baseurl'].'/2015/03/project-cancer-ctr.png'; ?>">
      
    </div>
    <div class="item">
      <img src="<?php echo $upload_dir['baseurl'].'/2015/03/KellerCommunityHospital.png'; ?>">
      
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-projects" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-projects" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
          
<!--END Carousel-->          
          
          
          
          
          
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
        
<!-- modal-->        
        
        
        
    </div><!--col-->
    
</div><!--row-->