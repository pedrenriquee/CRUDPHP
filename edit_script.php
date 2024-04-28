<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-firt=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Alteração de cadastro</title>
  </head>
  <body>
    <div class="contanier">
        <div class="row">
        <?php
        include "conexao.php";
        $id= $_POST['id'];
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $data_nascimento = $_POST['data_nascimento'];


      $sql =  "UPDATE `pessoas` SET `nome`='$nome',`endereco`='$endereco',`telefone`='$telefone',`email`='$email',`data_nascimento`='$data_nascimento' WHERE cod_pessoa = $id";

        if (mysqli_query($conn, $sql)){

            mensagem("$nome alterado com sucesso!", 'success');

        } else {

            mensagem("$nome NÂO alterado!", 'danger');
        }
        ?>
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