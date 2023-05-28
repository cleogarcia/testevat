<h1>Listar Cliente</h1>
<?php
   $sql = "SELECT * FROM cliente";

   $res = $conn->query($sql);
   
   $qtd = $res->num_rows;

   if($qtd> 0){
    print "<table class='table table_hover table-striped table+bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome Cliente</th>";
        print "<th>Data Cadastro</th>";
        print "<th>Ações</th>";
        print"</tr>";
      while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>".$row->id_cliente."</td>";
        print "<td>".$row->nome_cliente."</td>";
        print "<td>".$row->dt_cadastro."</td>";
        print "<td>
               <button onclick=\"location.href='?page=editarCliente&id_cliente=".$row->id_cliente."';\" class='btn 
                btn-success'>Editar</button>

               <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href=
                '?page=salvarCliente&acao=excluirCliente&id_cliente=".$row->id_cliente."';}else{false;}\"class='btn btn-danger'>Excluir</button>
               </td>";
        print"</tr>";
      }
      print "</table>";
   }else{
    print "<p class='alert alert-danger'> Não encotrou resultado</p>";
   }
?>