<div id="container">
  <div id="site_title"><a href="<?php echo base_url()?>index.php/home"><img src="<?php echo base_url()?>index.php/img/logo.png" alt=""></a></div>
  <div style="margin-bottom: 15px"> <img  src="<?php echo base_url()?>index.php/img/is.jpg" alt="" width="960" height="450"> </div>
  <div style="clear:both"></div>
  <h1 style="padding: 20px 0">Profesyonel Cozumler</h1>
  <!-- First Column -->
  <div class="one-third">
    <div class="heading_bg">
      <h2>Biz</h2>
    </div>
	<?php		
			foreach ($veri as $rs)
			{   
			?>	
    <p><strong>Misyonumuz</strong><br>
      <?=$rs->com_mission?><br><br>
      <strong>Vizyonumuz</strong><br>
       <?=$rs->com_vision?> </p>
       
  </div>
  <!-- Second Column -->
  <div class="one-third">
    <div class="heading_bg">
      <h2>Isimiz</h2>
    </div>
    <ul class="container_links">
      <li><a href="<?php echo base_url()?>home/products_washer">Çamaşır Makinesi</a></li>
      <li><a href="<?php echo base_url()?>home/products_dishwasher">Bulaşık Makinesi</a></li>
      <li><a href="<?php echo base_url()?>home/products_fridge">Buzdolabı</a></li>
      <li><a href="<?php echo base_url()?>home/product_bakery">Fırın</a></li>          
    </ul>
  </div>
  <!-- Third Column -->
  <div class="one-third last">
    <div class="heading_bg">
      <h2>Sembol Sözümüz</h2>
    </div>
    <blockquote>  <?=$rs->com_symbol?></blockquote>
    <p><small>Salih İMİK</small></p><?php } ?>
  </div>
  <div style="clear:both; height: 40px"></div>
</div>