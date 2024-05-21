<?php

session_start();
ob_start();
include('../../Modelo/Conexion/conexion.php');
if (!isset($_SESSION['UserCli']) or !isset($_SESSION['pasClie'])){
    header("Location: ../Vista/VistaCliente/IngresoCliente.php");
}
ob_end_flush();
if (isset($_GET['id'])) {
    $db=DB::conectar();
    $buscar=('SELECT * FROM producto 
        WHERE IDPRODUCTO =' .$_GET['id']);
    $sql = $db->prepare($buscar);
    $sql->execute();
    while ($fila = $sql->fetch()) {
            
?>

<!DOCTYPE html>
<html lang="en">
 <head>
    <title>Actualizar Producto </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../diseño/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
      <link rel="stylesheet" href="../diseño/css/style.css">
      <link rel="stylesheet" href="../diseño/css/editar.css">
        
    </style>
</head>
<body>

    <form action="../../Controlador/Controladorcliente/ControladorEditarProduc.php?id=<?php echo $fila['IDPRODUCTO']; ?>" method="post" enctype="multipart/form-data">
    <div class="site-wrap">
    <?php include("../../Vista/diseño/layouts/header.php"); ?> 
        <div class="container">
            <div>
              <h2 class="txtactualizar"> Actualizar</h2>
            </div>
            <div class="tabla col-md-6 mb-5 mb-md-0">
                <div class="p-3 p-lg-5 border">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="c_fname" class="text-black" >Id Producto <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" 
                                placeholder="<?php echo $fila['IDPRODUCTO']; ?>"  id="id" name="id">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="c_fname" class="text-black" >Nombre Planta <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nameproducto" name="nameproducto" value="<?php echo $fila['NOMPRODUC']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="c_companyname" class="text-black">Cantidad </label>
                            <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="<?php echo $fila['CANTIDAD']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="c_address" class="text-black">Valor unitario <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="vunitario" name="vunitario" value="<?php echo $fila['VUNITARIO']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group">
                            <button class="btnactualizar btn-primary btn-lg py-3 btn-block" id="actualizar" name="actualizar">Actualizar</button>
                        </div>
                    </div>
                </div>
            </form>
            <?php 
            }}
            ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
