<?php /* Template Name: Achievements */ ?>

<?php get_header(); ?>

<main>
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
					      <div class="settlement-list">
									<?php
										$achievements = otm_get_meta( _achievements_page_options, achievements );
									?>
									<?php foreach($achievements as $achievement): ?>
										<div class="settlement-wrapper d-flex align-items-center flex-column flex-lg-row mb-3">
											<div class="settlement-data" data-aos="fade-right">
												<div class="settlement-money-won"><span><?php echo $achievement[settlement]; ?> </span><?php echo $achievement[settlement_postfix]; ?></div>
												<p class="settlement-for">Settlement For</p>
												<p class="settlement-category"><?php echo $achievement[settlement_category]; ?></p>
											</div>
											<p class="settlement-description" data-aos="fade-left"><?php echo $achievement[settlement_description]; ?></p>
										</div>
									<?php endforeach; ?>
					      </div>
					      <p>Please note that these verdicts and settlements are presented merely as an illustration of our past successes on behalf of our clients. We cannot guarantee specific results on any case due to the fact that each case is unique.</p>
					    </div>
					  </article>
					<?php
					  endwhile;
					  else :
					    get_template_part('404');
					  endif;
					?>

	      </div><!-- /#content -->
	    </div>

	  </div><!-- /.row -->
  </div>
</main><!-- /.container -->

<?php get_footer(); ?>
