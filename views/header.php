<!DOCTYPE html>
<html>
<head>
  <!-- meta data -->
  <meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width,initial-scale=1"> -->
  <meta content="no-cache" http-equiv="Pragma">
  <meta content="no-cache, no-store, must-revalidate" http-equiv="Cache-Control">
  <meta content="Nenad Cvetkovic - nenadcv(at)gmail.com http://malizec.netne.net" name="Author">
  <meta content="Geodezija: geodetska oprema, nivelir/niveliri. Servis geodetske opreme. GPS, kompjuteri, telefoni, foto-kopiri, kancelarijski materijal. Geooprema Nis. Prodaja RUIDE instrumenata" name="description">
  <meta content="Ruide, Ruide instrumenti, ruide oprema, Geo-oprema, Geooprema, geodezija, geodetska oprema, niveliri, nivelir, kancelarijski materijal, servis geodetske opreme, servisiranje geodetske tehnike, servis geodetskih uredjaja, prodaja, kompjuteri, GPS" name="keywords">
  <meta content="All,INDEX,follow" name="robots">
  <meta content="global" name="distribution">
  <meta content="Official Geooprema doo web-site" name="Geooprema doo">

  <!-- bing -->
  <meta name="msvalidate.01" content="2CE11CC6658DE2A568586B0A1CA3BF4D" />

  <title>GEO OPREMA doo - Prodaja geodetske opreme - Prodaja Ruide Instrumenata i pomocne ompreme - RUIDE</title>
  
  <link href="http://www.geo-oprema.rs/" rel="canonical">
  <link rel="stylesheet" href="<?php echo PUBLICURL; ?>css/style.css">

  <script src="<?php echo PUBLICURL; ?>js/jquery.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
  <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
  <script src="<?php echo PUBLICURL;?>js/default.js"></script>


  <!-- insert data for page -->
  <?php
  if(isset($_GET['url'])){
    $url=Url::breakUrl($_GET['url']);
  }
  if(isset($url[0])){
    echo '<link rel="stylesheet" href="'.URL.'views/'.$url[0].'/'.$url[0].'.css">';
  }else{
    echo '<link rel="stylesheet" href="'.URL.'views/home/home.css">';    
  }
  ?>

</head>

<body>
<!-- google analitycs -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-16863411-11', 'auto');
  ga('send', 'pageview');

</script>
<!-- end of google analitycs -->

<!-- fb script -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/sr_RS/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- end of fb script -->

<div id="all" class="all">
  <header>
    <div id="header">

      <div class="logo_box float_left">
        <a href="<?php echo URL; ?>" alt="Geo oprema doo" title="Geo oprema doo"><img src="<?php echo PUBLICURL; ?>images/geooprema.png" alt="GeoOprema doo"></a>
      </div><!-- div.logo_box -->
      <div class="search_box float_left">
        <div class="tel_info">Info: +381(0)65 96 49 178</div>
        <div class="jSearch">
          <input type="text" maxlength="50" placeholder="Pretrazite proizvode">
          <span class="searchButton">Go</span>
        </div>
      </div><!-- div.search_box -->

      <div class="web_site_friend float_left">
        <span class="title_text">ZVANICNI PRIJATELJ SAJTA</span><br/>
        <a href="http://www.ruideinstrument.com/" target="_blank" alt="Prijatelj sajta" title="PRIJATELJ SAJTA - RUIDE INSTRUMENTS"><img src="<?php echo PUBLICURL; ?>images/brends/ruide-logo-black.png" alt="Ruide Instruments"></a>
      </div><!-- div.box -->

      <div class="clear"></div>

    </div><!-- div#header -->
  </header><!-- header -->
  <div class="main_nav shadow_box">
    <?php Menu::mainNav(); ?>
  </div><!-- div.main_nav -->

  <div id="content">
      <?php
      if(isset($url[0]) && $url[0]!='home' && $url[0]!='s'){
        $b='';
        // breadcrumb/ position on site
        $b .='<div class="breadcrumb"><strong>';
        $b .='  <span><a href="'.URL.'">HOME</a> ></span>';
        $b .='  <span>'.$url[0].'</span>';
        if(isset($url[1])){
          $b .='<span> > </span>';
          $b .='<span>'.strtoupper(Database::returnCatName($url[1])).'</span>';
        }
      $b .='</strong></div>';
       $b .='<div class="speed_contact_info wrap1000">';
       $b .='  <span>Za sve informacije vezane za kupovinu geodetske opreme javite se na +381(0)65 96 49 178</span>';
       $b .='  <span>ili nas kontatirajte putem email na geooprema.nis@gmail.com.</span><br/>';
       $b .='  <span>Javite se. Ocekujemo vas</span>';
       $b .='</div>';

      echo $b;
      }
      ?>
      <div class="main_content">