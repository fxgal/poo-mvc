<?php
session_start();
include_once 'config/Router.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Directorio Telefónico</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  </head>
  <body>
    <!-- <?php require_once 'views/layouts/navbar.php'; ?> -->
    <?php require_once 'views/layouts/header.php'; ?>
    <div role="main" class="container">
      <?php $router = new Router(); ?>
    </div>
  </body>
</html>
