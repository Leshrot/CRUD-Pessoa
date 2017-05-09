<?php
	/**
	* 
	*/
	class ProdutoVenda
	{
        private $Produto;
        private $Venda;
		private $Qtd_prod;
		private $Nome_prod;
		private $Vl_prod;
			

		function __construct($Venda='', $Pessoa='', $Produto='', $Qtd_prod='', $Nome_prod='')
		{
            $this->Produto = $Produto;
         	$this->Venda = $Venda;
			$this->Qtd_prod = $Qtd_prod;
            $this->Nome_prod = $Nome_prod;
            $this->Vl_prod = $Vl_prod;
        }

        public function __get($atributo)
		{
			return $this->atributo;
		}

		public function __set($atributo, $quantidade)
		{
			$this->atributo = $quantidade;
		}
		
		public function insert($InputProduto, $InputVenda, $InputNome_prod, $InputVl_Prod, $InputQtd_prod){

			include("dbconnect.php");

			$query = "INSERT INTO Produto_has_venda (Produto_cd_produto, Venda_cd_venda, nm_produto, vl_produto, qt_produto) VALUES (?,?,?,?,?)";

			$stmt = $db_conn->prepare($query);
			$stmt->bind_param("iisdi", $InputProduto, $InputVenda, $InputNome_prod, $InputVl_Prod, $InputQtd_prod);

			if ($stmt->execute()){
				$this->Venda = $InputVenda;
	            $this->Pessoa = $InputPessoa;
	            $this->Produto = $InputProduto;
				$this->Qtd_prod = $InputQtd_prod;
	            $this->Nome_prod = $InputNome_prod;
				
			echo '<script>window.location="painel_list_prvd.php?lista8&pagina=1";</script>';
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

