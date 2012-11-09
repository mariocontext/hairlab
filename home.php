<?php
/*
 * Template Name: Main
 */

get_header(); ?>
	<div id="content" class="left_content">
		<?php if ( ! dynamic_sidebar( 'Welcome Sidebar' ) ) : ?>
      <!--Wigitized 'Request' for the home page-->
    <?php endif ?>
    

<div class="wrapper">
<?php the_content() ?>
</div>


    <!--<div class="line-hor"></div>
    <div class="prefix_1">
      <?php if ( ! dynamic_sidebar( 'Main Page Widget 3' ) ) : ?>
        <!--Wigitized 'Widget 2' for the home page-->
      <?php endif ?>
    </div>-->
	</div><!--#content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
