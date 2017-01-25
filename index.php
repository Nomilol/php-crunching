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
 echo '<div>'. sizeof($array15) . '</div>';


$arrayS = [];

foreach ($dico as $key => $value) {
  if(strpos($value, "w")!=false){
    array_push($arrayS, $value);
  }
}
echo  '<div>' . sizeof($arrayS) . '</div>';

$arrayQ = [];

foreach ($dico as $key => $value) {
  if (substr($value, -1) === "q") {
    array_push($arrayQ, $value);
  }
}

echo sizeof($arrayQ);
