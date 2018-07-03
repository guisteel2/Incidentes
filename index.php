<?php
 $con=new mysqli("localhost","root","","atender");

 //para grid"
 $conexao = mysqli_connect('localhost','root','');
 $banco   = mysqli_select_db($conexao,'atender');
 $resultados= mysqli_query($conexao,"SELECT * from incidente") or die ("erro");
 $linha =mysqli_num_rows($resultados);
?>
<!DOCTYPE html>
<html lang="bt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>


  </head>
  <body>
    <div class="jumbotron">
      <h1 align="center">Procedimento de Incidentes</h1>
    <div class="container">
      <div class="row">
        <div id="CadastroCliente">
          <h3 align="center">Cadastro de Cliente</h3>
        <div class="col-sm">
          <table class="table table-hover">
            <form method="POST" action="CadastroCliente.php">
            <tr>
              <td>Cliente:</td>
              <td><input type="text" name="nome" id="name" value="" placeholder="Digite o nome completo"></td>
            </tr>
            <tr>
              <td>Empresa:</td>
              <td><input type="text" name="empresa" value="" placeholder="Nome da sua empresa"></td>
            </tr>
            <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" value="Cadastrar"></td>
            </tr>
          </form>
          </table>
        </div>
        </div>

        <div id="modifica">
          <h3 align="center">Cadastro de Atendente</h3>
        <div class="col-sm">

          <table class="table table-hover">
              <form method="POST" action="cadastroAtendentes.php">
            <tr>
              <td>Atendentes:</td>
              <td><input type="text" name="nome" placeholder="Digite o nome completo"></td>
            </tr>
            <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" value="Cadastrar"></td>
            </tr>
            </form>
          </table>

        </div>
      </div>


      <div id="modifica">
        <h3 align="center">Cadastro de Incidentes</h3>
        <div class="col-sm">
          <table class="table table-hover">
            <form method="POST" action="CadastroIncidente.php">
              <tr>
                <td aling="center"><label for="select">Atendentes:</label>
                  <select nome ="nomeAtendente">
                    <option value="">Selecione o Atendente</option>
                    <?php
                    $sql="select *from atendentes";
                    $res=$con->query($sql);
                    while ($row=$res->fetch_assoc()) {
                      echo "<option value='{$row[id]}'>
                      {$row["nome"]}</option>";
                    }
                     ?>
                  </select>

              </td>
              </tr>

              <td><label for="select">Cliente:</label>
                <select nome ="nomeCliente" >
                  <option value="">Selecione o Cliente</option>
                  <?php
                  $sql="select *from clientes";
                  $res=$con->query($sql);
                  while ($row=$res->fetch_assoc()) {
                    echo "<option value='{$row[id]}'>
                    {$row["nome"]}</option>";
                  }
                   ?>
                </select>
            </td>

          <tr>
            <td>Descrição:</td>
              <td><input type="text" name="descricao" placeholder="Digite o nome da Empresa"></td>
          </tr>
           <tr>
            <td>Status:</td>
             <td><input type="text" class ="form-control" name="status" placeholder="Digite o nome da Empresa"></td>
            </tr>
            <td colspan="2" align="center"><input type="submit" name="submit" value="Cadastrar"></td>
          </table>
        </form>
        </div>
      </div>
      </div>
    </div>


    <div class="container theme-showcase" role="main">
     <div class="page-header">
       <h1 aling="center">Lista de Incidentes</h1>
     </div>
     <div class="row">
       <div class="col-md-12">
         <table class="table">
           <thead>
             <tr>
               <th>ID</th>
               <th>Nome do Atendente</th>
               <th>Nome do Cliente</th>
               <th>Descrição</th>
               <th>Status</th>
               <th>Data da Criação</th>
             </tr>
           </thead>
           <tbody>
       <?php
         while($linha = mysqli_fetch_assoc($resultados)){
           echo "<tr>";
             echo "<td>".$linha['id']."</td>";
             echo "<td>".$linha['atendenteINT']."</td>";
             echo "<td>".$linha['clienteINT']."</td>";
             echo "<td>".$linha['descricao']."</td>";
             echo "<td>".$linha['status']."</td>";
             echo "<td>".$linha['creatin_time']."</td>";
             echo "<td>Editar - Visualizar - Apagar</td>";//Para implementar quando arrumar o insert do incidente
           echo "</tr>";
         }
       ?>
           </tbody>
         </table>
       </div>
   </div>
   </div>
     </div>
  </body>
</html>
