<?php
	/**
	* 
	*/
	class Ajuste
	{
		private $Data;
        private $Justificativa;
		private $Pessoa;
			

		function __construct($Data='', $Justificativa='', $Pessoa='')
		{
			$this->Data = $Data;
            $this->Justificativa = $Justificativa;
            $this->Pessoa = $Pessoa;
			
        }

        public function __get($atributo)
		{
			return $this->atributo;
		}

		public function __set($atributo, $Quantidade)
		{
			$this->atributo = $Quantidade;
		}
		
		public function insert($InputData, $InputJustificativa, $InputPessoa){

			include("dbconnect.php");

			$query = "INSERT INTO Ajuste (dt_ajuste,	ds_justificativa, Pessoa_cd_pessoa) VALUES (?,?,?)";

			$stmt = $db_conn->prepare($query);
			$stmt->bind_param("ssi", $InputData, $InputJustificativa, $InputPessoa);

			if ($stmt->execute()){
				$this->Data = $InputData;
	            $this->Justificativa = $InputJustificativa;
	            $this->Pessoa = $InputPessoa;
				
			echo '<script>window.location="painel_list_ajuste.php?lista7&pagina=1";</script>';
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

