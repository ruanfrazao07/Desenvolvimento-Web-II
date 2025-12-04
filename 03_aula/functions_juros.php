<?php
$capital = $_GET['capital'];
$taxa = $_GET['taxa'];
$tempo = $_GET['tempo']; //anos

function calcularJurosSimples($capital, $taxa_juros, $tempo) {
    $juros = $capital * ($taxa_juros / 100) * $tempo;
    return $juros;
}

function calculaJurosCompostos($capital, $taxa_juros, $tempo) {
    $montante = $capital * pow((1 + ($taxa_juros / 100)), $tempo);
    $juros = $montante - $capital;
    return $juros;
}

echo "Juros Simples R$: " . calcularJurosSimples($capital, $taxa, $tempo) . "<br>";
echo "Juros Compostos R$: " . calculaJurosCompostos($capital, $taxa, $tempo) . "<br>";
?>