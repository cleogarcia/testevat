<h1>Editar Cliente</h1>
<?php
   $sql = "SELECT * FROM cliente WHERE id_cliente =".$_REQUEST["id_cliente"];
   $res = $conn->query($sql);
   $row = $res->fetch_object();
?>
<form action="?page=salvarCliente" method="POST">
    <input type="hidden" name="acao" value="editarCliente">
    <input type="hidden" name="id_cliente" value="<?php print $row->id_cliente; ?>">
   
   <div class="mb-3">
   <label>Nome</label>
   <input type="text" name="nome_cliente" value="<?php print $row->nome_cliente; ?>" class="form-control">
  </div>

  <div class="mb-3">
   <label>Data Cadastro</label>
   <input type="date" name="dt_cadastro" value="<?php print $row->dt_cadastro; ?>" class="form-control">
  </div>
  <div class="mb=3">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>  
</form>
