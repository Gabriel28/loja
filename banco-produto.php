<?php 
include ("cabecalho.php");
include ("conecta.php");

function listaProdutos($conexao){
    $produtos = array();
    $resultado = mysqli_query($conexao, "select * from produtos");

    while($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
    }

    return $produtos;
}

function insereProduto($conexao, $nome, $preco) {
    $query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";
    $resultadoInsercao = mysqli_query ($conexao, $query);
    return $resultadoInsercao;
}

?>
<?php include ("rodape.php"); ?>