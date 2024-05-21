<?php 
    require_once('../../Modelo/Conexion/conexion.php');
    require_once('../../Modelo/VO/ClienteVO.php');
	
	class crudProducto{

		public function __construct(){}

		//inserta producto
		public function insertarProducto($producto){
			$db=DB::conectar();
			$insert=$db->prepare('INSERT INTO PRODUCTO(IDPRODUCTO,TIPOPLANTA,NOMPRODUC,NUMBOLSA,VUNITARIO,CANTIDAD,ESTADO) VALUES(NULL, :tipo, :nameproduc, :numbol,:vuni,:cantidad,:estado)');

		    $insert->bindParam('tipo',$producto->getTIPOPLANTA());
			$insert->bindParam('nameproduc',$producto->getNOMPRODUC());
			$insert->bindParam('numbol',$producto->getNUMBOLSA());
			$insert->bindParam('vuni',$producto->getVUNITARIO());
			$insert->bindParam('cantidad',$producto->getCANTIDAD());
			$insert->bindParam('estado',$producto->getESTADO());
			$insert->execute();
		}

		
		//buscar si el producto existe
		public function buscarProducto($producto){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM producto WHERE NOMPRODUC=:nombre');
			$select->bindValue('nombre',$producto);
			$select->execute();
			$registro=$select->fetch();
			if($registro['IDPRODUCTO']!=NULL){
				$usado=False;
			}else{
				$usado=True;
			}	
			return $usado;
		}

	}
?>