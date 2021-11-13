<?php get_header(); ?>

<main>
	<div class="container">
	  <div class="row">

	    <div class="col-sm">
	      <div id="content" role="main">

	        <?php get_template_part('loops/single-post', get_post_format()); ?>

	      </div><!-- /#content -->
	    </div>

	    <?php get_sidebar(); ?>

	  </div><!-- /.row -->
  </div>
</main><!-- /.container -->

<?php get_footer(); ?>

