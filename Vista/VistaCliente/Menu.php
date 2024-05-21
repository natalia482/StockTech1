 <?php
session_start();
ob_start();
if (!isset($_SESSION['UserCli']) or !isset($_SESSION['pasClie'])){
    header("Location: ../Vista/VistaCliente/IngresoCliente.php");
}
ob_end_flush();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../diseño/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../diseño/css/style.css">
    <link rel="stylesheet" href="../diseño/css/Menu.css">
  </head>
<body> 
  <div class="site-wrap">
    <?php include("../../Vista/diseño/layouts/header.php"); ?> 
      <div class="container ">
        <div class="btn1">
          <button class="button1"><a href="ListaMaterial.php" class="Lista1">Lista  Material</a></button> <i class="bi bi-list-columns-reverse fa-10x"></i>
        </div>
        <div class="btn2">
          <button class="button2"><a  href="RegistrarInventario.php" class="Lista2">Agregar</a></button><i class="bi bi-plus-square"></i>
        </div>
      </div>
  </div>
</body>
</html>   