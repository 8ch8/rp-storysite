<?php

$work_text = get_sub_field ('work_text');
$link= get_sub_field ('work_link');
$rp02_image = get_sub_field ('rp02_image');

?>

<section class="our-work">
  <div class="container work-container">
    <div class="text-col">
      <div class="work-text">
        <?php if ($work_text):?>
          <?php echo ($work_text);?>
        <?php endif;?>
      </div>

      <div class="work-link">
        <?php if($link):?>
          <?php 
            $link_url = $link["url"];
            $link_title = $link["title"];
          ?>
          <a href="<?php echo $link_url ?>" class="work-btn">
          <?php echo $link_title;?>
          </a>
        <?php endif;?>
      </div> 
    </div>
     
    <div class="image-col">
      <div class="rp02-image">
        <?php if ($rp02_image):?>
          <img src="<?php echo $rp02_image;?>" class="logo" alt="<?php echo $alt;?>">
        <?php endif;?>
      </div>
    </div>
  </div>
</section>