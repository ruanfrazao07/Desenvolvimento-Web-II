<?php
session_start();

if (!isset($_SESSION['tarefas'])) {
    $_SESSION['tarefas'] = [];
}

$total_tarefas = count($_SESSION['tarefas']);
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="hoje.php">Tarefas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?= ($pagina_atual == 'hoje') ? 'active' : '' ?>" href="hoje.php">Hoje</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($pagina_atual == 'nova') ? 'active' : '' ?>" href="nova_tarefa.php">Nova</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($pagina_atual == 'todas') ? 'active' : '' ?>" href="todas_tarefas.php">Todas</a>
        </li>
      </ul>
      <span class="navbar-text">
        Total: <?= $total_tarefas ?>
      </span>
    </div>
  </div>
</nav>