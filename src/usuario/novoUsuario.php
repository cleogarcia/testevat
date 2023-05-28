<h1>Novo Usuário</h1>
<form action="?page=salvarUsuario" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
 
  <!--div class="mb-3">
   <label>Id</label>
   <input type="text" name="id_usuario" class="form-control">
  </div-->

  <div class="mb-3">
   <label>Nome</label>
   <input type="text" name="nome_usuario" class="form-control">
  </div>

  <div class="mb-3">
   <label>Data Cadastro</label>
   <input type="date" name="dt_cadastro" class="form-control">
  </div>
  <div class="mb=3">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>  

</form>