<?php

$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);

$dicoLentgh = sizeof($dico);
//var_dump($dico);
//echo $dicoLentgh;
$array15 = [];
foreach ($dico as $key => $value) {
  if (strlen($value) === 15) {
    array_push($array15,$value);
  }
}
echo sizeof($array15);
