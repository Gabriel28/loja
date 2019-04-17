<?php include("cabecalho.php"); ?>

<?php
$nome = $_GET["nome"];
$preco = $_GET["preco"];
$conexao = mysqli_connect('localhost', 'root', '', 'loja');

function insereProduto($conexao, $nome, $preco) {
    $query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";
    $resultadoInsercao = mysqli_query ($conexao, $query);
    return $resultadoInsercao;
}

?>

<?php
if(insereProduto($conexao, $nome, $preco)) {
?>
<p class="text-success">Produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!</p>
<?php
} else {
    $msg = mysqli_error($conexao);
?>
<p class="text-danger">O produto <? = $nome; ?> não foi adicionado: <?= $msg ?></p>
<?php
}
?>

<?php include("rodape.php"); ?>
