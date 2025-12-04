<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
$pagina = basename($_SERVER['PHP_SELF']);
?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sistema Aluno</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php echo ($pagina == 'formulario.php') ? 'active' : ''; ?>" href="formulario.php">Cadastrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($pagina == 'mostra.php') ? 'active' : ''; ?>" href="mostra_aluno.php">Mostrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($pagina == 'mostra_idade.php') ? 'active' : ''; ?>" href="mostra_idade.php">Idade</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($pagina == 'sair.php') ? 'active' : ''; ?>" href="sair.php">Sair</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
