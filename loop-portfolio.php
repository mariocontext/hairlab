<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 */
?>


<?php if ( ! have_posts() ) : ?>
	<div id="post-0" class="post error404 not-found">
		<h1 class="entry-title"><?php _e( 'Not Found', 'theme1164' ); ?></h1>
		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'theme1164' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->
<?php endif; ?>
<div id="gallery">
  <ul class="portfolio">
    <?php 
      $i=1;
      if ( have_posts() ) while ( have_posts() ) : the_post(); 
      if(($i%3) == 0){ $addclass = "nomargin";	}	
    ?>
    
    
    <?php
      $custom = get_post_custom($post->ID);
      $cf_thumb = $custom["thumb"][0];
      $cf_lightbox = $custom["lightbox"][0];
      
      if($cf_thumb!=""){
        $cf_thumb = "<img src='" . $cf_thumb . "' alt=''  width='290' height='150' />";
      }
    ?>
    
      <li class="<?php echo $addclass; ?>">
				<?php if($cf_lightbox!=""){ ?>
        <a class="image-wrap" href="<?php echo $cf_lightbox;?>" rel="prettyPhoto[mixed]" title="<?php the_title();?>"><?php if($cf_thumb!=""){ echo $cf_thumb; }else{ the_post_thumbnail( 'portfolio-post-thumbnail' );} ?></a>
      <?php }else{ ?>
        <a class="image-wrap" href="<?php the_permalink() ?>" title="<?php _e('Permanent Link to', 'theme1164');?> <?php the_title_attribute(); ?>" ><?php if($cf_thumb!=""){ echo $cf_thumb; }else{ the_post_thumbnail( 'portfolio-post-thumbnail' );} ?></a>
        <?php } ?>
        <div class="folio-desc">
          <h4><a href="<?php the_permalink(); ?>"><?php $title = the_title('','',FALSE); echo substr($title, 0, 40); ?></a></h4>
          <p class="excerpt"><?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,10);?></p>
          <a href="<?php the_permalink(); ?>" class="button-alt">Read more</a>
        </div>
      </li>
    
  
    <?php $i++; $addclass = ""; endwhile; ?>
  </ul>
  <div class="clear"></div>
</div>

<?php if (  $wp_query->max_num_pages > 1 ) : ?>

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
</nav>
<?php endif; ?>
