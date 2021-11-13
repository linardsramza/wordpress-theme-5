<?php
/*
The Index Post (or excerpt)
===========================
Used by index.php, category.php and author.php
*/
?>

<article role="article" id="post_<?php the_ID()?>" <?php post_class("mb-3 d-flex flex-column flex-md-row"); ?> >
  <a class="blog-post-image" href="<?php the_permalink(); ?>" <?php if(has_post_thumbnail()){ ?>style="background-image: url('<?php the_post_thumbnail_url('thumbnail'); ?>');"<?php } ?>></a>
  <div class="blog-post-summary">
    <h2><strong><?php the_title()?></strong></h2>
    <p><?php the_excerpt(); ?></p>
  </div>
</article>