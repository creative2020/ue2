<?php
/*
Template Name: Page
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
	<div class="col-sm-8">
	    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	      <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
	      <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
	    <?php endwhile; endif; ?>
	  </div>
	      
	  <div id="sidebar" class="col-sm-4">
	      <?php dynamic_sidebar( 'tt-sidebar' ); ?>
	  </div>
	  </div>
	  </div>
</div> <!-- page main -->
  <?php get_footer() ?>