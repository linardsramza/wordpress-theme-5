<?php get_header(); ?>

<?php get_template_part('includes/hero-section'); ?>
<?php get_template_part('includes/ctas-section'); ?>

<main>
	<div class="container">
	  <div class="row no-gutters">
	    <div class="col-12 col-lg-6 my-auto order-2 order-md-1 text-center" data-aos="fade-right">
	    	<img src="<?php bloginfo('template_url'); ?>/assets/images/team/attorneys.jpg" alt="attorneys" title="Attorneys Martin Schiowitz & Jeremy Schiowitz" class="main-img">
	    </div>
	    <div class="col-12 col-lg-6 my-auto order-1 order-md-2" data-aos="fade-left">
	    	<div class="front-page-main-content">
				<?php if(have_posts()): while(have_posts()): the_post(); ?>
				  <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
				    <header class="mb-3">
				      <h1 class="entry-title">
				      <?php
				        if(otm_get_meta( '_page_headings', 'heading_1' )) {
				            echo otm_get_meta( '_page_headings', 'heading_1' );        
				        } else {
				          the_title();
				        }
				      ?>
				      </h1>
				    </header>    
				    <div class="editor-content">
				      <?php the_content()?>
				      <div class="text-center">
				      	<a class="btn btn-lg btn-outline-dark" href="<?php the_permalink(142); ?>" title="Learn More">Learn More</a>
				      </div>
				    </div>
				  </article>
				<?php
				  endwhile;
				  else :
				    get_template_part('404');
				  endif;
				?>
	    	</div>
	    </div>
	  </div><!-- /.row -->
	</div>
</main><!-- /.container -->

<?php get_template_part('includes/our-practice'); ?>
<?php get_template_part('includes/about'); ?>
<?php get_template_part('includes/our-team'); ?>
<?php get_template_part('includes/verdicts-and-settlements'); ?>

<div class="blog-testimonials">
	<?php get_template_part('includes/latest-blog-posts'); ?>
	<?php get_template_part('includes/client-testimonials'); ?>
</div>

<?php get_footer(); ?>
