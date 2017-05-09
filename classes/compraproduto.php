<?php
	/**
	* 
	*/
	class CompraProduto
	{
        private $Compra;
		private $Fornecedor;
        private $Produto;
		private $Qtd_prod;
		private $Nome_prod;
			

		function __construct($Compra='', $Fornecedor='', $Produto='', $Qtd_prod='', $Nome_prod='')
		{
			$this->Compra = $Compra;
            $this->Fornecedor = $Fornecedor;
            $this->Produto = $Produto;
			$this->Qtd_prod = $Qtd_prod;
            $this->Nome_prod = $Nome_prod;
        }

        public function __get($atributo)
		{
			return $this->atributo;
		}

		public function __set($atributo, $quantidade)
		{
			$this->atributo = $quantidade;
		}
		
		public function insert($InputCompra, $InputFornecedor,$InputProduto, $InputQtd_prod, $InputNome_prod){

			include("dbconnect.php");

			$query = "INSERT INTO Compra_has_produto (	Compra_cd_compra, Compra_Fornecedor_cd_fornecedor, Produto_cd_produto,	qt_produto,	nm_produto) VALUES (?,?,?,?,?)";

			$stmt = $db_conn->prepare($query);
			$stmt->bind_param("iiiis", $InputCompra, $InputFornecedor, $InputProduto, $InputQtd_prod, $InputNome_prod);

			if ($stmt->execute()){
				$this->Compra = $InputCompra;
	            $this->Fornecedor = $InputFornecedor;
	            $this->Produto = $InputProduto;
				$this->Qtd_prod = $InputQtd_prod;
	            $this->Nome_prod = $InputNome_prod;
				
			echo '<script>window.location="painel_list_compra.php?lista5&pagina=1";</script>';
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

