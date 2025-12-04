<?php
session_start();

if (isset($_GET['id'])) {
    $id_para_apagar = $_GET['id'];

    if (isset($_SESSION['tarefas'][$id_para_apagar])) {
        unset($_SESSION['tarefas'][$id_para_apagar]);
    }
}

header('Location: todas_tarefas.php');
exit();
?>