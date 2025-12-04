<?php
$pg_atual = 'home';
?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<nav class="navbar navbar-expand-sm bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <?php if($pg_atual == 'primeira'): ?>
          <a class="nav-link active" aria-current="page" href="#">Primeira</a>
        <?php else: ?>
          <a class="nav-link" href="primeira.php">Primeira</a>
        <?php endif; ?>
        </li>

        <li class="nav-item">
        <?php if($pg_atual == 'salva'): ?>
          <a class="nav-link active" aria-current="page" href="#">Salva</a>
        <?php else: ?>
          <a class="nav-link" href="salva.php">Salva</a>
        <?php endif; ?>
        </li>

        <li class="nav-item">
        <?php if($pg_atual == 'mostra'): ?>
          <a class="nav-link active" aria-current="page" href="#">Mostra</a>
        <?php else: ?>
          <a class="nav-link" href="mostra.php">Mostra</a>
        <?php endif; ?>
        </li>

        <li class="nav-item">
        <?php if($pg_atual == 'encerra'): ?>
          <a class="nav-link active" aria-current="page" href="#">Encerra</a>
        <?php else: ?>
          <a class="nav-link" href="encerra.php">Encerra</a>
        <?php endif; ?>
        </li> 
        </li>
      </ul>
    </div>
  </div>
</nav>