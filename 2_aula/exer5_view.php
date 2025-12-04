<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juros Simples</title>
</head>
<body>
    <table>
        <tr>
            <th>Tempo</th>
            <th>Montante</th>
            <th>Juro</th>
        </tr>
        <?php
            $capital = $_GET['capital'];
            $taxa = $_GET['taxa'];
            $tempo = $_GET['tempo'];
            $inicio = $capital;
            $cont = 0;
            $juros = 0;
            while($cont <= $tempo):
                $capital = $capital + $juros; 
                $juros = ($taxa/100) * $inicio;?>
                    <tr>
                        <td><?=  $cont ?></td>
                        <td><?= $capital ?></td>
                        <td><?= $juros * $cont ?></td>
                    </tr>
                    <?php
                    $cont++;
            endwhile;
        ?>
    </table>
</body>
</html>