<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?= URL_BASE ?>usuarios/edit"><?= empty($_SESSION['aut'])?'PhoneApp':$_SESSION['aut']->usuario; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <?php if (!empty($_SESSION['aut'])): ?>
        <li class="nav-item">
          <a class="nav-link" href="<?= URL_BASE ?>personas/index">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= URL_BASE ?>personas/add">Agregar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= URL_BASE ?>usuarios/logout">Salir</a>
        </li>
      <?php else: ?>
        <li class="nav-item">
          <a class="nav-link" href="<?= URL_BASE ?>usuarios/login">Entrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= URL_BASE ?>usuarios/register">Registrarse</a>
        </li>
      <?php endif; ?>
    </ul>
  </div>
</nav>
