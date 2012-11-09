<?php get_header(); ?>
<div id="content" class="left_content">
	<div class="inside">
    <div class="indent">
    	<h1>Search for: <?php the_search_query(); ?></h1>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
          <div class="post-meta">
          	<div class="fleft">Written on <?php the_time('F j, Y'); ?> at <?php the_time() ?>, by <?php the_author_posts_link() ?></div>
          </div><!--.postMeta-->
          <div class="wrapper">
          	<?php echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; ?> <!-- loades the post's featured thumbnail, requires Wordpress 3.0+ -->
            <div class="post-content">
              <div class="excerpt"><?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,40);?></div>
              <a href="<?php the_permalink() ?>" class="button-alt">Read more</a>
            </div>
          </div>
        </article>
    
      <?php endwhile; else: ?>
        <div class="no-results">
          <h2>No Results</h2>
          <p>Please feel free try again!</p>
          <?php get_search_form(); ?> <!-- outputs the default Wordpress search form-->
        </div><!--noResults-->
      <?php endif; ?>
    
      <nav class="oldernewer">
        <div class="older">
          <p>
            <?php next_posts_link('&laquo; Older Entries') ?>
          </p>
        </div><!--.older-->
        <div class="newer">
          <p>
            <?php previous_posts_link('Newer Entries &raquo;') ?>
          </p>
        </div><!--.older-->
      </nav><!--.oldernewer-->
    </div>
  </div>
</div><!-- #content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
