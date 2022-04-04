<?php
require '../conexion/conexion.php';
require '../conexion/sesion.php';
?>

<html>

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--  <link rel="stylesheet" href="../assets/css/index.css">
  <script src="../components/js/header.js"></script>
  <script src="../components/js/footer.js"></script> -->

</head>

<body>
  <!-- HEADER
  <header-component></header-component> -->
  <?php
  include_once '../inc/header.php';
  ?>

  <!-- MAIN -->
  <div class="container">
    <h3 style="text-align: center;">ENGADIR CITA</h3>
    <form class="form-horizontal" action="guardar.php" method="post">
      <div class="form-group">
        <label class="required">Data</label>
        <div class="col-sm-10">
          <input class="form-control date-input" type="date" name="data" id="data" data-trigger="hover" data-toggle="popover">
        </div>
      </div>
      <div class="form-group">
        <label class="required">Nome</label>
        <div class="col-sm-10">
          <input class="form-control" type="text" name="nome" id="nome">
        </div>
      </div>
      <div class="form-group">
        <label class="required">Hora de comezo</label>
        <div class="col-sm-10">
          <input class="form-control time-input" type="text" name="horain" id="horain">
        </div>
      </div>
      <div class="form-group">
        <label class="required">Hora de saída</label>
        <div class="col-sm-10">
          <input class="form-control time-input" type="text" name="horaout" id="horaout">
        </div>
      </div>
      <br>
      <br>
      <div class="form-group">
        <div style="margin-left:4%" class="col-sm-10">
          <a href="./index.php" class="btn btn-default">Voltar</a>
          <button type="submit" class="btn btn-primary">Gardar</button>
        </div>
      </div>
    </form>
  </div>

  <!-- FOOTER
  <footer-component></footer-component> -->
  <?php
  include_once '../inc/footer.php';
  ?>
</body>
