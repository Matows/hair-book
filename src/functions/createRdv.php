<?php
function createRdv($prestations, $rdvtime, $who="anonyme", $hairdresser="n'importe")
{
	//format $rdvHour='yyyy-mm-dd hh:mm:00'
	//format $prestation (une seule) : array("name" => name, "time" => time(min), "price" => price)
	//format $prestations : [$prestation]
	$presStockage="";
	$totPrice=0;
	$totTime=0;
	foreach ($prestations as $prestation) {
		$presStockage=$presStockage+$prestation["name"]+", ";
		$totTime+=$prestation["time"];
		$totPrice+=$prestation["price"];
	}
	$presStockage=substr($presStockage, 0, strlen($presStockage)-3);
	$sql="INSERT INTO `rdvs` (`id`, `prestations`, `maxprice`, `who`, `time(min)`, `hairdresser`, `rdvHour`) VALUES (NULL, $presStockage, $totPrice, $who, $totTime, $hairdresser, $rdvtime);";
    mysqli_query($c, $sql);
}