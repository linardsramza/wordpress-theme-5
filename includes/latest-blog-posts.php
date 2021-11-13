<section class="latest-blog-posts">
	<div class="container">
		<h3 class="section-title-light" data-aos="fade-up"><span>Our Blog</span></h3>

		<div class="row">
		<?php
			$args = [
			 'post_type' => 'post',
			 'order' => 'DESC',
			 'posts_per_page' => '3',
			];

			$query = new WP_Query( $args );
			if($query->have_posts()):
			$i = 1;
			while($query->have_posts()): $query->the_post();
			$i++;
			?>

			<div class="col-12 col-md-4">
				<div class="blog-post-wrapper" data-aos="fade-up" data-aos-delay="<?php echo $i; ?>00">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<div class="blog-post-image"<?php if ( has_post_thumbnail() ) { ?> style="background-image: url('<?php echo the_post_thumbnail_url( 'medium' ); } ?>');">
						</div>
					</a>
					<div class="blog-post-details">
						<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
						<p><?php echo wp_trim_words( get_the_content(), 20 ); ?></p>
						<a class="btn btn-outline-dark" href="<?php the_permalink(); ?>" title="Read More of <?php the_title(); ?>">View</a>
					</div>
				</div>
			</div>
			
			<?php 
			endwhile; 
			wp_reset_query();
			?>
		<?php endif; ?>
		</div>
	</div>
</section>