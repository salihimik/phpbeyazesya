<!DOCTYPE HTML>
<head>

<?php
 foreach ($veri as $rs) 
 {
     $title =$rs->title;
     $keywords=$rs->keywords;
     $description=$rs->description;
     $name=$rs->name;
     $adres = $rs->adres;
     $sehir=$rs->sehir;
     $tel=$rs->tel;
     $fax=$rs->fax;
   
 }

?>

<title><?=$title2?></title>
<meta http-equiv="Content-Type" content="text/HTML; charset=ISO-8859-9" />
<meta http-equiv="Content-Type" content="text/html; charset="utf-8">
<meta name="copyright" content="<?=$name?>" >
<meta name="keywords" content="<?=$keywords?>" >
<meta name="description" content="<?=$description?>" >
<meta name="adresimiz" content="<?=$adres?>" >
<meta name="merkezlerimiz" content="<?=$sehir?>" >
<meta name="telefon" content="<?=$tel?>" >
<meta name="fax" content="<?=$fax?>" >

<!-- Google Fonts -->
<link href='<?php echo base_url()?>http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
<!-- CSS Files -->
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url()?>css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url()?>menu/css/simple_menu.css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url()?>yeni.css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>boxes/css/style5.css">
<link rel="stylesheet" href="<?php echo base_url()?>css/nivo-slider.css" type="text/css" media="screen">
<!-- Contact Form -->
<link href="<?php echo base_url()?>contact-form/css/style.css" media="screen" rel="stylesheet" type="text/css">
<!-- JS Files -->
<script src="<?php echo base_url()?>http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="<?php echo base_url()?>js/jquery.tools.min.js"></script>
<script src="<?php echo base_url()?>js/jquery.min.js"></script>
<script src="<?php echo base_url()?>js/custom.js"></script>
<script src="<?php echo base_url()?>js/jquery.eislideshow.js"></script>
<script src="<?php echo base_url()?>js/slides/slides.min.jquery.js"></script>
<script src="<?php echo base_url()?>js/cycle-slider/cycle.js"></script>
<script src="<?php echo base_url()?>js/nivo-slider/jquery.nivo.slider.js"></script>
<script src="<?php echo base_url()?>js/tabify/jquery.tabify.js"></script>
<script src="<?php echo base_url()?>js/prettyPhoto/jquery.prettyPhoto.js"></script>
<script src="<?php echo base_url()?>js/twitter/jquery.tweet.js"></script>
<script src="<?php echo base_url()?>js/scrolltop/scrolltopcontrol.js"></script>
<script src="<?php echo base_url()?>js/portfolio/filterable.js"></script>
<script src="<?php echo base_url()?>js/modernizr/modernizr-2.0.3.js"></script>
<script src="<?php echo base_url()?>js/easing/jquery.easing.1.3.js"></script>
<script src="<?php echo base_url()?>js/kwicks/jquery.kwicks-1.5.1.pack.js"></script>
<script src="<?php echo base_url()?>js/swfobject/swfobject.js"></script>

<!-- FancyBox -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>js/fancybox/jquery.fancybox.css" media="all">
<script src="<?php echo base_url()?>js/fancybox/jquery.fancybox-1.2.1.js"></script>
<script>
$(function () {
    $("#prod_nav ul").tabs("#panes > div", {
        effect: 'fade',
        fadeOutSpeed: 400
    });
});
</script>
<script>
$(document).ready(function () {
    $(".pane-list li").click(function () {
        window.location = $(this).find("a").attr("href");
        return false;
    });
});
</script>
</head>
<body>
<table style="margin:0; padding:0"><tr><td style="line-height:20px; padding:0 10px;"><font color="red"><em><b><?php $session_data=$this->session->userdata('logged_inh');
echo $session_data['uname_surname'];?></em></b></font><a href="<?php echo base_url()?>home/logout">&nbsp;&nbsp;-ÇIKIŞ-</a><b>&nbsp;&nbsp;&nbsp;*** SLH BEYAZ EŞYA ***&nbsp;&nbsp;&nbsp; <font color="green"><em>Düğünlere özel kampanyalar...</em></b></font></td></tr></table>
<?php
$home="";
$contact="";
$about_us="";
$products_washer="";
$products_dishwasher="";
$products_fridge="";
$products_bakery="";
$login="";
$users_insert="";
$users_edit="";
$bos="";

switch ($page) 
{
  
  case "home":
    $home='class="active_menu_item"';
    break;

    case "contact":
    $contact='class="active_menu_item"';
    break;

    case "about_us":
    $about_us='class="active_menu_item"';
    break;

    case "products_washer":
    $products_washer='class="active_menu_item"';
    break;

    case "products_dishwasher":
    $products_dishwasher='class="active_menu_item"';
    break;

    case "products_fridge":
    $products_fridge='class="active_menu_item"';
    break;

    case "products_bakery":
    $products_bakery='class="active_menu_item"';
    break;
    case "login":
    $login='class="active_menu_item"';
    break;
    case "users_insert":
    $login='class="active_menu_item"';
    break;
    case "users_edit":
    $login='class="active_menu_item"';
    break;
    case "bos":
    $bos='class="active_menu_item"';
    
}


?>

<!-- Main Menu -->
<ol id="menu">
  <li <?=$home?>><a href="<?php echo base_url()?>home" style="color:#FFF">ANASAYFA</a>     
  </li> 
  <li><a href="#">ÜRÜNLER</a>
    <!-- sub menu -->
    <ol>
      <li <?=$products_washer?>><a href="<?php echo base_url()?>home/products_washer">ÇAMAŞIR MAKİNELERİ</a></li>
      <li <?=$products_dishwasher?>><a href="<?php echo base_url()?>home/products_dishwasher">BULAŞIK MAKİNELERİ</a></li> 
      <li <?=$products_fridge?>><a href="<?php echo base_url()?>home/products_fridge">BUZDOLAPLARI</a></li>
      <li <?=$products_bakery?>><a href="<?php echo base_url()?>home/products_bakery">FIRINLAR</a></li>
    </ol>
  </li>
  <!-- end sub menu -->  
 
  
  <li <?=$contact?>><a href="<?php echo base_url()?>home/contact">İLETİŞİM</a></li>
  <li <?=$about_us?>><a href="<?php echo base_url()?>home/about_us">HAKKIMIZDA</a></li>
  <li><a href="#">İŞLEMLER</a>
    <ol>
      <li <?=$login?>><a href="<?php echo base_url()?>home/login">LOGIN</a></li>
      <li <?=$users_insert?>><a href="<?php echo base_url()?>home/users_insert">KAYIT OL</a></li> 
      <li <?=$users_edit?>><a href="<?php echo base_url()?>home/users_edit">BİLGİLERİM</a></li>      
    </ol>


  </li>  
</ol>