<?php
/**!
 * The Page Content Loop
 */
?>

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
      <?php wp_link_pages(); ?>
    </div>
  </article>
<?php
  endwhile;
  else :
    get_template_part('404');
  endif;
?>
