<h1>Listar Usuário</h1>
<?php
   $sql = "SELECT * FROM usuario";

   $res = $conn->query($sql);
   
   $qtd = $res->num_rows;

   if($qtd> 0){
    print "<table class='table table_hover table-striped table+bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome Usuário</th>";
        print "<th>Data Cadastro</th>";
        print "<th>Açoes</th>";
        print"</tr>";
      while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>".$row->id_usuario."</td>";
        print "<td>".$row->nome_usuario."</td>";
        print "<td>".$row->dt_cadastro."</td>";
        print "<td>
               <button onclick=\"location.href='?page=editarUsuario&id_usuario=".$row->id_usuario."';\" class='btn 
                btn-success'>Editar</button>

               <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href=
                '?page=salvarUsuario&acao=excluirUsuario&id_usuario=".$row->id_usuario."';}else{false;}\"class='btn btn-danger'>Excluir</button>
               </td>";
        print"</tr>";
      }
      print "</table>";
   }else{
    print "<p class='alert alert-danger'> Não encotrou resultado</p>";
   }
?>