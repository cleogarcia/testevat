<?php
switch($_REQUEST["acao"]){

  case 'cadastrar':  
    $nome_cliente = $_POST["nome_cliente"];
    $dt_cadastro = $_POST["dt_cadastro"];   
    
    $sql = "INSERT INTO cliente (nome_cliente, dt_cadastro)VALUES('{$nome_cliente}','{$dt_cadastro}')" ;
    $res = $conn->query($sql);

    if($res==true){
        print "<script> alert('Cadastrado com sucesso');</script>";
        print "<script>location.href='?page=\listarCliente';</script>";
    }else{
        print "<script> alert('Não foi possível cadastrar');</script>";
        print "<script> location.href='?page=listarCliente';</script>";
    }
  break;  
  //-----------------------------------------------------
  case 'editarCliente':
    $nome_cliente = $_POST["nome_cliente"];
    $dt_cadastro = $_POST["dt_cadastro"]; 
    
    $sql = "UPDATE cliente SET nome_cliente = '{$nome_cliente}', dt_cadastro = '{$dt_cadastro}'
                       WHERE id_cliente= ".$_REQUEST["id_cliente"];
    $res = $conn->query($sql);

    if($res==true){
        print "<script> alert('Editado com sucesso');</script>";
        print "<script>location.href='?page=listarCliente';</script>";
    }else{
        print "<script> alert('Não foi possível editar');</script>";
        print "<script> location.href='?page=listarCliente';</script>";
    }
  break;
//------------------------------------------------------------
  case 'excluirCliente':
    $sql = "DELETE FROM cliente WHERE id_cliente=".$_REQUEST["id_cliente"];
    $res = $conn->query($sql);

    if($res==true){
        print "<script> alert('Excluído com sucesso');</script>";
        print "<script>location.href='?page=listarCliente';</script>";
    }else{
        print "<script> alert('Não foi possível excluir');</script>";
        print "<script> location.href='?page=listarCliente';</script>";
    }
  break;

}


