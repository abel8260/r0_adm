<?php


session_start();

if(isset($_SESSION['user'])){
	 require 'verify_account.php';
	
};

if(isset($_SESSION['user']) == false ){
	 echo "<a href='.././cms/'> click</a>";


};

var_dump(isset($_SESSION['user'])); 

?> 