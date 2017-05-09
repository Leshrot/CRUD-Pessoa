<?php
	/**
	* 
	*/
	class Venda
	{
		private $Data;
        private $Pagamento;
		private $Pessoa;
			

		function __construct($Data='', $Pagamento='', $Pessoa='')
		{
			$this->Data = $Data;
            $this->Pagamento = $Pagamento;
            $this->Pessoa = $Pessoa;
			
        }

        public function __get($atributo)
		{
			return $this->atributo;
		}

		public function __set($atributo, $quantidade)
		{
			$this->atributo = $quantidade;
		}
		
		public function insert($InputData, $InputPagamento, $InputPessoa){

			include("dbconnect.php");

			$query = "INSERT INTO Venda (dt_venda,	ds_pagamento, Pessoa_cd_pessoa) VALUES (?,?,?)";

			$stmt = $db_conn->prepare($query);
			$stmt->bind_param("ssi", $InputData, $InputPagamento, $InputPessoa);

			if ($stmt->execute()){
				$this->Data = $InputData;
	            $this->Pagamento = $InputPagamento;
	            $this->Pessoa = $InputPessoa;
				
			echo '<script>window.location="painel_list_venda.php?lista6&pagina=1";</script>';
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

