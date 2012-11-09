<?php
/*
 * Template Name: Page Sidebar Right
 */

get_header(); ?>

<div id="content" class="grid_12 fleft">
  <div class="inside">
  	<div class="indent-right">
      <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts('posts_per_page=6&paged='. $paged ); ?>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
          <div class="post-meta">
          	<div class="fleft">Written on <?php the_time('F j, Y'); ?> at <?php the_time() ?>, by <?php the_author_posts_link() ?></div>
            <div class="fright"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></div>
          </div><!--.postMeta-->
          <div class="wrapper">
          	<?php echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; ?> <!-- loades the post's featured thumbnail, requires Wordpress 3.0+ -->
            <div class="post-content">
              <div class="excerpt"><?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,40);?></div>
              <a href="<?php the_permalink() ?>" class="button-alt">Read more</a>
            </div>
          </div>
        </article>
      <?php endwhile; ?>
      <nav class="oldernewer">
        <div class="older">
           <?php next_posts_link('&laquo; Older Entries') ?>
        </div><!--.older-->
        <div class="newer">
           <?php previous_posts_link('Newer Entries &raquo;') ?>
        </div><!--.older-->
      </nav>
    </div>
  </div><!--.indent-->
</div><!--#content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
