<?php

$hero_text = get_sub_field ('hero_text');
$link = get_sub_field ('cta');
$logo = get_sub_field ('logo');
$b2b_text = get_sub_field ('b2b_text');
$secondary_color= get_sub_field ('secondary_color');

?>

<section class="home-banner">
  <div class="container home-container">
    <div class="left-col">
      <div class="hero-text ">
        <?php if ($hero_text):?>
          <?php echo ($hero_text);?> 
        <?php endif;?>
      </div>

      <div class="call-to-action">
        <?php if($link):?>
          <?php 
            $link_url = $link["url"];
            $link_title = $link["title"];
            $primary_color = get_sub_field ('primary_color');
          ?>
          <a href="<?php echo $link_url ?>" class="story-btn" style="background-color: <?php echo $primary_color ?>">
          <?php echo $link_title;?>
          </a>
        <?php endif;?>
      </div>
    </div>

    <div class="right-col">
      <div class="b2b-text">
        <?php if ($b2b_text):?>
          <?php echo ($b2b_text);?>
        <?php endif;?>
      </div>
    </div>
  </div>

  <div class="logo-holder">
    <div class="row">
      <div class="column">
        <?php if($logo):?>
          <img src="<?php echo $logo;?>" class="logo" alt="<?php echo $alt;?>">
        <?php endif;?>
      </div>
    </div>
  </div>
</section>