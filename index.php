<?php 
$location = json_decode(file_get_contents("https://raw.githubusercontent.com/SkylineNando/Json/master/01001000.json"));
echo $location->cep.'<br>';
echo $location->city.'<br>';
echo $location->neighborhood.'<br>';
echo $location->street;
?>
