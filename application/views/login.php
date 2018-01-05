<div id="container">
  <div id="site_title"><a href="<?php echo base_url()?>home"><img src="<?php echo base_url()?>img/logo.png" alt=""></a></div>
  <div class="one-half last">
    <div class="heading_bg">
      <h2>Üye Giriş</h2>
    </div>
    <form action="<?php echo base_url(); ?>home/login" class="TTWForm" method="post">
      <div id="field2-container" class="field f_10">
        <label for="field2">Email</label>
        <input name="email" id="field2" type="email">
      </div>
      <div id="field5-container" class="field f_10">
        <label for="field5">Şifre</label>
        <input name="sifre" id="field5" type="password">
      </div>      
      <div id="form-submit" class="field f_100 clearfix submit">
        <input value="Giriş" type="submit">
      </div>
      
    </form>
  </div>
  <div style="clear:both; height: 40px"></div>
</div>