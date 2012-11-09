<?php
/**
 * Template Name: Portfolio Full
 */

get_header(); ?>

<div id="full-width">
  <div id="content">
    <div class="inside">
      <div class="wrapper">
        <div class="grid_16">
        	<?php include_once (TEMPLATEPATH . '/title.php');?>   
					<?php global $more;	$more = 0;?>
          <?php $wp_query = new WP_Query(); ?>
          <?php $wp_query->query("post_type=portfolio&paged=".$paged.'&showposts=9'); ?>
          <?php get_template_part( 'loop', 'portfolio' );?>
        </div>
      </div>
    </div>
  </div><!-- #content -->
</div>
<!-- end #main -->
<?php get_footer(); ?>
