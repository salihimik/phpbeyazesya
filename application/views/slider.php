<div id="container">
  <div id="slider3" class="nivoSlider">
  <?php
			$i=0;
			foreach ($slider as $rs)
			{   $i++;
			?>		
  <a href="<?php echo base_url();?>index.php/home/product_detail/<?=$rs->p_id?>"> <img title="SLH BEYAZ EŞYA" src="<?php echo base_url();?>uploads/<?=$rs->p_image?>" width="960" height="450"  alt=""></a> <?php } ?>
   </div>
   
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <div id="site_title"><a href="<?php echo base_url();?>index.php/home"><img src="img/logo.png" alt=""></a></div>
