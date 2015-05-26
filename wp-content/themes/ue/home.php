<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>

<div class="row slider hidden-xs">
    <?php echo do_shortcode('[image-carousel]'); ?>
</div>

<?php get_template_part( 'section', 'family-companies' ); ?>

<div id="page-main" class="row">
  <div class="page-inside col-sm-10 col-sm-offset-1 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">

	  <!-- Projects -->
	  <h1>Projects</h1>
	  	<?php get_template_part('content', 'project-gallery') ?>
	  <!-- Projects -->
	  
  </div>
</div>





<?php get_footer() ?>
