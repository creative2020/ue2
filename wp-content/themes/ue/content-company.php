<?php 
    $post_id = get_the_ID();
    $tt_pre_title = '';
    $icon_size = '6.0em';
    $font_color = '#79A99C';
    $bg_color = '';
    $size = 'medium';
    $post_thumbnail_id = get_post_thumbnail_id( $post_id );
    $image_info = wp_get_attachment_image_src( $post_thumbnail_id, $size, $icon );
    $company_website = get_post_meta( $post_id, 'tt_company_website');
    $title = get_the_title();
?>        

<!--Single-->
    <?php if ( is_single() ) { ?> 
        <div id="page-header" class="row" style="background:<?php echo $bg_color; ?>">
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
            
            <?php echo do_shortcode('[tt_rule]'); ?>
            
            <div class="col-sm-12">
                <a class="btn btn-primary btn-md pull-right" href="/blog"><i class="fa fa-arrow-circle-right"></i> Back to the blog</a>
            </div>
            
        </div>
    </div>
</div> <!--row-->

        
    </div>

        <?php } else { ?>
            
<!--Single-->            

            
<!--post-->

                    
    <div class="row tt-search excerpt-<?php echo $cat_name ?>" style="background:<?php echo $bg_color; ?>;;padding:0.5em;border-bottom:0px solid #cccccc">
        <?php echo do_shortcode('[tt_rule id="'.$title.'" top="y"]'); ?>
        <div class="col-sm-3">
            <?php if ( has_post_thumbnail() ) { ?>
            
                <img src="<?php echo $image_info[0]; ?>" class="img-responsive">
            
            <?php } else { ?>
            
                <i class="fa fa-<?php echo $tt_icon; ?>" style="color:<?php echo $font_color; ?>;font-size:<?php echo $icon_size; ?>;"></i>
            
            
            <?php } ?>
        </div>

        <div class="col-sm-9">
            <h2><?php echo $tt_pre_title; ?> <?php the_title(); ?></h2>
            
                <p><?php the_content(); ?></p>
            <a class="btn btn-grey btn-md pull-right" href="<?php echo $company_website[0]; ?>" target="_blank"><i class="fa fa-external-link-square"></i> Visit website</a>
        </div>
        
    </div>


<?php } ?> <!--post-->
