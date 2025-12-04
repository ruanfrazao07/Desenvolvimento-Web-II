<?php
session_start();

if (isset($_POST['nome_tarefa']) && isset($_POST['data_tarefa'])) {
    
    $nova_tarefa = [
        'nome' => $_POST['nome_tarefa'],
        'data' => $_POST['data_tarefa']
    ];

    array_push($_SESSION['tarefas'], $nova_tarefa);
}

header('Location: todas_tarefas.php');
exit();
?>