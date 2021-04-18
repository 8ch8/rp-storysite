<?php
$post_id = get_sub_field ('post_object');
$post_title = get_field ('post_title', $post_id);
$post_type = get_field ('post_type', $post_id);
$client = get_field ('client', $post_id);
$post_color = get_field ('post_color', $post_id);
$post_image = get_field ('post_image', $post_id);
$post_text = get_field ('post_text', $post_id);

$link = get_field ('read_more', $post_id);
$key_title = get_field ('key_title', $post_id);
?>

<section style="background-image:url('<?php echo $post_image ?>')"class="case-story">
  <div class="container story-container">
    <div class="story-box">
    
      <div class="top-box">
        <div class="story-title">
            <?php echo $post_type;?> | <?php echo $client;?>
        </div>
          
        <div class="story-text1">
            <?php echo $post_title;?>
        </div>

        <div class="story-text2">
            <?php echo $post_text;?>
        </div>

        <div class="key-box">
          <div class="key-title">
              <?php echo $key_title ?>
          </div>
          
          <?php if( have_rows('key_results', $post_id)):?>
            <?php while( have_rows('key_results', $post_id)): the_row();?>
              <?php
                $value = get_sub_field('value');
                $description = get_sub_field('description');
              ?>
              <div class="result-wrapper">
                <div class="value <?php echo $post_color;?>">
                  <?php echo $value;?>
                </div>
                <div class="description">
                  <?php echo $description;?>
                </div>
              </div>
            <?php endwhile;?>
          <?php endif;?>
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