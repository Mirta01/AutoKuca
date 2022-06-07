<?php
include 'connection.php';

$sQuery = "SELECT * FROM vozilo";
$oRecord = $Connection->query($sQuery);
$aVozila = array();

while($oRow=$oRecord->fetch(PDO::FETCH_BOTH)){
    $sifra = $oRow['sifra'];
    $vrsta = $oRow['vrsta'];
    $tip = $oRow['tip'];
    $model = $oRow['model'];
    $proizvodac = $oRow['proizvodac'];
    $oznaka = $oRow['oznaka'];
    $godina = $oRow['godina'];
    $snaga = $oRow['snaga'];
    $salon = $oRow['salon'];

    $oVozilo = new Vozilo($sifra, $vrsta, $tip, $model, $proizvodac, $oznaka, $godina, $snaga, $salon);
    array_push($aVozila, $oVozilo);
}

echo json_encode($aVozila);
?>