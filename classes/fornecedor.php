<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
	/**
	* 
	*/
	class Fornecedor
	{
		private $Cnpj;
        private $Nome;
		private $Endereco;
        private $Telefone;
		private $Email;
		

		function __construct($Cnpj='', $Nome='', $Endereco='', $Telefone='', $Email='')
		{
			$this->Cnpj = $Cnpj;
            $this->Nome = $Nome;
            $this->Endereco = $Endereco;
			$this->Telefone = $Telefone;
			$this->Email = $Email;
			
            }

		# cd_fornecedor, cd_cnpj_fornecedor, nm_fornecedor, ds_endereco_fornecedor, cd_tel_fornecedor, ds_email

		public function __get($atributo)
		{
			return $this->atributo;
		}

		public function __set($atributo, $valor)
		{
			$this->atributo = $valor;
		}


		// INSERE TODAS AS COLUNAS DA TABELA FORNECEDOR
		public function insert($InputCnpj, $InputNome, $InputEndereco, $InputTelefone, $InputEmail){

			include("dbconnect.php");

			$query = "INSERT INTO Fornecedor (cd_cnpj_fornecedor, nm_fornecedor, ds_endereco_fornecedor, cd_tel_fornecedor, ds_email) VALUES (?,?,?,?,?)";

			$stmt = $db_conn->prepare($query);
			$stmt->bind_param("issis", $InputCnpj, $InputNome, $InputEndereco, $InputTelefone, $InputEmail);

			if ($stmt->execute()){
				$this->Cnpj = $InputCnpj;
				$this->Nome = $InputNome;
				$this->Endereco = $InputEndereco;
				$this->Telefone = $InputTelefone;
				$this->Email = $InputEmail;

			echo '<script>window.location="painel_list_forn.php?lista=2";</script>';
			$stmt->close();
			$db_conn->close();
			return true; // Execução com sucesso
			}
		print_r($stmt->error);
		print_r($stmt->errno);
		$stmt->close();
		$db_conn->close();
        return false; // Erro na execução
        }

		// CONSULTA E EXIBE TODAS AS LINHAS DA TABELA FORNECEDOR
        public function select(){

			include("dbconnect.php");

        	$query = "SELECT * FROM Fornecedor";

        	$stmt = $db_conn->prepare($query);
        	if($stmt->execute()) {
        		$stmt->bind_result($cd_forn, $cnpj_forn, $nome_forn, $endereco_forn, $tel_forn, $email_forn);

				// EXIBE PESSOA
        		while($stmt->fetch()) {
        			printf("<tr>");
        			printf("<td>" .
        				$cd_forn
        				. "</td><td>" . 
        				$cnpj_forn
        				. "</td><td>" . 
        				$nome_forn
        				. "</td><td>" . 
        				$endereco_forn
        				. "</td><td>" . 
        				$tel_forn
        				. "</td><td>" . 
        				$email_forn
        				. "</td><td>" .
        				"<button onclick="."confirm_modal('deletar.php?cd_forn=".$cd_forn."')> APAGAR </button>"
        				. " | " .
        				"<button href='#update_forn' data-id=".$cd_forn." data-toggle='modal' data-target='#update_forn' class='modalLink'> ALTERAR </button>"
        				);
        			printf("<tr>");
        			}
        	$stmt->close();
        	$db_conn->close();
			return true; // Execução com sucesso
			}
		$stmt->error;
		$stmt->errno;
		$stmt->close();
		$db_conn->close();
		return false; // Erro na execução
		}       

		// ALTERA DADOS DA LINHA SELECIONADA
	public function update($InputCnpj, $InputNome, $InputEndereco, $InputTelefone, $InputEmail, $InputCd){

			include("dbconnect.php");

			$query = "UPDATE Fornecedor SET cd_cnpj_fornecedor = ?, nm_fornecedor = ?, ds_endereco_fornecedor = ?, cd_tel_fornecedor = ?, ds_email = ? WHERE cd_fornecedor = ?";

			$stmt = $db_conn->prepare($query);

			$stmt->bind_param("issisi", $InputCnpj, $InputNome, $InputEndereco, $InputTelefone, $InputEmail, $InputCd);

			if($stmt->execute()) {
				$stmt->close();
				$db_conn->close();
				echo '<script>window.location="painel_list_forn.php?lista=2";</script>';
			return true; // Execução com sucesso
			}

		$stmt->error;
		$stmt->errno;
		$stmt->close();
		$db_conn->close();
		echo "A alteração falhou";
		return false; // Erro na execução
		}		

		public function delete($Id){

			include("dbconnect.php");

			$query = "DELETE FROM Fornecedor WHERE cd_fornecedor = ?";
			$stmt = $db_conn->prepare($query);
			$stmt->bind_param("i", $Id);

			if($stmt->execute()) {
				$stmt->close();
				$db_conn->close();
				echo '<script>window.location="painel_list_forn.php?lista=2";</script>';
			return true; // Execução com sucesso
			}

		$stmt->error;
		$stmt->errno;
		$stmt->close();
		$db_conn->close();
		return false; // Erro na execução
		}
	}
?>