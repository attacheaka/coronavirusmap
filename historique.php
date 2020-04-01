<?php

if (isset($_GET['p'],$_GET['h'])) {
	
  extract($_GET);

  if ($h == 'confirmed') {
      
      $infos = "cas confirmé(s)";
      $class_style = 'info';

  }elseif ($h == 'recovered') {
      
      $infos = "cas guéri(s)";
      $class_style = 'success';

  }elseif ($h == 'deaths') {
     
     $infos = "cas mort(s)";
     $class_style = 'danger';

  }else{}

	$json = file_get_contents('https://api.covid19api.com/country/'.$p.'/status/'.$h);

    $datas = json_decode($json,true);
  

}

require('partials/header.php');

require('views/historique.view.php');

require('partials/footer.php');
