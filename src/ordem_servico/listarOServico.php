<h1>Listar Serviços</h1>
<?php

    $sql = "SELECT os.id_os,
                   cliente.nome_cliente,
                   os.nome_servico,
                   os.desc_servico,
                   os.tx_situacao,
                   usuario.nome_usuario,
                   os.dt_cadastro,
                   os.dt_atualizacao
    FROM os,usuario,cliente
    WHERE cliente.id_cliente = os.id_cliente
    AND usuario.id_usuario = os.id_usuario";
   $res = $conn->query($sql);   
   $qtd = $res->num_rows;

   if($qtd> 0){
    print "<table class='table table_hover table-striped table+bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Cliente</th>";
        print "<th>Serviço</th>";  //select contendo varios serviços
        print "<th>Descrição Serviço</th>";
        print "<th>Situação</th>";
        print "<th>Usuário Cadastro</th>";
        print "<th>Data Cadastro</th>";
        print "<th>Data de Atualização</th>";
        print "<th>Ações</th>";
        print"</tr>";
      while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>".$row->id_os."</td>";
        print "<td>".$row->nome_cliente."</td>";
        print "<td>".$row->nome_servico."</td>";
        print "<td>".$row->desc_servico."</td>";
        print "<td>".$row->tx_situacao."</td>";
        print "<td>".$row->nome_usuario."</td>";
        print "<td>".$row->dt_cadastro."</td>";
        print "<td>".$row->dt_atualizacao."</td>";
        print "<td>
               <button onclick=\"location.href='?page=editarOServico&id_os=".$row->id_os."';\" class='btn 
                btn-success'>Editar</button>

               <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href=
                '?page=salvarOServico&acao=excluirOServico&id_os=".$row->id_os."';}else{false;}\"class='btn btn-danger'>Excluir</button>
               </td>";
        print"</tr>";
      }
      print "</table>";
   }else{
    print "<p class='alert alert-danger'> Não encotrou resultado</p>";
   }
?>