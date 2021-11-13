<?php /* Template Name: Practice Area */ ?>

<?php get_header(); ?>

<main class="mt-5">
	<div class="container">
	  <div class="row">

	    <div class="col-sm">
	      <div id="content" role="main">

	        <?php get_template_part('loops/page-content'); ?>

	      </div><!-- /#content -->
	    </div>

			<div class="sidebar col-lg-4 d-none d-lg-block" id="sidebar" role="navigation">
			  <h3>Practice Areas</h3>
				<ul>
				    <?php
				    wp_list_pages( array(
				        'title_li'    => '',
				        'child_of'    => 76,
				    ) );
				    ?>
				</ul>
			</div>

	  </div><!-- /.row -->
  </div>
</main><!-- /.container -->

<?php get_footer(); ?>
