<h1>Nova Ordem Serviço</h1>
<form action="?page=salvarOServico" method="POST">
    <input type="hidden" name="acao" value="cadastrar">


<!-- select do cliente concatenando id e nome-->
     <?php     
       $sql = "SELECT CONCAT(id_cliente, '-', nome_cliente) AS cliente FROM cliente";    
        $res = $conn->query($sql);   
        $clientes = array();

       if ($res->num_rows > 0) { while ($row = $res->fetch_assoc()) { $clientes[] = $row['cliente']; }}
     ?>
     <div style="font-family: Verdana, Geneva, sans-serif;"><font color="#FF0000">*</font>Cliente</div>
      <select name="id_cliente" id="id_cliente" class="obrigatorio" style="width: 650px;">
      <option value=""> opção...</option> <!-- Opção vazia -->
      <?php
        foreach ($clientes as $cliente) {
          $selected = ($cliente == $qtd->id_cliente) ? 'selected' : '';
           echo '<option value="' . $cliente . '" ' . $selected . '> ' . $cliente . '</option>';}
      ?>
      </select>
      <br />

<!----- O tipo do serviço----------->
    <div style="font-family:Verdana, Geneva, sans-serif; width:115px;"><font color="#FF0000">*</font>Serviço<br />
      <input type="text" name="nome_servico" id="nome_servico" style="width:650px;" />
    </div>
<!----- A descrição do serviço----------->
    <div style="font-family:Verdana, Geneva, sans-serif; width:200px;"><font color="#FF0000">*</font>Descrição Serviço
     <textarea name="desc_servico" id="desc_servico" style="width:650px; height:100px" >
     </textarea>
    </div>
<!----- A situação do serviço----------->
  <select name="tx_situacao" class="form-select" style="font-family:Verdana, Geneva, sans-serif; width:650px;" aria-label="Default select example">
      <option selected disabled>Situação</option>
      <option value="1">Andamento</option>
      <option value="2">Processando...</option>
      <option value="3">Finalizada</option>
      <option value="4">Parada</option>
  </select>
  
<!----select do usuario da tabela usuario concatenando id e nome-->
  <?php     
    $sql = "SELECT CONCAT(id_usuario, '-', nome_usuario) AS usuario FROM usuario";    
    $res = $conn->query($sql);   
    $usuarios = array();

    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
          $usuarios[] = $row['usuario'];
        }
    }
  ?>
  <div style="font-family: Verdana, Geneva, sans-serif;"><font color="#FF0000">*</font>Usuário</div>
    <select name="id_usuario" id="id_usuario" class="obrigatorio" style="width: 650px;">
    <option value=""> opção...</option> <!-- Opção vazia -->
      <?php
       foreach ($usuarios as $usuario) {
       $selected = ($usuario == $qtd->id_usuario) ? 'selected' : '';
       echo '<option value="' . $usuario . '" ' . $selected . '>' . $usuario . '</option>';}
      ?>
    </select>
<br />
<!----- Data cadastro  e Data atualizão estão oculta pois pega a data virgente ------>       

    <div class="mb-3" style="display:none">
      <label>Data Cadastro</label>
      <input type="date" name="dt_cadastro" class="form-control" style="width:325px;" value="<?php echo date('Y-m-d'); ?>">
    </div>

    <div class="mb-3" style="display:none">
     <label>Data Atualização</label>
     <input type="date" name="dt_atualizacao" class="form-control" style="width:325px; " value="<?php echo date('Y-m-d'); ?>">
    </div>  <br />

  <div class="mb=3">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>  

</form>
