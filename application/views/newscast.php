<div id="container">
 <div id="site_title"><a href="<?php echo base_url()?>home"><img src="<?php echo base_url()?>img/logo.png" alt=""></a></div>
  <h1>HABERLER</h1>
  <h4 style="color:blue">Bu sayfada firmamizla ilgili son habberleri buradan takip edebilirsiniz.</h4>
  <ul>
  <?php
			$i=0;
			foreach ($newscast as $rs)
			{   $i++;
			?>	
			<li>
  
  <h3 style="color:red"><?=$rs->nc_title?></h3>
  <p><?=$rs->nc_detail?><?=$rs->nc_date?></p>
  </li>
  <?php } ?></ul>
  <div style="clear:both; height: 40px"></div>
</div>