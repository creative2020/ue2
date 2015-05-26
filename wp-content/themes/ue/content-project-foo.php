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

