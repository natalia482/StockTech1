<?php
	//inicio de sesion
    session_start();
    require_once('../../Modelo/Conexion/conexion.php');
	require_once('../../Modelo/VO/ClienteVO.php');
	require_once('../../Modelo/DAO/ClienteDAO.php');


	$usuario=new Usuario();
	$crud=new CrudUsuario();

	if (isset($_POST['entrar'])) {
    	$usuario->setUSUARIOCLIENTE($_POST['usuario']);	
    	$usuario->setCONTRASENACLIENTE($_POST['pas']);
        $result = $crud->obtenerUsuario($_POST['usuario'],$_POST['pas']);
        
		if ($result['ROL'] == "CLIENTE") {
			if (password_verify($_POST['pas'],$result['CONTRASENACLIENTE'])) {

			    $_SESSION['UserCli'] = $result['USUARIOCLIENTE'];
			    $_SESSION['pasClie'] = $result['CONTRASENACLIENTE'];
			   $_SESSION['userid'] = $result['IDCLIENTE'];
				header('Location: ../../Vista/VistaCliente/Menu.php');
			}else{
				session_destroy();
   	        		echo "<script type='text/javascript'>alert('Usuario o contraseñas incorrectas')
			window.location.href='../../VISTA/VISTACLIENTE/IngresoCliente.php';
			</script>";

			}			
		}else{
			session_destroy();
   	        echo "<script type='text/javascript'>alert('Usuario o contraseñas incorrectas')
			window.location.href='../../VISTA/VISTACLIENTE/IngresoCliente.php';
			</script>";
		}	
	}
?>