<?php

require 'vendor/autoload.php';
require('fornecedor/Fornecedor.php');

use Fornecedor\Fornecedor;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$provider = new Fornecedor();

$provider->inserirFornecedor($_POST['inputNome'], $_POST['inputTelefone'], $_POST['inputEstado'], $_POST['inputCidade']);
$provider->mostrarFornecedor();