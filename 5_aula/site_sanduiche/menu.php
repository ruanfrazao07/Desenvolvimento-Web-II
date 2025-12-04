<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">Sanduicheira</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?= ($pagina_atual == 'home') ? 'active' : '' ?>" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($pagina_atual == 'local') ? 'active' : '' ?>" href="envia_local.php">Local</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($pagina_atual == 'pao') ? 'active' : '' ?>" href="envia_pao.php">Pão</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($pagina_atual == 'proteina') ? 'active' : '' ?>" href="envia_proteina.php">Proteína</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($pagina_atual == 'queijo') ? 'active' : '' ?>" href="envia_queijo.php">Queijo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($pagina_atual == 'vegetais') ? 'active' : '' ?>" href="envia_vegetais.php">Vegetais</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($pagina_atual == 'molhos') ? 'active' : '' ?>" href="envia_molhos.php">Molhos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($pagina_atual == 'pagamento') ? 'active' : '' ?>" href="envia_pagamento.php">Pagamento</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($pagina_atual == 'resumo') ? 'active' : '' ?>" href="resumo_pedido.php">Ver Resumo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($pagina_atual == 'sair') ? 'active' : '' ?>" href="sair.php">Sair</a>
        </li>
      </ul>
    </div>
  </div>
</nav>