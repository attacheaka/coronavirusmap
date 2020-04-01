<?php

if (isset($_GET['p'])) {
	
	extract($_GET);
}

require('partials/header.php');

require('views/pays.view.php');

require('partials/footer.php');
