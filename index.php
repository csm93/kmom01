<?php

// My own me-page
include ("config.php");


$data['title'] 			  = "Me-sida";
$data['meta_description'] = "Min egna me-sida";
$data['main'] 			  = <<<EOD

<h1>Om mig</h1>

<figure class="right top">
    <img src="img/me.jpg" width=192 height=175 alt="Jag">
  </figure> 


<p>Mitt namn är Carl Sebastian Malm. Jag är 20 år gammal och bor i Stockholm. Jag tog studenten år 2012 efter att ha gått teknik. 
  Därefter har jag arbetat i knappt ett år på lager och vill nu testa mina alternativ och se om jag bör återgå till studierna. 
  Eftersom jag ägnat tid tidigare åt att bygga webbsidor passar det här kurspaketet mig utmärkt för att ordentligt gå igenom grunderna inom HTML/CSS/PHP.
  </p>
  På min fritid ägnar jag tid till AIK:s matcher. Har sedan barnsben varit gnagare och har följt fotbollen och ishockeyn ända sedan dess. Jag spelar själv fotboll i korpen och har även ett stort intresse för datorer sedan början av tonåren.



EOD;

// Template
include(__DIR__."/theme/template.php");