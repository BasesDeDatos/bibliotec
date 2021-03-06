<?php 
	/*

	 * This file is used to generate footer section of theme.

	 */	
?>
		<?php 
          $cp_show_footer = get_option(THEME_NAME_S.'_show_footer','enable');
		  $cp_top_footer = get_option(THEME_NAME_S.'_top_footer','enable');
		  $cp_social_footer = get_option(THEME_NAME_S.'_top_footer','enable');
          $cp_show_copyright = get_option(THEME_NAME_S.'_show_copyright','enable');
          $footer_text = do_shortcode( __(get_option(THEME_NAME_S.'_copyright_left_area'), 'book-store') );
         ?>
      </div>
       <footer> 
        <?php if( $cp_show_footer == 'enable' ){
			
			  if( $cp_top_footer == 'enable' ){
			 ?>  
		 
                <!-- Start Footer Top 1 -->
              <section class="container-fluid footer-top1">
                <section class="container">
                  <section class="row-fluid">
                    <article class="span3">
                    <?php dynamic_sidebar( 'Footer Top 1' );  ?>
                    </article>
                    <article class="span3">
                    <?php dynamic_sidebar( 'Footer Top 2' );  ?>
                    </article>
                    <article class="span3">
                    <?php dynamic_sidebar( 'Footer Top 3' );  ?>
                    </article>
                    <article class="span3">
                    <?php dynamic_sidebar( 'Footer Top 4' );  ?>
                    </article>
                  </section>
                </section>
              </section>
              
              <?php } ?>
              <!-- End Footer Top 1 -->
            
              <!-- Start Footer Top 2 -->
              
           <?php } ?>
              <!-- End Footer Top 2 -->
              <!-- Start Main Footer -->
           
                <section class="social-ico-bar">
                  <section class="container">
                    <section class="row-fluid">
                      <article class="span6 copy-left">
                        <?php if ($footer_text != '' ){
                                echo sprintf(__('%s','crunchpress'), $footer_text);
                                }else {?>
                                  <p>Copyright &copy; <?php echo date("Y") ?></p>;
                                <?php } ?>
                      </article>
                      <article class="span6 copy-right">
                        <p></p>
                      </article>
                    </section>
                  </section>
                </section>
             
              <!-- End Main Footer -->
          
           </footer>
           
  <?php wp_footer(); ?>
  
            <script type="text/javascript">
			    <?php get_template_part( '/javascript/bx', 'scripts' ); ?>
            </script>
            
            
</body>
</html>       
           
    