<?php

// My own me-page
include ("config.php");
$myImage = "/img/me.jpg";


$data['title'] 			  = "Redovisning";
$data['meta_description'] = "Min egna me-sida";
$data['main'] 			  = <<<EOD

<h1>Hallu</h1>

{$myImage}

EOD;

// Template
include(__DIR__."/theme/template.php");