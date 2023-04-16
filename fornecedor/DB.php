<?php

namespace Fornecedor;

class DB {
    private $server;
    private $db;
    private $user;
    private $pass;
    public $conexao;

    // Construtor
    public function __construct() {
        $this->server = $_ENV[ 'DB_HOST'];
        $this->db = $_ENV[ 'DB_DATABASE'];
        $this->user = $_ENV[ 'DB_USERNAME'];
        $this->pass = $_ENV[ 'DB_PASSWORD'];
        $this->Conectar();
    }

    // Conexão
    private function Conectar(){
        $this->conexao= mysqli_connect($this->server,$this->user,$this->pass, $this->db);
        //die(var_dump($this->conexao));
        mysqli_select_db($this->conexao, $this->db) or die(mysqli_error());
    }

    // Executa query em SQL
    public function ExecutaQuery($query){
        return mysqli_query($this->conexao, $query);
    }

}