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
      <link rel="stylesheet" href="../diseño/css/Lista.css">
    </head>
    <body>
    <div class="site-wrap">
      <?php include("../../Vista/diseño/layouts/header.php"); ?> 
        <div class="container">
          <div>
              <h2 class="txtlista"> Lista Material</h2>
          </div>
        </div>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">PRODUCTO</th>
              <th scope="col">NUMERO BOLSA</th>
              <th scope="col">VALOR UNITARIO</th>
              <th scope="col">CANTIDAD</th>
              <th scope="col">EDITAR</th>
            </tr>
          </thead>
          <?php
            include('../../Modelo/Conexion/conexion.php');
            $db=Db::conectar();
            $resultado = ('SELECT * FROM producto ') ;
            $sql = $db->prepare($resultado);
            $sql->execute();
            while ($fila = $sql->fetch()){
          ?>
          <tbody>
            <tr>
              <th><?php echo $fila['IDPRODUCTO']; ?></th>
              <th ><?php echo $fila['NOMPRODUC']; ?></th>
              <th ><?php echo $fila['NUMBOLSA']; ?></th>
              <th ><?php echo  number_format($fila['VUNITARIO'],0,'.',',') ; ?></th>
              <th ><?php echo $fila['CANTIDAD']; ?></th>
              <th>
                <div class="form-group">
                  <a href="EditarProducto.php?id=<?php echo $fila['IDPRODUCTO'];?>">
                  <button class="btnedit" name="editar">EDITAR</button>
                  </a>
                </div> 
              </th>    
            </tr>
            <?php
              }
            ?>
          </tbody>
        </table>
    </div>
  </body>
</html>