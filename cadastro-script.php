<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-firt=no">
  
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>cadastro</title>
  </head>
  <body>
    <div class="contanier">
        <div class="row">
          <?php  /* nesse script vamos adicionar valores variados ao formulario  */
          include "conexao.php";

          $nome = $_POST["nome"];
          $endereco = $_POST["endereco"];
          $telefone = $_POST["telefone"];
          $email = $_POST["email"];
          $data_nascimento = $_POST["data_nascimento"];


          $sql = "INSERT INTO `pessoas`(`nome`, `endereco`, `telefone`, `email`, `data_nascimento`)
          
          VALUES('$nome','$endereco','$telefone','$email','$data_nascimento')";
          

          if (mysqli_query($conn, $sql)){

              mensagem("$nome cadastrado com sucesso!", 'success');

          } else {

              mensagem("$nome NÂO cadastrado com sucesso!", 'danger');
          }
          ?>
          <hr>
          <a class="btn btn-primary" href="index.php">Voltar</a>
  
        </div>
    </div>

    

    <!-- Optional JavaScript; choose one of the two! -->
     <!-- Option 1: Bootstrap Bundle with Popper -->
     <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   
    <!- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

  </body>
</html>