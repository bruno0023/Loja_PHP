<?php
require "model\\Produto.php";
require "controller\ProdutoController.php";

use controller\ProdutoController;
use model\Produto;
// cria o controlador para poder armazenar no banco 
$produtoController = new ProdutoController();
//cria o produto que vai ser armazenado
$produto = new Produto();

//passa para o conotroller armazenar o produto
$produtoController->salvar($produto);



?>