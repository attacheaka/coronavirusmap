<?php


$json = file_get_contents('https://api.covid19api.com/summary');

$datas = json_decode($json,true);

$date = date_parse($datas["Date"]);


require('partials/header.php');

require('views/pays.view.php');

require('partials/footer.php');
