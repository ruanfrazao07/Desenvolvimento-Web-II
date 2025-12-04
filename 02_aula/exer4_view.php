<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exer4</title>
</head>
<body>
    <h4>Comparações em PHP</h4>
    <?php
        // pegando dados  
        $x = $_GET['n1'];
        $y = $_GET['n2'];

        // >	Maior que
        if($x > $y) {
        echo "$x é maior que $y <br>";
        }

        if($y > $x) {
        echo "$y é maior que $x <br>";
        }
        // <	Menor que
        if($x < $y) {
        echo "$x é menor que $y <br>";
        }

        if($y < $x) {
        echo "$y é menor que $x <br>";
        }
        // >=	Maior que ou igual a
        if($x >= $y) {
        echo "$x é maior ou igual que $y <br>";
        }

        if($y >= $x) {
        echo "$y é maior ou igual que $x <br>";
        }
        // <=	Menor que ou igual a
        if($x <= $y) {
        echo "$x é menor que ou igual que $y <br>";
        }

        if($y <= $x) {
        echo "$y é menor que ou igual que $x <br>";
        }
        // ==	Igual a
        if($x == $y) {
        echo "$x é igual a $y <br>";
        }

        if($y == $x) {
        echo "$y é igual a $x <br>";
        }
        // !=	Diferente
        if($x != $y) {
        echo "$x é Diferente que $y <br>";
        }

        if($y != $x) {
        echo "$y é Diferente que $x <br>";
        }
        // ===	Idêntico
        if($x === $y) {
        echo "$x é Idêntico que $y <br>";
        }

        if($y === $x) {
        echo "$y é Idêntico que $x <br>";
        }
        // !==	Não idêntico
        if($x !== $y) {
        echo "$x é Não idêntico que $y <br>";
        }

        if($y !== $x) {
        echo "$y é Não idêntico que $x <br>";
        }
        // <=>	Espaçonave
        if($x <=> $y) {
        echo "$x é Espaçonave que $y <br>";
        }

        if($y <=> $x) {
        echo "$y é Espaçonave que $x <br>";
        }
    ?>
</body>
</html>