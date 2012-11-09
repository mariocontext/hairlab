<div id="comments">
	<!-- Prevents loading the file directly -->
	<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) : ?>
	    <?php die('Please do not load this page directly or we will hunt you down. Thanks and have a great day!'); ?>
	<?php endif; ?>
	
	<!-- Password Required -->
	<?php if(!empty($post->post_password)) : ?>
	    <?php if($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
	    <?php endif; ?>
	<?php endif; ?>
	
	
	<?php if($comments) : ?>
		<h3><?php comments_number('No comments', 'One comment', '% comments'); ?></h3>
	    <ol>
	    <?php foreach($comments as $comment) : ?>
      <?php $i++; ?> <!-- variable for alternating comment styles -->
	    	<?php $comment_type = get_comment_type(); ?> <!-- checks for comment type -->
	    	<?php if($comment_type == 'comment') { ?> <!-- outputs only comments -->
        
		        <li id="comment-<?php comment_ID(); ?>" class="comment <?php if($i&1) { echo 'odd';} else {echo 'even';} ?> <?php $user_info = get_userdata(1); if ($user_info->ID == $comment->user_id) echo 'authorComment'; ?> <?php if ($comment->user_id > 0) echo 'user-comment'; ?>">
		            <?php if ($comment->comment_approved == '0') : ?> <!-- if comment is awaiting approval -->
		                <p class="waiting-for-approval">
		                	<em>Your comment is awaiting approval.</em>
		                </p>
		            <?php endif; ?>
		            <div class="comment-text">
			            <?php comment_text(); ?>
		            </div><!--.commentText-->
		            <div class="comment-meta">
		            	<?php edit_comment_link('Edit Comment', '', ''); ?>
		            	<?php comment_type(); ?> by <?php comment_author_link(); ?>
                  <div class="comment-date"><?php comment_date(); ?> at <?php comment_time(); ?></div>
		            	<p class="gravatar"><?php if(function_exists('get_avatar')) { echo get_avatar($comment, '50'); } ?></p>
		            </div><!--.commentMeta-->
		        </li>
			<?php } else { $trackback = true; } ?>
	    <?php endforeach; ?>
	    </ol>
	    <?php if ($trackback == true) { ?><!-- checks for comment type: trackback -->
	    <h3>Trackbacks</h3>
		    <ol>
		    	<!-- outputs trackbacks -->
			    <?php foreach ($comments as $comment) : ?>
				    <?php $comment_type = get_comment_type(); ?>
				    <?php if($comment_type != 'comment') { ?>
					    <li><?php comment_author_link() ?></li>
				    <?php } ?>
			    <?php endforeach; ?>
		    </ol>
	    <?php } ?>
	<?php else : ?>
	    <p>No comments yet. You should be kind and add one!</p>
	<?php endif; ?>
	
	<div id="comments-form">
		<?php if(comments_open()) : ?>
    	<h3>Leave a Comment</h3>
		    <?php if(get_option('comment_registration') && !$user_ID) : ?>
		        <p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p><?php else : ?>
		        <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
		            <?php if($user_ID) : ?>
		                <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>
		            <?php else : ?>
		                <p class="field">
                      <label for="author">Name <small><?php if($req) echo "(required)"; ?></small></label>
                      <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
		                </p>
		                <p class="field">
		                	<label for="email">Mail <small>(will not be published) <?php if($req) echo "(required)"; ?></small></label>
		                	<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
		                </p>
		                <p class="field">
		                	<label for="url">Website</label>
		                	<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
		                </p>
		            <?php endif; ?>
		            <p>
		            	<label for="comment">Comment</label>
		            	<textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea>
		            </p>
		            <p>
		            	<input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
		            	<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
		            </p>
		            <?php do_action('comment_form', $post->ID); ?>
		        </form>
		    <?php endif; ?>
		<?php else : ?>
		    <p>The comments are closed.</p>
		<?php endif; ?>
	</div><!--#commentsForm-->
</div><!--#comments-->