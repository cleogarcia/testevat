<h1>Editar Ordem Serviço</h1>
<?php
   $sql = "SELECT * FROM os WHERE id_os =".$_REQUEST["id_os"];
   $res = $conn->query($sql);
   $row = $res->fetch_object();
?>
<form action="?page=salvarOServico" method="POST">
    <input type="hidden" name="acao" value="editarOServico">
    <input type="hidden" name="id_os" value="<?php print $row->id_os; ?>">

    <div class="mb-3">
     <label>Cliente</label>
     <input type="text" name="id_cliente" value="<?php print $row->id_cliente; ?>" class="form-control" readonly="readonly">
    </div>
   
    <div class="mb-3">
     <label>Serviço</label>
     <input type="text" name="nome_servico" value="<?php print $row->nome_servico; ?>" class="form-control">
    </div>

    <div class="mb-3">
     <label>Descrição Serviço</label>
     <input type="text" name="desc_servico" value="<?php print $row->desc_servico; ?>" class="form-control">
    </div>

    <div class="mb-3">
     <label>Situação</label>
     <input type="text" name="tx_situacao" value="<?php print $row->tx_situacao; ?>" class="form-control">
    </div>
    <div class="mb-3">
     <label>Usuario</label>
     <input type="text" name="id_usuario" value="<?php print $row->id_usuario; ?>" class="form-control" readonly="readonly">
    </div>
    <div class="mb-3"style="display:none">
     <label>Data Cadastro</label>
     <input type="date" name="dt_cadastro" value="<?php print $row->dt_cadastro; ?>" class="form-control">
    </div>
    <div class="mb-3" style="display: nome">
     <label>Data Atualização</label>
     <input type="date" name="dt_atualizacao" value="<?php print $row->dt_atualizacao; ?>" class="form-control">
     </div>

  <div class="mb=3">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>  
</form>
