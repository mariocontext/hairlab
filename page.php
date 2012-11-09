<?php get_header(); ?>

<div id="content" class="left_content">
	<div class="indent">
  	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
        <article>
          <!--<h1><?php // the_title(); ?></h1>-->
          <?php // edit_post_link('<small>Edit this entry</small>','',''); ?>
          <?php // echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; ?> <!-- loades the post's featured thumbnail, requires Wordpress 3.0+ -->
    
          <div id="page-content">
            <?php the_content(); ?>
            <div class="pagination">
              <?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
            </div><!--.pagination-->
          </div><!--#pageContent -->
        </article>
  
        <!--<div id="page-meta">
          <h3>Written by <?php the_author_posts_link() ?></h3>
          <div class="author-meta">
            <p class="gravatar"><?php if(function_exists('get_avatar')) { echo get_avatar( get_the_author_email(), '80' ); } ?></p>
          </div>
          <p>Posted on <?php the_time('F j, Y'); ?> at <?php the_time() ?></p>
        </div>--><!--#pageMeta-->
      </div><!--#post-# .post-->
  
      <?php // comments_template( '', true ); ?>
  
    <?php endwhile; ?>
  </div>
</div><!--#content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
