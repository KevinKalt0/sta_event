<?php
include './modele/Eventdb.php';
$action =$_GET['action'];
switch($action) {
	case 'listerEvent':
	//appel à la base de donnée le modèle
	 $listeEvent = Eventdb::getlisteEvent();
	 include 'vue/ListeEvenements.php';
	 
	 case 'formAjoutEvent':
	
	 include 'vue/AjoutEvenements.php';
	 
	break;
	case 'validerAjoutEvent':
	
		if(isset($_POST["valider"]))
                              {
       

                                    $id=$_POST['id_evenement'];
                                    $date_d=$_POST['date_debut'];
                                    $date_d=$_POST['date_fin'];
                                    $organisateur=$_POST['id_organisateur'];

                                    $sql = "INSERT INTO produit (id, date_d, date_f, organisateur) VALUES (NULL, :x, :y, :z);";
                                    echo $sql;
                                    $result=$pdoConnect->prepare($sql);
                                    $result ->bindParam(':x',$date_d);
                                    $result ->bindParam(':y',$date_f);
                                    $result ->bindParam(':x',$organisateur);

                                    $result->execute();

                                    header("location : listeEvenements.php" );
                              
                              }
		
		
	   break;
	
	
}

?>