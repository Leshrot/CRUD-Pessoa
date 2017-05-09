<?php
	/**
	* 
	*/
	class Compra
	{
		private $Data;
        private $Pagamento;
		private $Fornecedor;
			

		function __construct($Data='', $Pagamento='', $Fornecedor='')
		{
			$this->Data = $Data;
            $this->Pagamento = $Pagamento;
            $this->Fornecedor = $Fornecedor;
			
        }

        public function __get($atributo)
		{
			return $this->atributo;
		}

		public function __set($atributo, $quantidade)
		{
			$this->atributo = $quantidade;
		}
		
		public function insert($InputData, $InputPagamento, $InputFornecedor){

			include("dbconnect.php");

			$query = "INSERT INTO Compra (dt_compra,	ds_pagamento_compra, Fornecedor_cd_fornecedor) VALUES (?,?,?)";

			$stmt = $db_conn->prepare($query);
			$stmt->bind_param("ssi", $InputData, $InputPagamento, $InputFornecedor);

			if ($stmt->execute()){
				$this->Data = $InputData;
	            $this->Pagamento = $InputPagamento;
	            $this->Fornecedor = $InputFornecedor;
				
			echo '<script>window.location="painel_list_compra.php?lista4&pagina=1";</script>';
			$stmt->close();
			$db_conn->close();
			return true; // Execução com sucesso
			}
		print_r($stmt->error);
		print_r($stmt->errno);
		$stmt->close();
		$db_conn->close();
        return false; // Falha na execução
        }

	}

?>

