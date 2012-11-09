<?php get_header(); ?>
<div id="content">
	<div class="indent">
  	<div class="inside">
    	<div class="wrapper">
        <div class="grid_16">
          <?php
            if(isset($_GET['author_name'])) :
              $curauth = get_userdatabylogin($author_name);
              else :
              $curauth = get_userdata(intval($author));
            endif;
          ?>
          <div class="author-info">
            <h1>About: <?php echo $curauth->display_name; ?></h1>
            <p class="avatar">
              <!-- Displays the Gravatar based on the author's email address. Visit Gravatar.com for info on Gravatars -->
              <?php if(function_exists('get_avatar')) { echo get_avatar( $curauth->user_email, $size = '80' ); } ?>
            </p>
            
            <!-- Displays the author's description from their Wordpress profile -->
            <?php if($curauth->description !="") { ?>
              <p><?php echo $curauth->description; ?></a></p>
            <?php } ?>
          </div><!--.author-->
        
          <div id="recent-author-posts">
            <h3>Recent Posts by <?php echo $curauth->display_name; ?></h3>
            <!-- Displays the most recent posts by that author -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <?php static $count = 0;
                if ($count == "5") // Number of posts to display
                        { break; }
                else { ?>
                  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h4><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
                    <div class="post-meta">
                      <div class="fleft">Written on <?php the_time('F j, Y'); ?> at <?php the_time() ?>, by <?php the_author_posts_link() ?></div>
                    </div><!--.postMeta-->
                    <div class="wrapper">
                      <div class="post-content">
                        <div class="excerpt"><?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,40);?></div>
                        <a href="<?php the_permalink() ?>" class="button-alt">Read more</a>
                      </div>
                    </div>
                  </article>
              <?php $count++; } ?>
            <?php endwhile; else: ?>
                <p>
                  No posts by <?php echo $curauth->display_name; ?> yet.
                </p>
            <?php endif; ?>
          </div><!--#recentPosts-->
        
          <div id="recent-author-comments">
            <h3>Recent Comments by <?php echo $curauth->display_name; ?></h3>
              <?php
                $number=5; // number of recent comments to display
                $comments = $wpdb->get_results("SELECT * FROM $wpdb->comments WHERE comment_approved = '1' and comment_author_email='$curauth->user_email' ORDER BY comment_date_gmt DESC LIMIT $number");
              ?>
              <ul>
                <?php
                  if ( $comments ) : foreach ( (array) $comments as $comment) :
                  echo  '<li class="recentcomments">' . sprintf(__('%1$s on %2$s'), get_comment_date(), '<a href="'. get_comment_link($comment->comment_ID) . '">' . get_the_title($comment->comment_post_ID) . '</a>') . '</li>';
                endforeach; else: ?>
                          <p>
                            No comments by <?php echo $curauth->display_name; ?> yet.
                          </p>
                <?php endif; ?>
                    </ul>
          </div><!--#recentAuthorComments-->
        </div>
      </div>
    </div>
    
  </div>
</div><!--#content-->
<?php get_footer(); ?>