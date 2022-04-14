<?php
include "pdoConnect.php";
$sql= "SELECT * from evenement";
$objResultat=$pdoConnect->query($sql);
$tabResultat=$objResultat->fetchAll();
foreach($tabResultat as $ligne){
    echo $ligne['date_d']."-".$ligne['date_f']."=".$ligne["organisateur"].'<br>';
}