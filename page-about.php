<?php
/*
 * Template Name: About us
 */

get_header(); ?>

<div id="full-width">
	<div id="content">
		<div class="wrapper">
    	<div class="grid_16">
				<div class="inside">
        	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <article>
              <h1><?php the_title(); ?></h1>
              <?php echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; ?> <!-- loades the post's featured thumbnail, requires Wordpress 3.0+ -->
        
              <div id="page-content">
                <?php the_content(); ?>
              </div><!--#pageContent -->
            </article>
          <?php endwhile; ?>
          <div class="wrapper">
            <div class="grid_5 alpha">
              <?php if ( ! dynamic_sidebar( 'Offers' ) ) : ?>
                <!-- Wigitized Header -->
              <?php endif ?>
            </div>
            <div class="grid_11 omega">
              <?php if ( ! dynamic_sidebar( 'Testimonials' ) ) : ?>
                <!-- Wigitized Header -->
              <?php endif ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!--#content-->
</div>
<?php get_footer(); ?>
