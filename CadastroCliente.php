<?php
include("conexao.php");

$nome_usuario =ucwords($_POST["nome"]);
$nome_empresa =ucwords($_POST["empresa"]);
//echo "$nome_usuario - $nome_empresa";//test coma ver se vai

$in = mysqli_query($conexao,"insert into clientes(nome, empresa) value ('$nome_usuario','$nome_empresa')") or die ("Erro");
echo "Cadastro Realizado com sucesso";

echo '<meta http-equiv="refresh" content="0;URL=index.php" />';
 ?>
