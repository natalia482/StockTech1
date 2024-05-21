<?php
    //inicio de sesion
        require_once('../../Modelo/Conexion/conexion.php');

    $db = DB::conectar();

    $id = $_GET['id'];
    
    $nombrepro = $_POST['nameproducto'];
    $cantidad = $_POST['cantidad'];
    $vunit = $_POST['vunitario'];

    $query = "UPDATE producto set NOMPRODUC ='$nombrepro', cantidad = '$cantidad', vunitario ='$vunit' WHERE IDPRODUCTO = '$id'";

    $resultado = $db->query($query);

    if ($resultado) {
         echo "<script type='text/javascript'>alert('El producto fue modificado exitosamente')
            window.location.href='../../Vista/VistaCliente/Listamaterial.php';
            </script>"; 
     }else{
        echo "No se pudo modifico";
     }
 
    


?>

