<?php
/*
 * Template Name: Contacts
 */

get_header(); ?>

<div id="full-width">
	<div id="content">
    <div class="wrapper">
      <div class="grid_10">
        <div class="inside">
        	<?php if ( ! dynamic_sidebar( 'Contact Form' ) ) : ?>
            <!-- Wigitized Header -->
          <?php endif ?>
          <?php wp_reset_query(); ?>
        </div>
      </div>
      <div class="grid_6 omega">
        <?php if ( ! dynamic_sidebar( 'Address' ) ) : ?>
          <!-- Wigitized Header -->
        <?php endif ?>
        <?php wp_reset_query(); ?>
      </div>
    </div>
    <div class="wrapper">
    	<div class="grid_16">
        <div class="line-hor"></div>
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <div id="page-content">
            <?php the_content(); ?>
          </div><!--#pageContent -->
        <?php endwhile; ?>
      </div>
    </div>
  </div><!--#content-->
</div>
<?php get_footer(); ?>
