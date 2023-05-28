<h1>Editar Usuário</h1>
<?php
   $sql = "SELECT * FROM usuario WHERE id_usuario =".$_REQUEST["id_usuario"];
   $res = $conn->query($sql);
   $row = $res->fetch_object();
?>
<form action="?page=salvarUsuario" method="POST">
    <input type="hidden" name="acao" value="editarUsuario">
   
   <div class="mb-3">
   <label>Nome</label>
   <input type="text" name="nome_usuario" value="<?php print $row->nome_usuario; ?>" class="form-control">
  </div>

  <div class="mb-3">
   <label>Data Cadastro</label>
   <input type="date" name="dt_cadastro" value="<?php print $row->dt_cadastro; ?>" class="form-control">
  </div>
  <div class="mb=3">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>  
</form>
