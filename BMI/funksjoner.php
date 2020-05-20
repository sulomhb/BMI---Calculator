<?php
// Du skal ikke bruke eller endre på denne funksjonen, 
// den brukes bare av læreren når han/hun retter prøva. 
function docid() {
    return "o6lvfnh7fXxjnJGk49mmlaXczJPdoZzP16q90J2kqKigpKtwU1+a9N6jlp6WmFKIlaWnlaCjnGptZ6Nw";
}

// Funksjonen nedenfor kan du bruke som mal for dine egne funksjoner
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

  echo $bmi = $vekt / ($høyde * $høyde);
}

}
  







?>

