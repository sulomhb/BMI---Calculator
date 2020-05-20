<?php

function hils($navn) {
    return "Hei {$navn}, hvordan går det?";
}

if (isset($_GET['submit'])) {
  $høyde= $_GET['høyde']; 
  $vekt=$_GET['vekt'];

  
  if($vekt == 0 || $høyde == 0) {
    echo "Hvordan kan høyden eller vekta de være 0?";
}
else{

  echo $bmi = $vekt / ($høyde * $høyde)  * 1E4;
}

}
  







?>

