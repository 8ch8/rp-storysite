<?php

$background2 = get_sub_field ('background2');
$crowdcube_title = get_sub_field ('crowdcube_title');
$crowdcube_text1 = get_sub_field ('crowdcube_text1');
$crowdcube_text2 = get_sub_field ('crowdcube_text2');
$result_title = get_sub_field ('result_title');
$value2_title1 = get_sub_field ('value2_title1');
$value2_text1 = get_sub_field ('value2_text1');
$value2_title2 = get_sub_field ('value2_title2');
$value2_text2 = get_sub_field ('value2_text2');
$link = get_sub_field ('read_more2');
$quaternary_color = get_sub_field ('quaternary_color');
$primary_color = get_sub_field ('primary_color');

?>

<section style="background-image:url('<?php echo $background2 ?>')"class="crowd-cube">
  <div class="container crowdcube-container">
    <div class="crowd-box">
    
      <div class="top-box2">
        <div class="crowdcube-title">
          <?php if($crowdcube_title):?>
            <?php echo $crowdcube_title;?>
          <?php endif;?>
        </div>

        <div class="crowdcube-text1">
          <?php if($crowdcube_text1):?>
            <?php echo $crowdcube_text1;?>
          <?php endif;?>
        </div>

        <div class="crowdcube-text2">
          <?php if($crowdcube_text2):?>
            <?php echo $crowdcube_text2;?>
          <?php endif;?>
        </div>
      </div>

      <div class="result-box">
        <div class="result-title">
          <?php if($result_title):?>
            <?php echo $result_title;?>
          <?php endif;?>
        </div>
        
        <div class="value3">
          <div class="value2-title1">
            <?php if($value2_title1):?>
              <?php echo $value2_title1;?>
            <?php endif;?>
          </div>
          
          <div class="value2-text1">
            <?php if($value2_text1):?>
              <?php echo $value2_text1;?>
            <?php endif;?>
          </div>
        </div>
        <div class="value4">
          <div class="value2-title2">
            <?php if($value2_title2):?>
              <?php echo $value2_title2;?>
            <?php endif;?>
          </div>
          
          <div class="value2-text2">
            <?php if($value2_text2):?>
              <?php echo $value2_text2;?>
            <?php endif;?>
          </div>
        </div>
      </div>

      <div class="bottom-box2">
        <?php if($link):?>
          <?php 
            $link_url = $link["url"];
            $link_title = $link["title"];
            $primary_color = get_sub_field ('primary_color');
          ?>
          <a href="<?php echo $link_url ?>" class="read-more2" style="background-color: <?php echo $primary_color ?>">
          <?php echo $link_title;?>
          </a>
        <?php endif;?>
      </div>
    </div>
  </div>
</section>