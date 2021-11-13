<?php /* Template Name: FAQs */ ?>

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
								<div class="accordion" id="faq-accordion">
									<?php
										$faqs = otm_get_meta( _faq_page_options, faqs );
										$i = 1;
									?>
									<?php foreach($faqs as $faq): ?>
									  <div class="card">
									    <div class="card-header" id="question-<?php echo $i; ?>">
									      <h2 class="mb-0">
									        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#answer-<?php echo $i; ?>" aria-expanded="false" aria-controls="answer-<?php echo $i; ?>">
									          <?php echo $faq['question'] ?>
									        </button>
									      </h2>
									    </div>
									    <div id="answer-<?php echo $i; ?>" class="collapse" aria-labelledby="question-<?php echo $i; ?>" data-parent="#faq-accordion">
									      <div class="card-body">
									        <?php echo $faq['answer'] ?>
									      </div>
									    </div>
									  </div>
									  <?php $i = $i + 1; ?>
									<?php endforeach; ?>
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
