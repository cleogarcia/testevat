<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
     
    <title>Serviços</title>
    
  </head>
  <body>
  
    <!--inicio do nave bar -->  
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <!--a class="navbar-brand" href="#">Ordem Serviço</a-->
      <a class="nav-link active" aria-current="page" href="index.php">  <img src="img/home.png" width="30;" alt="Minha Imagem"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <!--a class="nav-link active" aria-current="page" href="index.php">  <img src="img/home.png" width="30;" alt="Minha Imagem"></a-->
        </li> 
<!-- menu usuario--->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuário
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=novoUsuario">Novo Usuário</a></li>
            <li><a class="dropdown-item" href="?page=listarUsuario">Listar Usuário</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="index.php">sair</a></li>
          </ul>
        </li>
<!-- menu cliente---> 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cliente
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=novoCliente">Novo Cliente</a></li>
            <li><a class="dropdown-item" href="?page=listarCliente">Listar Cliente</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="index.php">sair</a></li>
          </ul>
        </li>
<!-- menu ordem serviço--->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ordem Serviço
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=novoOServico">Nova Ordem Serviço</a></li>
            <li><a class="dropdown-item" href="?page=listarOServico">Listar Ordem Serviço</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="index.php">sair</a></li>
          </ul>
        </li>

      </ul>     
    </div>
  </div>
</nav> 
<!--nosso php dentro container-->
<div class="container">
  <div class="row">
    <div class ="col mt-5">
      <?php 
        include("config.php");
        switch(@$_REQUEST["page"]){
          //------usuario--------------------
          case "novoUsuario":
            include("src/usuario/novoUsuario.php");
          break;
          case "listarUsuario":
            include("src/usuario/listarUsuario.php");
          break;
          case "salvarUsuario":
            include("src/usuario/salvarUsuario.php");
            break;
          case "editarUsuario":
              include("src/usuario/editarUsuario.php");
          break;
          //------cliente--------------------
          case "novoCliente":
            include("src/cliente/novoCliente.php");
          break;
          case "listarCliente":
            include("src/cliente/listarCliente.php");
          break;
          case "salvarCliente":
            include("src/cliente/salvarCliente.php");
            break;
          case "editarCliente":
              include("src/cliente/editarCliente.php");
          break;

           //------serviço--------------------
           case "novoOServico":
            include("src/ordem_servico/novoOServico.php");
          break;
          case "listarOServico":
            include("src/ordem_servico/listarOServico.php");
          break;
          case "salvarOServico":
            include("src/ordem_servico/salvarOServico.php");
            break;
          case "editarOServico":
              include("src/ordem_servico/editarOServico.php");
          break;

          default:
          echo '<div style="text-align: center;">';
          echo '<h1>Bem Vindo</h1>';
          echo '</div>';
           
          echo '<div style="position: relative; display: flex; justify-content: center; width: 100%;">
                <img src="img/dservico.png" width="200" alt="Minha Imagem" style="position: absolute; opacity: 0.5;">
                </div>';

        }   
      ?>
      
    </div>
  </div>
</div>   
    <script src="js/bootstrap.bundle.min.js">      
    </script>

  </body>
</html>
