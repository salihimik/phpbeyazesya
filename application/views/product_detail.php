<div id="container">
<div id="site_title"><a href="<?php echo base_url()?>home"><img src="<?php echo base_url()?>img/logo.png" alt=""></a></div>
	
<h2>ÜRÜN DETAYI</h2>  
	<div class="one-half">
    <div class="heading_bg">
      <h3>Ürün Görseli</h3>
	  <?php
			
			foreach ($veri as $rs)
			{   
			?>	
	<p> <a title="Caption Text" href="<?=base_url()?>uploads/<?=$rs->p_image?>" class="portfolio-item-preview" data-rel="prettyPhoto"><img src="<?php echo base_url()?>uploads/<?=$rs->p_image?>" alt="" width="100%" height="100%" class="portfolio-img pretty-box"></a> </p>
    </div>   

  </div>
  <div class="one-half last">
    <div class="heading_bg">
      <h3>Ürün Detayı</h3>
<table border="0">
      <th colspan="3"><font color="red">Ürün Bilgileri</font></th>             
<tr>
        <td width="29%"><b>Ürün Fiyatı</b></td>
	<td width="1%"><b>:</b></td>
        <td width="70%"><?=$rs->p_price?></td>        
      </tr>      
<tr>
        <td><b>Ürün Marka</b></td>
	<td width="1%"><b>:</b></td>
        <td><?=$rs->p_brand?></td>        
      </tr>
<tr>
        <td><b>Ürün Model</b></td>
	<td width="1%"><b>:</b></td>    
    	<td><?=$rs->p_model?></td>        
      </tr>
<tr>
        <td><b>Ürün Türü</b></td>
	<td width="1%"><b>:</b></td>    
    	<td><?=$rs->p_type?></td>        
      </tr>
<tr>
        <td><b>Üretim Tarihi</b></td>
	<td width="1%"><b>:</b></td>    
    	<td><?=$rs->p_date_produc?></td>        
      </tr>
<tr>
        <td><b>Ürün Bilgisi</b></td>
	<td width="1%"><b>:</b></td>    
    	<td><?=$rs->p_detail_exp?></td>        
      </tr>
<tr>
        <td><b>Detay Bilgisi</b></td> 
	<td width="1%"><b>:</b></td>    
    	<td><?=$rs->p_date?></td>        
      </tr>  

    </table><?php } ?>	
    </div>
    

  </div>



  
  
  <div style="clear:both; height: 40px"></div>
</div>