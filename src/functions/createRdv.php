<?php
function createRdv($prestations, $rdvtime, $who="anonyme", $hairdresser="n'importe")
{
	global $db;
	//format $rdvHour='yyyy-mm-dd hh:mm:00'
	//format $prestation (une seule) : array("name" => name, "time" => time(min), "price" => price)
	//format $prestations : [$prestation]
	$presStockage="";
	$totalPrice=0;
	$totalTime=0;
	foreach ($prestations as $prestation) {
		$presStockage=$presStockage.$prestation["name"].", ";
		$totalTime+=$prestation["time"];
		$totalPrice+=$prestation["price"];
	}
	$presStockage=substr($presStockage, 0, strlen($presStockage)-3);
	$sql="INSERT INTO `rdvs` (`id`, `prestations`, `maxprice`, `who`, `time(min)`, `hairdresser`, `rdvHour`) VALUES (NULL, $presStockage, $totalPrice, $who, $totalTime, $hairdresser, $rdvtime);";
    	mysqli_query($db, $sql);
}
