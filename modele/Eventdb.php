<?php
include 'connectPdo.php';
class EventDb {
	public static function getlisteEvent()
	{
		$sql ="select * from evenement";
		$objResultat = DbPdo::getPdo()->query($sql);
		$result= $objResultat->fetchAll();
		return $result;
	}
}  