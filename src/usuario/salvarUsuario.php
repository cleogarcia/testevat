<?php
switch($_REQUEST["acao"]){

  case 'cadastrar':  
    $nome_usuario = $_POST["nome_usuario"];
    $dt_cadastro = $_POST["dt_cadastro"];   
    
    $sql = "INSERT INTO usuario (nome_usuario, dt_cadastro)VALUES('{$nome_usuario}','{$dt_cadastro}')" ;
    $res = $conn->query($sql);

    if($res==true){
        print "<script> alert('Cadastrado com sucesso');</script>";
        print "<script>location.href='?page=listarUsuario';</script>";
    }else{
        print "<script> alert('Não foi possível cadastrar');</script>";
        print "<script> location.href='?page=listarUsuario';</script>";
    }
  break;  
  //-----------------------------------------------------
  case 'editarUsuario':
    $nome_usuario = $_POST["nome_usuario"];
    $dt_cadastro = $_POST["dt_cadastro"]; 
    
    $sql = "UPDATE usuario SET nome_usuario = '{$nome_usuario}', dt_cadastro = '{$dt_cadastro}'
                       WHERE id_usuario= ".$_REQUEST["id_usuario"];
    $res = $conn->query($sql);

    if($res==true){
        print "<script> alert('Editado com sucesso');</script>";
        print "<script>location.href='?page=listarUsuario';</script>";
    }else{
        print "<script> alert('Não foi possível editar');</script>";
        print "<script> location.href='?page=listarUsuario';</script>";
    }
  break;
//------------------------------------------------------------
  case 'excluirUsuario':
    $sql = "DELETE FROM usuario WHERE id_usuario=".$_REQUEST["id_usuario"];
    $res = $conn->query($sql);

    if($res==true){
        print "<script> alert('Excluído com sucesso');</script>";
        print "<script>location.href='?page=listarUsuario';</script>";
    }else{
        print "<script> alert('Não foi possível excluir');</script>";
        print "<script> location.href='?page=listarUsuario';</script>";
    }
  break;

}


