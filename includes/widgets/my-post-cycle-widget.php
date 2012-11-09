<?php
// =============================== My Post Cycle widget ======================================
class MY_CycleWidget extends WP_Widget {
    /** constructor */
    function MY_CycleWidget() {
        parent::WP_Widget(false, $name = 'My - Post Cycle');	
    }

    /** @see WP_Widget::widget */
    function widget($args, $instance) {		
        extract( $args );
        $title = apply_filters('widget_title', $instance['title']);
				$limit = apply_filters('widget_title', $instance['limit']);
				$category = apply_filters('widget_category', $instance['category']);
        ?>
              <?php echo $before_widget; ?>
                  <?php if ( $title )
                        echo $before_title . $title . $after_title; ?>
						
						<?php if($category=="testi"){?>
							<ul class="testimonials">
								
								<?php $limittext = $limit;?>
								<?php global $more;	$more = 0;?>
								<?php query_posts("post_type=" . $category);?>
								
								<?php while (have_posts()) : the_post(); ?>	
								
									<?php 
									$custom = get_post_custom($post->ID);
									$testiname = $custom["testimonial-name"][0];
									$testicompany = $custom["testimonial-company"][0];
									?>
								
								<li class="item">

								<?php if($limittext=="" || $limittext==0){ ?>
									<blockquote class="quote">
										<?php the_excerpt(); ?>
                  </blockquote>
									 <div class="test-name">
									 <span class="user"><?php echo $testiname; ?></span>,
									 <?php echo $testicompany; ?>
									 </div>
								<?php }else{ ?>
									<blockquote class="quote">
										<?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,$limittext);?>
                  </blockquote>
									 <div class="test-name">
									 <span class="user"><?php echo $testiname; ?></span>,
									 <?php echo $testicompany; ?></div>
								<?php } ?>
								</li>
								<?php endwhile; ?>
                <?php wp_reset_query(); ?>
							</ul>
							<!-- end of testimonials -->
            
            <?php } elseif($category=="exper"){?>
							
              <ul class="post_cycle_experience">
								
								<?php $limittext = $limit;?>
								<?php global $more;	$more = 0;?>
								<?php query_posts("posts_per_page=2&post_type=" . $category);?>
								<?php while (have_posts()) : the_post(); ?>	
								<li class="item">
									<?php if($limittext=="" || $limittext==0){ ?>
									<a href="<?php the_permalink(); ?>"><figure><?php the_post_thumbnail('post-small-thumbnail'); ?></figure></a>
                  <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
									<div class="excerpt"><?php the_excerpt(); ?></div>
									<?php }else{ ?>
									<a href="<?php the_permalink(); ?>"><figure><?php the_post_thumbnail('post-small-thumbnail'); ?></figure></a>
                  <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
									<div class="excerpt"><?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,$limittext); } ?></div>
								</li>
								<?php endwhile; ?>
                <?php wp_reset_query(); ?>
							</ul>
							<!-- end of boxslideshow -->
            
						<?php } else { ?>
						
							<ul class="post_cycle">
								
								<?php $limittext = $limit;?>
								<?php global $more;	$more = 0;?>
								<?php query_posts("posts_per_page=5&post_type=" . $category);?>
								<?php while (have_posts()) : the_post(); ?>	
								<li class="item">
									<?php if($limittext=="" || $limittext==0){ ?>
									<a href="<?php the_permalink(); ?>"><figure><?php the_post_thumbnail('post-small-thumbnail'); ?></figure></a>
                  <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
									<div class="excerpt"><?php the_excerpt(); ?></div>
                  <a href="<?php the_permalink(); ?>" class="button-alt">Read More</a>
									<?php }else{ ?>
									<a href="<?php the_permalink(); ?>"><figure><?php the_post_thumbnail('post-small-thumbnail'); ?></figure></a>
                  <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
									<div class="excerpt"><?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,$limittext); } ?></div>
                  <a href="<?php the_permalink(); ?>" class="button-alt">Read More</a>
								</li>
								<?php endwhile; ?>
                <?php wp_reset_query(); ?>
							</ul>
							<!-- end of boxslideshow -->
							<?php }?>
              <?php echo $after_widget; ?>
        <?php
    }

    /** @see WP_Widget::update */
    function update($new_instance, $old_instance) {				
        return $new_instance;
    }

    /** @see WP_Widget::form */
    function form($instance) {				
			$title = esc_attr($instance['title']);
			$limit = esc_attr($instance['limit']);
			$category = esc_attr($instance['category']);
    ?>
      <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'theme1164'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>

      <p><label for="<?php echo $this->get_field_id('limit'); ?>"><?php _e('Limit Text:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('limit'); ?>" name="<?php echo $this->get_field_name('limit'); ?>" type="text" value="<?php echo $limit; ?>" /></label></p>

      <p><label for="<?php echo $this->get_field_id('category'); ?>"><?php _e('Post Type:', 'theme1164'); ?><br />

      <select id="<?php echo $this->get_field_id('category'); ?>" name="<?php echo $this->get_field_name('category'); ?>" style="width:150px;" > 
      <option value="testi" <?php echo ($category === 'testi' ? ' selected="selected"' : ''); ?>>Testimonials</option>
      <option value="portfolio" <?php echo ($category === 'portfolio' ? ' selected="selected"' : ''); ?> >Portfolio</option>
      <option value="exper" <?php echo ($category === 'exper' ? ' selected="selected"' : ''); ?> >Experience</option>
      <option value="" <?php echo ($category === '' ? ' selected="selected"' : ''); ?>>Blog</option>
      </select>
      </label></p>
      <?php 
    }

} // class Cycle Widget


?>