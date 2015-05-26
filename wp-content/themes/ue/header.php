<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
<title>
<?php wp_title(); ?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
<?php wp_head(); ?>
</head>
<body>
<div class="container-fluid"> <!-- container header footer -->

<div class="row"><!--row-->
    <div id="skynav" class="col-xs-12 pull-right"><!--skynav-->
        <div class="col-xs-12 hidden-xs"><!--col-->
			<p class="pull-right" style="font-size:0.8em;">
				<a href="/user-login/estimating-opportunities/"><i class="fa fa-user skynav"></i>Subcontractors</a>
			</p>
        
		</div><!--col-->
	</div><!--skynav-->
</div><!--row-->

    
<div id="logo" class="row"><!--logo-->
    <a class="home-link" href="<?php echo get_option('home'); ?>"></a>
    	<div id="logo-container" class="col-sm-10 col-sm-offset-1 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
    		<img class="logo-img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-h.png">
    	</div>
    
</div><!--logo-->
        
<div id="navbar-bg" class="row"><!-- row -->
</div> <!-- row -->
    
<div class="row"><!-- row -->
    <div id="navbar" class="col-sm-12"> <!-- nav -->
                       
            <?php wp_nav_menu( array(
                'menu'              => 'main',
                'theme_location'    => 'tt-main',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse col-lg-offset-3 col-lg-6',
        'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            ); ?>
            
                        
    </div> <!-- nav -->
</div> <!-- row -->
    



    
    
    
    
<!--header-->
