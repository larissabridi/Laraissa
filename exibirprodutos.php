<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Produtos</h1>
    <br><br><br>
    <?php
        require_once "src/ProdutoDAO.php";
        $produtos = ProdutoDAO::consultarCategoria(4);

        foreach ($produtos as $produto) {
            echo "<img src='data:image/jpeg;base64,".base64_encode($produto['imagem'])."'>";            
            echo "<br>";
            echo $produto['nome'];
            echo "<br><br>";
        }
    ?>
</body>
</html>