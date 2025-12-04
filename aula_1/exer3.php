<?php 
    $resposta = $_POST['raio'];

    $raio = $resposta;
    $area = pi() * $raio**2;
    echo "Tame a área: $area";
?>