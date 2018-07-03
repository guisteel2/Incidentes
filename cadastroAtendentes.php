<?php
include("conexao.php");

$nome_atendente =ucwords($_POST["nome"]);

$in = mysqli_query($conexao,"insert into atendentes(nome) value ('$nome_atendente')") or die ("Erro");
echo "Cadastro Realizado com sucesso";


echo '<meta http-equiv="refresh" content="0;URL=index.php" />';
 ?>
