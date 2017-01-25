<?php

 $string = file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
 $brut = json_decode($string, true);
 $top = $brut["feed"]["entry"];


 // function ten($index){
 //   for ($i=0; $i < 10 ; $i++) {
 //     echo '<li>' . $index[$i]['im:name']['label'] . '</li>';
 //   }
 // }
 // echo ten($top);



// function getGravity($index, $searching){
//   for ($i= 0 ; $i < 100 ; $i++) {
//     if($index[$i]['im:name']['label'] === $searching){
//       return $i + 1;
//     }
//   }
// }
//
// echo getGravity($top,'Gravity');

function searchRealistorOfMovie($index, $movie) {
  for ($i=0; $i < 100 ; $i++) {
    if ($index[$i]['im:name']['label'] === $movie) {
      return $index[$i]['title']['label'];
    }
  }
}

echo searchRealistorOfMovie($top, "The LEGO Movie" );
