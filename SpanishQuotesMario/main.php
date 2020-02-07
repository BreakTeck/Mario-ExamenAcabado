<?php 
	require_once('dbmanager.php');

	if (isset($_GET['quote']) && $_GET['quote'] != ""){
		echo $_GET['quote'].'<br>';
		getQuote($_GET['quote']);
	}
	else{
		echo 'NADA';
	}

?>