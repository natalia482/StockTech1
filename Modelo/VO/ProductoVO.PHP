<?php 

/**
 * 
 */
class Producto{

		private $IDPRODUCTO;
		private $TIPOPLANTA;
		private $NOMPRODUC;
		private $NUMBOLSA;
		private $VUNITARIO;
		private $CANTIDAD;
		private $ESTADO;


	

		/**
		 * Get the value of IDPRODUCTO
		 */ 
		public function getIDPRODUCTO()
		{
				return $this->IDPRODUCTO;
		}

		/**
		 * Set the value of IDPRODUCTO
		 *
		 * @return  self
		 */ 
		public function setIDPRODUCTO($IDPRODUCTO)
		{
				$this->IDPRODUCTO = $IDPRODUCTO;

				return $this;
		}

		/**
		 * Get the value of TIPOPLANTA
		 */ 
		public function getTIPOPLANTA()
		{
				return $this->TIPOPLANTA;
		}

		/**
		 * Set the value of TIPOPLANTA
		 *
		 * @return  self
		 */ 
		public function setTIPOPLANTA($TIPOPLANTA)
		{
				$this->TIPOPLANTA = $TIPOPLANTA;

				return $this;
		}

		/**
		 * Get the value of NOMPRODUC
		 */ 
		public function getNOMPRODUC()
		{
				return $this->NOMPRODUC;
		}

		/**
		 * Set the value of NOMPRODUC
		 *
		 * @return  self
		 */ 
		public function setNOMPRODUC($NOMPRODUC)
		{
				$this->NOMPRODUC = $NOMPRODUC;

				return $this;
		}

		/**
		 * Get the value of NUMBOLSA
		 */ 
		public function getNUMBOLSA()
		{
				return $this->NUMBOLSA;
		}

		/**
		 * Set the value of NUMBOLSA
		 *
		 * @return  self
		 */ 
		public function setNUMBOLSA($NUMBOLSA)
		{
				$this->NUMBOLSA = $NUMBOLSA;

				return $this;
		}

		/**
		 * Get the value of VUNITARIO
		 */ 
		public function getVUNITARIO()
		{
				return $this->VUNITARIO;
		}

		/**
		 * Set the value of VUNITARIO
		 *
		 * @return  self
		 */ 
		public function setVUNITARIO($VUNITARIO)
		{
				$this->VUNITARIO = $VUNITARIO;

				return $this;
		}

		/**
		 * Get the value of CANTIDAD
		 */ 
		public function getCANTIDAD()
		{
				return $this->CANTIDAD;
		}

		/**
		 * Set the value of CANTIDAD
		 *
		 * @return  self
		 */ 
		public function setCANTIDAD($CANTIDAD)
		{
				$this->CANTIDAD = $CANTIDAD;

				return $this;
		}

		/**
		 * Get the value of ESTADO
		 */ 
		public function getESTADO()
		{
				return $this->ESTADO;
		}

		/**
		 * Set the value of ESTADO
		 *
		 * @return  self
		 */ 
		public function setESTADO($ESTADO)
		{
				$this->ESTADO = $ESTADO;

				return $this;
		}
}





 ?>