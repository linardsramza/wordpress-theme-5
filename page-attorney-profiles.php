<?php get_header(); ?>

<main class="mt-5">
	<div class="container">
	  <div class="row">

	    <div class="col-sm">
	      <div id="content" role="main">

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
								<div class="row our-team p-0">
									<div class="col-6 text-center mb-4 mb-lg-0" data-aos="fade-up">
										<a class="d-inline-block mb-4" href="<?php the_permalink(149); ?>" title="View Jeremys Profile">
											<img src="<?php bloginfo('template_url'); ?>/assets/images/team/jeremy-schiowitz.jpg" alt="jeremy-schiowitz">
										</a>
										<p class="mb-0">Jeremy Schiowitz</p>
										<a class="d-none d-sm-inline" href="mailto:jschiowitz@iskslaw.com" title="Send an email to jschiowitz@iskslaw.com">jschiowitz@iskslaw.com</a>
									</div>
									<div class="col-6 text-center mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
										<a class="d-inline-block mb-4" href="<?php the_permalink(156); ?>" title="View Martins Profile">
											<img src="<?php bloginfo('template_url'); ?>/assets/images/team/martin-schiowitz.jpg" alt="martin-schiowitz">
										</a>
										<p class="mb-0">Martin Schiowitz</p>
										<a class="d-none d-sm-inline" href="mailto:mschiowitz@iskslaw.com" title="Send an email to mschiowitz@iskslaw.com">mschiowitz@iskslaw.com</a>
									</div>
								</div>
					    </div>
					  </article>
					<?php
					  endwhile;
					  endif;
					?>

	      </div><!-- /#content -->
	    </div>

	  </div><!-- /.row -->
  </div>
</main><!-- /.container -->

<?php get_footer(); ?>
