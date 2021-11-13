<?php
/*
The Single Post
===============
*/
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
    <header class="mb-4">
      <h1 class="entry-title">
        <?php the_title()?>
      </h1>
    </header>
    <main>
      <?php
        the_post_thumbnail();
        the_content();
        wp_link_pages();
      ?>
    </main>
  </article>
<?php
  endwhile; else :
    get_template_part('loops/404');
  endif;
?>
