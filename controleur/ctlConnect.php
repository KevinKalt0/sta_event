<?php
include './modele/UserDb.php';
$action =$_GET['action'];
switch($action) {
	case 'validConnect':
	//appel à la base de donnée le modèle
	$login=$_POST['login'];
	$mdp=$_POST['mdp'];
	$aaaa = Userdb::getLoginUser($login,$mdp);
	if(is_array($aaaa)){
		$_SESSION['connect']= true;
		$_SESSION['id']= $aaaa['id'];
		$_SESSION['nom']= $aaaa['nom'];
		$_SESSION['role']= $aaaa['role'];
	
		header('Location: index.php');
	}
	
	break;
	case 'deconnect':
	session_destroy();
	header('Location: index.php');
	break;
}

?>