<div id="footer-wrap" class="row" style="padding:0.5em 0;"><!--row-->
    <div class="col-sm-10 col-sm-offset-1 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
        <div class="col-xs-12 col-sm-5">
        <h3>Contact Us</h3>
            <?php echo do_shortcode('[gravityform id="3" name="Quick contact" title="false" description="false" ajax="true"]'); ?>
        </div>
        
        <div id="footer-logo" class="col-xs-12 col-sm-7"><!--logo-->
    <a href="<?php echo get_option('home'); ?>" title="<?php bloginfo('name'); ?>">
    	
    		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-h.png" class="img-responsive" style="">
    	
    </a>
    
</div><!--logo-->
        
        
	</div>    
</div><!--row-->
          
      
<div id="copyright" class="row"><!--row-->
      <div class="col-sm-10 col-sm-offset-1">
        <p><?php _e('&copy;',''); echo ' '.date('Y').' '; _e(''.bloginfo('name'). ' - All rights reserved.',''); ?> | <a href="http://2020creative.com" title="2020 Creative Website Design">Website by 2020</a> | </p>
      </div>
</div> <!-- copyright -->
  
</div><!--container-->

<?php wp_footer(); ?>

</body>
</html>