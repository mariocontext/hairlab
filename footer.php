      <div class="clear"></div>
      </div><!--.wrapper-->
    </div><!--.container-->
  </div><!--#main-wrapper-->
  <footer id="footer">
    <!--<div class="container_16">-->
      <div class="wrapper">
      	<div class="lft_footer">
        <nav class="footer">
          <?php wp_nav_menu( array(
            'container'       => 'ul', 
            'menu_class'      => 'footer-nav', 
            'depth'           => 0,
            'theme_location' => 'footer_menu' 
            )); 
          ?>
        </nav>
        <div class="btmft_menu">
            <ul>
					<li><a href="#">Sitemap</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms & Conditions </a></li>
            </ul>
        </div>
        <div class="dv_copy"><?php bloginfo('name'); ?> &copy; <?php echo date("Y") ?></div>
        </div>
        <div class="copy">
        	<div class="txt_sn">Connect with us!</div>
            <div class="ic_sn"><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/site-image/img_delic.gif" alt="Delicious" width="22" height="21" border="0" title="Delicious" /></a><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/site-image/img_flicer.gif" alt="Flickr" width="22" height="21" border="0" title="Flickr" /></a><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/site-image/img_twitter.gif" alt="Twitter" width="22" height="21" border="0" title="Twitter" /></a></div>
        </div>
      </div>
    <!--.</div>container-->
  </footer>
  <div class="btm_fttxt">HAIRLAB&reg; and the HAIRLAB logo are part of a family of trademarks of United Global Media Group, Inc. Trademarks and URL are licensed by Dr. Ron Chao. United Global Media Group, Inc. and its affiliates are not a professional medical corporation nor engage in the field of practicing medicine. v2</div>
</div><!--#main-->
<?php wp_footer(); ?> <!-- this is used by many Wordpress features and for plugins to work proporly -->
</body>
</html>