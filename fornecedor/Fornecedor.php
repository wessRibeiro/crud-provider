<?php

namespace Fornecedor;
require('DB.php');
use Fornecedor\DB;

class Fornecedor {
   public $tabela;
   public $conexaoDB;

   public function __construct() {
      $this->conexaoDB = new DB();
      $this->tabela = "fornecedor ";
   }

   // Inserir Dados Fornecedor
    public function inserirFornecedor(string $nome, int $telefone, string $estado, string $cidade): void {
      $query = "INSERT INTO 
                    {$this->tabela} 
                    (
                        `nome`, 
                        `telefone`, 
                        `estado`, 
                        `cidade`
                    ) 
                VALUES 
                    (
                        '{$nome}', 
                        {$telefone}, 
                        '{$estado}', 
                        '{$cidade}'
                    )";
        //die(var_dump($query));
      $this->conexaoDB->ExecutaQuery($query);
   }

   // Mostra dados da tabela de dados Fornecedor
   public function mostrarFornecedor() {
       $query = "SELECT * FROM  {$this->tabela}";
       $result = $this->conexaoDB->ExecutaQuery($query);
       while ($row = mysqli_fetch_array($result)) {
           echo "ID: ".$row['id']."<br>";
           echo "Nome: ".$row['nome']."<br>";
           echo "Telefone: ".$row['telefone']."<br>";
           echo "Estado: ".$row['estado']."<br>";
           echo "Cidade: ".$row['cidade']."<br>";
           echo "<br>";
       }
   }

}