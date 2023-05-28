<?php
switch($_REQUEST["acao"]){

  case 'cadastrar':      
    $id_cliente = $_POST['id_cliente'];
    $nome_servico = $_POST['nome_servico'];
    $desc_servico = $_POST['desc_servico'];    
    $tx_situacao = $_POST['tx_situacao'];
    $id_usuario = $_POST['id_usuario'];
    $dt_cadastro = $_POST['dt_cadastro'];
    $dt_atualizacao = $_POST['dt_atualizacao']; 
    
    $sql = "INSERT INTO os (dt_cadastro, id_usuario, tx_situacao, id_cliente, nome_servico, desc_servico, dt_atualizacao)
    VALUES( '{$dt_cadastro}','{$id_usuario}','{$tx_situacao}',
            '{$id_cliente}','{$nome_servico}','{$desc_servico}','{$dt_atualizacao}' )" ;

    $res = $conn->query($sql);
    
   //echo "Error executing the query: " . $conn->error;

    if($res==true){
        print "<script> alert('Cadastrado com sucesso');</script>";
        print "<script>location.href='?page=\listarOServico';</script>";
    }else{
        print "<script> alert('Não foi possível cadastrar');</script>";
        print "<script> location.href='?page=listarOServico';</script>";
    }
  break;  
  //-----------------------------------------------------
  case 'editarOServico':
    $id_cliente = $_POST['id_cliente'];
    $nome_servico = $_POST['nome_servico'];
    $desc_servico = $_POST['desc_servico'];    
    $tx_situacao = $_POST['tx_situacao'];
    $id_usuario = $_POST['id_usuario'];
    $dt_atualizacao = $_POST['dt_atualizacao'];    
    
    $sql = "UPDATE os SET id_cliente  = '{$id_cliente}',
                               nome_servico = '{$nome_servico}',
                               desc_servico  = '{$desc_servico}', 
                               tx_situacao  = '{$tx_situacao}', 
                               id_usuario  = '{$id_usuario}', 
                               dt_atualizacao  = '{$dt_atualizacao}'
                               
            WHERE id_os = ".$_REQUEST["id_os"];  
  
  $res = $conn->query($sql);

    if($res==true){
        print "<script> alert('Editado com sucesso');</script>";
        print "<script>location.href='?page=listarOServico';</script>";
    }else{
        print "<script> alert('Não foi possível editar');</script>";
        print "<script> location.href='?page=listarOServico';</script>";
    }
  break;
//------------------------------------------------------------
  case 'excluirOServico':
    $sql = "DELETE FROM os WHERE id_os=".$_REQUEST["id_os"];
    $res = $conn->query($sql);

    if($res==true){
        print "<script> alert('Excluído com sucesso');</script>";
        print "<script>location.href='?page=listarOServico';</script>";
    }else{
        print "<script> alert('Não foi possível excluir');</script>";
        print "<script> location.href='?page=listarOServico';</script>";
    }
  break;

}


