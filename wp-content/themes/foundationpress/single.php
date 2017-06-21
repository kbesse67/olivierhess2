<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(projet); ?>

--><div class="themaindeux">
  <?php
  if ( has_post_thumbnail() ) {
    the_post_thumbnail();}
  ?>

</div>
<?php get_footer();
