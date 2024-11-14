<?php
require_once "src/ProdutoDAO.php";
ProdutoDAO::cadastrarProduto();
header("location:sucesso.php");
