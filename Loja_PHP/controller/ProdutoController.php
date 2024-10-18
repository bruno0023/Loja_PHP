<?php

// Identifica a requisição e o parâmetro na URL
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["method"])) {
    $method = $_GET["method"];
    // Verifica se no controlador tem a função chamada
    if (method_exists("ProdutoController", $method)) {
        // Cria o objeto do controlador
        $produtoController = new ProdutoController();
        // Chama a função que foi selecionada
        $produtoController->$method($_GET);
    } else {
        echo "Método não existe";
    }
} else if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["method"])) {
    $method = $_POST["method"];
    // Verifica se no controlador tem a função chamada
    if (method_exists("ProdutoController", $method)) {
        // Cria o objeto do controlador
        $produtoController = new ProdutoController();
        // Chama a função que foi selecionada
        $produtoController->$method($_POST);
    } else {
        echo "Método não existe";
    }
}
class ProdutoController{

    public function index(){
        
    }
    public function salvar(){
        echo "Acerteiii";
    }
}

?>