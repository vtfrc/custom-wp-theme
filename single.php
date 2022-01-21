<?php get_header(); ?>

<div class="container">

  <?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?>

    <!-- loop content -->

    <article>

      <h1 class="animate__animated animate__fadeInUp"><?php the_title(); ?></h1>

      <p><?php the_time('j M , Y') ?></p>

      <div class="post-img">

      <?php the_post_thumbnail('large', array('class' => 'img-res mb2','alt' => get_the_title())); ?>

      </div>

      <?php the_content(esc_html__('Read More...', 'slug-theme'));?>

	  <div class="single-newsletter">

		  	<h3 class="title-single-nl">
				Sign up to my mailing list to get insights and news about my content, offers and resources.
		    </h3>
		  
		  	<?php echo do_shortcode('[mc4wp_form id="463"]'); ?>
		    
	  </div>
		
      <div class="related-posts">
		  
	  <h3 class="title-related-posts"> Related posts </h3>
		
	  <?php

      $args = array(
        'post_type' => 'post',
        'category__in' => wp_get_post_categories(get_the_ID()),
        'post__not_in' => array(get_the_ID()),
        'posts_per_page' => 3,
        'orderby' => 'date'
      );


      // La Query
      $related_query = new WP_Query( $args );

      // Il Loop
      while ( $related_query->have_posts() ) :
        $related_query->the_post(); ?>

          <div class="related-post">
            <a href="<?php the_permalink()?>">
              <p class="related-title">  <?php the_title(); ?></p>
            </a>
          </div>

      <?php endwhile;

      // Ripristina Query & Post Data originali
      wp_reset_query();
      wp_reset_postdata();
		  
	  ?>

	  </div>
		
      <div class="comments">
				<?php comments_template();?>
			</div>

    </article>

  <?php endwhile; ?>

  <?php else : ?>
    <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'slug-theme'); ?></p>
  <?php endif; ?>

</div>

<?php get_footer(); ?>
