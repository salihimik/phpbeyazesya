<div id="container">
  <div id="site_title"><a href="<?php echo base_url()?>home"><img src="<?php echo base_url()?>img/logo.png" alt=""></a></div>
  <h1>Bilgilerim</h1>
  <div class="one-half" style="float:left">
    <div class="heading_bg">
      <h2>Üye Bilgileri</h2>
    </div>    
        <form action="<?php echo base_url(); ?>home/user_update/<?php $session_data=$this->session->userdata('logged_inh');
echo $session_data['user_id'];?>" class="TTWForm" method="post">
      <div id="field1-container" class="field f_10">
        <label for="field1">Ad Soyad</label>
        <input name="uname_surname" id="field1" type="text" value="<?php $session_data=$this->session->userdata('logged_inh');
echo $session_data['uname_surname'];?>">
      </div>
      <div id="field2-container" class="field f_10">
        <label for="field2">Email</label>
        <input name="user_email" id="field2" type="email" value="<?php $session_data=$this->session->userdata('logged_inh');
echo $session_data['user_email'];?>">
      </div>
      <div id="field5-container" class="field f_10">
        <label for="field5">Şifre</label>
        <input name="user_password" id="field5" type="password">
      </div>
    <h4>Cinsiyet</h4>
  <div id="field5-container" class="field f_10">
<input type="radio" name="user_gender" id="bayan" value="Bayan" class="radio"/>
<label for="radio1">Bayan</label>
</div>

<div id="field5-container" class="field f_10">
<input type="radio" name="user_gender" id="bay" value="Erkek" class="radio"/>
<label for="radio2">Erkek</label>
</div>  
      <div id="form-submit" class="field f_100 clearfix submit">
        <input style="align=left" value="Güncelle" type="submit">
      </div>
    </form>
      
    
     </div>
 
  <div style="clear:both; height: 40px"></div>
</div>