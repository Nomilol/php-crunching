<?php

$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);

$dicoLentgh = sizeof($dico);
echo $dicoLentgh;
 $array15 = [];
 foreach ($dico as $key => $value) {
   if (strlen($value) === 15) {
     array_push($array15,$value);
   }
 }
 echo sizeof($array15);


$arrayS = [];

foreach ($dico as $key => $value) {
  if(strpos($value, "w")!=false){
    array_push($arrayS, $value);
  }
}
echo sizeof($arrayS);
