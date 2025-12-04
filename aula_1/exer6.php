<?php
   $capital = $_GET['capital'];
   $taxa = $_GET['taxa'];
   $tempo = $_GET['tempo'];

   $calculo = $capital * ($taxa/100) * $tempo;

   echo "Calculo Capital: $capital";
?>