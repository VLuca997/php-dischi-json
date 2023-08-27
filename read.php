<?php 
header('Access-Control-Allow-Origin: *');
$discs = file_get_contents('database/discs.json');
$myData = false;
if($myData){

    $discs = json_decode($discs, true);
    header('Content-Type: application/json');

    echo json_encode($discs);
}
else{
    header('Content-Type: application/json');
    echo $discs;
}

?>