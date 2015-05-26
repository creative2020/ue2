<?php
/*
Template Name: Projects
*/
?>
<?php get_header(); ?>
<div id="page-main" class="row">
  <div class="page-inside col-sm-10 col-sm-offset-1 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
        
      	<!-- Projects -->
            <?php get_template_part('content', 'project-gallery') ?>
        <!-- Projects -->

  </div>
</div>
  <?php get_footer() ?>