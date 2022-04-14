<?php
session_start();
include 'vue/entete.php';
if(isset($_SESSION['connect'])){
	//include 'vue/accueil.php';
}
if(isset($_GET['ctl']))
{
	switch($_GET['ctl']){
		
		case 'connect':
		include 'controleur/ctlConnect.php'; 
		break;
		case 'evenements':
		include 'controleur/ctlEvent.php';
		break;
	}
}
if(!isset($_SESSION['connect'])){
include 'vue/formLogin.php';}
//include 'vue/pied.php';
?>