<?php
/*
Template Name: Mission
*/
?>
<?php get_header(); ?>
<div id="page-main" class="row"> <!-- page main -->
	<?php get_template_part( 'section', 'family-companies' ); ?>
    <div class="page-inside col-sm-10 col-sm-offset-1 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
		<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '611,90' ); ?>
	    <div id="page-header" class="row"> <!-- header -->   
	      <div class="col-sm-8">
	        <h1><?php the_title(); ?></h1>
	      </div>
	      <div class="col-sm-4 flush">
	            <div class="pg-header-img-wrap flush hidden-xs">
	                <img class="page-header-img" src="<?php echo $src[0]; ?>"/>
	            </div>
			</div>
	    </div> <!-- header -->
	      
		<div class="row">  <!--content-->
			<div id="page-content" class="col-sm-8">
			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			      <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
			      <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			    <?php endwhile; endif; ?>
			    <?php dynamic_sidebar( 'tt-aboutus' ); ?>
			</div>
			<div id="sidebar" class="col-sm-4">
			    <?php dynamic_sidebar( 'tt-sidebar' ); ?>
			</div>
		</div> <!--content-->
    </div> <!-- page inside -->
</div><!-- page main -->
	
	<?php get_template_part('section', 'photo-banner') ?>

  <?php get_footer() ?>