<?php
$section_title = get_sub_field ('section_title');
?>

<section class="our-awards">
  <div class="container awards-container">

      <div class="section-title">
        <?php if($section_title):?>
          <?php echo $section_title ?>
        <?php endif;?>
      </div> 

      <?php if( have_rows('our_awards') ):?>
        <?php while( have_rows('our_awards') ): the_row();?>
          <?php
            
            $finalist_title = get_sub_field ('finalist_title');
            $finalist_text = get_sub_field ('finalist_text');
            $awards_type = get_sub_field ('awards_type');
          ?>

          
            <div class="finalist">

              <div class="awards-type">
                  <?php if($awards_type):?>
                    <?php echo $awards_type ?>
                  <?php endif;?>
              </div>
              
              <div class="finalist-title">
                <?php if($finalist_title):?>
                  <?php echo $finalist_title ?>
                <?php endif;?>
              </div>

              <div class="finalist-text">
                <?php if($finalist_text):?>
                  <?php echo $finalist_text ?>
                <?php endif;?>
              </div>

            </div>
          
        <?php endwhile;?>
      <?php endif;?>
  </div>
</section>