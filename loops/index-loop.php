<?php
/**!
 * The Default Loop (used by index.php, category.php and author.php)
 * =================================================================
 * If you require only post excerpts to be shown in index and category pages, 
 * use the [---more---] line within blog posts.
 */
?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

  <?php get_template_part('loops/index-post', get_post_format()); ?>

  <?php endwhile;
  
  else :
    get_template_part('404');
  endif;
?>
