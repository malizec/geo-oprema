<?php

$home='';

$home.='<div class="slider">';
	View::render('unslider/index'); /* unislider */
$home.='</div><!-- div.slider -->';

/* o nama box */
$home.='<div class="about">';
$home.='	<div class="wrap1000">';
$home.='		<h1>O NAMA</h1>';
$home.='		<p>';
$home.='
GEO OPREMA d.o.o. je privatno preduzeće osnovano 21.03.2014. godine u Nisu. Generalni  distributeri smo  jednog od vodecih proizvodjaca geodetske opreme na  Kineskom trzistu RUiDA. Nasa  osnovna delatnoste je uvoz i  prodaja  geodetskih instrumenata i softvera.
Ruide Surveying instrument Co., Ltd osnovana je 1995.godine, i nudi  kompletnu liniju proizvoda, 
Totalne stanice, gps sisteme, laserske merace duzina, nivelire, kao i sav prateci pribor.
Najvece priznanje za pruzanje kvaliteta izrade instrumenata, RUIDE se obavezao da obezbedi pouzdana i dobra ekonomska resenja  i usluge svoji sloganom.
<br/><br/>
RUiDE  -  Rapidity  Utility  integrity  Durability  Essentiality<br/>
--Rapidity of response,- BRZINA ODGOVORA<br/>
--Utility of function, - KORISNOST FUNKCiJA<br/>
--integrity of technology and user-friendly operation, - INTEGRITET TEHNOLOGiJE  I JEDNOSTAVNOS U RADU<br/>
--Durability of product life,- TRAJNOST ZIVOTNiH PROIZVODA<br/>
--Essentiality of entrepreneurship, are the commitments of Ruide.- BITNOST PREDUZETNISTVA SU OBAVEZE RUIDA <br/>
<br/>
Sa savremenim i naprednim tehnologijama  i izuzetnim performansama  RUIDE zauzima znacajno mesto u Kineskoj GIS industriji.
GEO OPREMA pridaje veliki znacaj na svoje nove i buduce potrosace, nasi ciljevi su da uspostavimo siroku prodajnu i servisnu mrezu u Srbiji, posveticemo se pruzanju najbrze i profesionalne  usluge  kod svake kupovine , kao i tehnicke podrske svakom nasem kupcu.
';
$home.='		</p>';
$home.='	</div>';
$home.='	<div class="clear"></div>';
$home.='</div>';
/* */



echo $home;