<?php

$background1 = get_sub_field ('background1');
$story_title = get_sub_field ('story_title');
$story_text1 = get_sub_field ('story_text1');
$story_text2 = get_sub_field ('story_text2');
$key_title = get_sub_field ('key_title');
$value_title1 = get_sub_field ('value_title1');
$value_text1 = get_sub_field ('value_text1');
$value_title2 = get_sub_field ('value_title2');
$value_text2 = get_sub_field ('value_text2');
$link = get_sub_field ('read_more');
$tertiary_color = get_sub_field ('tertiary_color');
$primary_color = get_sub_field ('primary_color');

?>

<section style="background-image:url('<?php echo $background1 ?>')"class="case-story">
  <div class="container story-container">
    <div class="story-box">
    
      <div class="top-box">
        <div class="story-title">
          <?php if($story_title):?>
            <?php echo $story_title;?>
          <?php endif;?>
        </div>

        <div class="story-text1">
          <?php if($story_text1):?>
            <?php echo $story_text1;?>
          <?php endif;?>
        </div>

        <div class="story-text2">
          <?php if($story_text2):?>
            <?php echo $story_text2;?>
          <?php endif;?>
        </div>
      </div>

      <div class="key-box">
        <div class="key-title">
          <?php if($key_title):?>
            <?php echo $key_title;?>
          <?php endif;?>
        </div>
        
        <div class="value1">
          <div class="value-title1">
            <?php if($value_title1):?>
              <?php echo $value_title1;?>
            <?php endif;?>
          </div>
          
          <div class="value-text1">
            <?php if($value_text1):?>
              <?php echo $value_text1;?>
            <?php endif;?>
          </div>
        </div>
        <div class="value2">
          <div class="value-title2">
            <?php if($value_title2):?>
              <?php echo $value_title2;?>
            <?php endif;?>
          </div>
          
          <div class="value-text2">
            <?php if($value_text2):?>
              <?php echo $value_text2;?>
            <?php endif;?>
          </div>
        </div>
      </div>

      <div class="bottom-box">
        <?php if($link):?>
          <?php 
            $link_url = $link["url"];
            $link_title = $link["title"];
            $primary_color = get_sub_field ('primary_color');
          ?>
          <a href="<?php echo $link_url ?>" class="read-more" style="background-color: <?php echo $primary_color ?>">
          <?php echo $link_title;?>
          </a>
        <?php endif;?>
      </div>
    </div>
  </div>
</section>
          

          