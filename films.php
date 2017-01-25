<?php

$string = file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);
$top = $brut["feed"]["entry"];



function ten($index){
  for ($i=0; $i < 10 ; $i++) {
    echo '<li>' . $index[$i]['im:name']['label'] . '</li>';
  }
}
echo ten($top);
