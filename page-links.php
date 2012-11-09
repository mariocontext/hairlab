<?php
/*
 * Template Name: Page Links
 */

get_header(); ?>

<div id="full-width">
	<div id="content">
    <div class="wrapper">
      <div class="grid_5">
        <?php if ( ! dynamic_sidebar( 'Services' ) ) : ?>
          <!-- Wigitized Header -->
        <?php endif ?>
      </div>
      <div class="grid_11 omega">
        <div class="indent">
        	<div class="inside">
          	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
              <div id="page-content">
                <?php the_content(); ?>
              </div><!--#pageContent -->
            <?php endwhile; ?>
            <div class="line-hor"></div>
            <?php if ( ! dynamic_sidebar( 'Latest News' ) ) : ?>
              <!-- Wigitized Header -->
            <?php endif ?>
          </div>
        </div>
      </div>
    </div>
  </div><!--#content-->
</div>
<?php get_footer(); ?>
