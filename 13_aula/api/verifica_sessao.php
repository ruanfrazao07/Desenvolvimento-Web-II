<?php
if (!isset($_SESSION['id'])) {
    http_response_code(403);
    echo json_encode(["erro" => "Acesso negado"]);
    exit;
}
?>