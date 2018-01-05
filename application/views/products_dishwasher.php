  <link rel="stylesheet" href="<?php echo base_url()?>dist/css/lightbox.min.css">
  <script src="<?php echo base_url()?>dist/js/lightbox-plus-jquery.min.js"></script>
 <div id="container">
 <div id="site_title"><a href="<?php echo base_url()?>home"><img src="<?php echo base_url()?>img/logo.png" alt=""></a></div>
 <div id="portfolio">
  
  <div class="portfolio-container" id="columns">
      <ul>
    <?php
      $i=0;
      foreach ($veri as $rs)
      {   $i++;
    ?>    
        <li class="one-fourth web"><a class="example-image-link" class="portfolio-item-preview" href="<?=base_url()?>uploads/<?=$rs->p_image?>" data-lightbox="example-set" data-title="Bir sonraki resim icin ileri tikla."><img class="example-image"
    src="<?php echo base_url();?>uploads/<?=$rs->p_image?>" alt=""  width="210" height="145"/></a>
    <h4><?=$rs->p_brand?>-<a href="<?php echo base_url();?>home/product_detail/<?=$rs->p_id?>">Detay</a></h4>
          
      </li>
   <?php } ?>
  </ul>
  </div></div>
   <div style="clear:both; height: 40px"></div>
</div>