<?php
include "incs/topo.php";
?>



<body>
    <h1>Produtos</h1>
    <?php
    require_once "src/ProdutoDAO.php";
    $produtos = ProdutoDAO::consultarCategoria($_GET['categoria']);

    foreach ($produtos as $produto) {
    ?>
        <div class="col mb-3">
            <img id="imgProduto" src='data:image/jpeg;base64,<?= base64_encode(string: $produto['imagem']) ?>'>
            <h3 class="<?= $produto['nome'] ?>"><?= $produto['nome'] ?></h3>
            <h3 class="<?= $produto['preco'] ?>"><?= $produto['preco'] ?></h3>


            <a href="comprar.php" class="btn btn-success">
                Comprar
            </a>
        </div>

    <?php
    }
    ?>


</body>

<?php
include "incs/rodape.php";
?>