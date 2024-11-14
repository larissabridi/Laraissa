<?php
require_once "ConexaoBD.php";
require_once "funcoes.php";

class ProdutoDAO {
 
    static function cadastrarProduto() {    
        $nome = $_POST["nome"];
        $categoria = $_POST["categoria"];
        $preco = $_POST["preco"];
        $imagem = pegarImagem($_FILES);

        $sql = "INSERT INTO PRODUTO (nome, categoria, preco, imagem) VALUES ('$nome', '$categoria', '$preco', '$imagem')";
        $conexao = ConexaoBD::getConexao();
        $conexao->exec($sql);
      
    }

    static function consultarProdutos() {
        $sql = "SELECT * FROM produto";
        $conexao = ConexaoBD::getConexao();
        $produto = $conexao->query($sql);
        return $produto->fetchAll(PDO::FETCH_ASSOC);
    }

    static function consultarCategoria($categoria) {
        $sql = "SELECT * FROM produto where categoria=$categoria";
        $conexao = ConexaoBD::getConexao();
        $produto = $conexao->query($sql);
        return $produto->fetchAll(PDO::FETCH_ASSOC);
    }

    static function consultarProdutoPorId($idproduto) {
        $sql = "SELECT * FROM produto WHERE idproduto = $idproduto";
        $conexao = ConexaoBD::getConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':idproduto', $idproduto, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    
}
