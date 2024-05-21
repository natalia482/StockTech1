<?php
    require_once('../../Modelo/Conexion/conexion.php');
	require_once('../../Modelo/VO/ProductoVO.php');
	require_once('../../Modelo/DAO/ProductoDAO.php');


$db = DB::conectar();

$producto = new Producto();
$crud = new crudProducto();


if(isset($_POST['insertar'])){

$producto ->setTIPOPLANTA($_POST['tipo']);
$producto ->setNOMPRODUC($_POST['nameproduc']);
$producto ->setNUMBOLSA($_POST['numbol']);
$producto ->setVUNITARIO($_POST['vuni']);
$producto ->setCANTIDAD($_POST['cantidad']);
$producto ->setESTADO($_POST['estado']);

if ($crud->buscarProducto($_POST['nameproduc'])){
			$crud->insertarProducto($producto);
			 header('location:../../Vista/VistaCliente/ListaMaterial.php');

		}else{
			echo "<script type='text/javascript'>alert('El producto ya existe')
			window.location.href='../../Vista/VistaCliente/RegistrarInventario.php';
			</script>";		
		}	

	}	



?>
