<?php
$conexao = mysqli_connect('localhost','root','');
$banco   = mysqli_select_db($conexao,'atender');

/*$sql     = mysqli_query($conexao,"SELECT * from incidente") or die ("erro");

$con=mysqli_fetch_assoc($sql);

if(!$con){
  die("falha de Concexao".mysqli_connect_error());
}else {
  //echo "Conexao Pronta";
  $result = $sql;
  $n= mysqli_num_rows($result);
  echo '<br>';

  if(!$result){
    echo "Erro com busca";
  }else {
    for ($i=0; $i <$n ; $i++) {
      $dados[] = mysqli_fetch_assoc($result);
        }

        echo json_encode($dados, JSON_PRETTY_PRINT);

  }}
*/


 ?>
