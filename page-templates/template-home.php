<?php

/* Template Name: Home */

get_header();?>

     <?php if( have_rows('flexible_template') ):?>

          <?php while( have_rows('flexible_template') ): the_row();?>

               <?php get_template_part( 'flexible-templates/' . get_row_layout() );?>

          <?php endwhile;?>

     <?php endif;?>

<?php get_footer();?>
