<?php get_header(); ?>

<main>
	<div class="container blog-container">
	  <div class="row">

	    <div class="col-sm bg-white py-5">
	      <div id="content" role="main">

	      	<h1 class="entry-title mb-5">Blog</h1>

	        <?php get_template_part('loops/index-loop'); ?>

				  <?php if ( function_exists('b4st_pagination') ) { b4st_pagination(); } else if ( is_paged() ) { ?>
				  <ul class="pagination">
				    <li class="page-item older">
				      <?php next_posts_link('<i class="fa fa-arrow-left"></i> ' . __('Previous', 'b4st')) ?></li>
				    <li class="page-item newer">
				      <?php previous_posts_link(__('Next', 'b4st') . ' <i class="fa fa-arrow-right"></i>') ?></li>
				  </ul>
				  <?php } ?>

	      </div><!-- /#content -->
	    </div>

	    <?php get_sidebar(); ?>

	  </div><!-- /.row -->
	</div>
</main><!-- /.container -->

<?php get_footer(); ?>
