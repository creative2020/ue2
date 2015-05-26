<!--Special content item-->

<?php
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
    $more_btn_text = 'View more projects';
    $more_btn_link = '/category/projects/';
    $image = '<i class="fa fa-'.$tt_icon.'" style="color:'.$font_color.';font-size:4.0em;"></i>';
    $post_thumbnail_id = get_post_thumbnail_id( $post_id );
    $image_info = wp_get_attachment_image_src( $post_thumbnail_id, 'square', $icon );

    $tt_project_name = get_post_meta( $post_id, 'tt_project_name' );
    $tt_project_headline = get_post_meta( $post_id, 'tt_project_headline' );
    $tt_project_cityst = get_post_meta( $post_id, 'tt_project_cityst' );
?> 

<!--Single-->
    <?php if ( is_single() ) { ?> 
        <div id="single-<?php echo $cat_name; ?>" class="row" style="background:<?php echo $bg_color; ?>">
            <div class="col-sm-8"> 
                <h1 style="color:<?php echo $font_color; ?>;"><?php echo $tt_pre_title; ?> <?php echo $post->post_title; ?></h1>
            </div>
            <div class="col-sm-4"> 
                <div class="col-sm-12 tt-feature-image"><?php echo $image; ?></div>
            </div>
        </div>

<div class="row"> <!--row-->
    <div class="section clearfix">
        
        <div class="col-md-10 col-md-offset-1">
            
            <?php echo do_shortcode('[tt_rule]'); ?>
            
               <div class=""><p><?php echo get_the_category_list(); ?></p></div>
            
            <?php echo do_shortcode('[tt_rule]'); ?>
            
                <?php the_content(); ?>
            
                <div class="row"> <!--project details-->
                
                <div class="col-sm-10">
                    <span class="<?php echo $cat_name; ?>-name"><?php echo $tt_project_headline[0]; ?></span>
                    <span class="<?php echo $cat_name; ?>-title"><?php echo $tt_project_name[0]; ?></span>
                    <span class="<?php echo $cat_name; ?>-cityst"><?php echo $tt_project_cityst[0]; ?></span>
                </div>
                
            </div>
            
            <?php echo do_shortcode('[tt_rule]'); ?>
            
            <div class="col-sm-12">
                <a class="btn btn-primary btn-md pull-right" href="<?php echo $more_btn_link; ?>"><i class="fa fa-arrow-circle-right"></i> <?php echo $more_btn_text; ?></a>
            </div>
            
        </div>
    </div>
</div> <!--row-->
        
</div>
<!--Single--> 

<?php } elseif ( is_page('home') || is_page('portfolio') ) { ?> <!-- home page project section -->



<div class="col-sm-4 col-md-3 col-lg-3">
                <a href="#project-modal" data-toggle="modal" data-target="#project-modal">
                    <div class="row project-wrap" style="">
                        <div class="project-image-wrap" style="">
                        	<img src="<?php echo $image_info[0]; ?>" class="img-responsive">
                        </div>
                        
                        <div class="project-desc">
                            <h2><?php echo $tt_project_headline[0]; ?></h2>
                            <h3><?php echo $tt_project_name[0]; ?></h3>
                            <p><?php echo $tt_project_cityst[0]; ?></p>
                        </div>
                    </div>
                 </a>       

            </div>


<?php } else { ?> <!-- END home page project section -->


<!--post-->
<a href="<?php echo get_the_permalink() ?>">
                    
    <div class="row post-<?php echo $cat_name ?>" style="background:<?php echo $bg_color; ?>;">
        <div class="col-sm-2">
            <?php if ( has_post_thumbnail() ) { ?>
            
                <img src="<?php echo $image_info[0]; ?>" class="img-responsive">
            
            <?php } else { ?><!--end else-->
            
                <i class="fa fa-<?php echo $tt_icon; ?>" style="color:<?php echo $font_color; ?>;font-size:<?php echo $icon_size; ?>;"></i>
            
            
            <?php } ?>
        </div>

        <div class="col-sm-10">
            <h2><?php echo $tt_pre_title; ?> <?php the_title(); ?></h2>
            <div class="clearfix"><p><?php echo get_the_category_list(); ?></p></div>
            
                <p><?php the_excerpt(); ?></p>
            
            <div class="row"> <!--project details-->
                
                <div class="col-sm-10">
                    <span class="<?php echo $cat_name; ?>-name"><?php echo $tt_project_name[0]; ?></span>
                    <span class="<?php echo $cat_name; ?>-cityst"><?php echo $tt_project_cityst[0]; ?></span>
                </div>
                
            </div>
            
     
        </div>
        
    </div>
</a>

<?php } ?> <!--post-->

