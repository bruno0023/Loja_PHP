<html>
    <body>
        <a href="../controller/ProdutoController.php?method=salvar">
            Testar Controlador
        </a>

        <form action="../controller/ProdutoController.php" method="POST">
            <input type="hidden" name="method" value="salvar">
            <input type="text" name="nome_produto">
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>