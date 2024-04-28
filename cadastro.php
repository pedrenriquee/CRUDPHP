<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-firt=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>cadastro</title>
  </head>
  <body>
    <div class="contanier">
        <div class="row">
            <div class="col">
                <h1>Cadastro</h1>
                <form action = "cadastro-script.php" method="POST">
                    <div class="form-group">
                         <label for="nome">Nome completo</label>
                         <input type="text" class="form-control" name="nome" required>
                    </div>
                    <div class="form-group">
                         <label for="endereco">Endereço</label>
                         <input type="text" class="form-control" name="endereco">
                    </div>
                    <div class="form-group">
                         <label for="telefone">Telefone</label>
                         <input type="text" class="form-control" name="telefone">
                    </div>
                    <div class="form-group">
                         <label for="email">Email</label>
                         <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                         <label for="data_nascimento">Data de nascimento</label>
                         <input type="date" class="form-control" name="data_nascimento">
                    </div>
                    <div class="form-group">
                         <input type="submit" class="btn btn-success">
                    </div>
                </form>
                <a class="btn btn-primary" href="index.php" role="button">Voltar para inicio</a>
            </div>
        </div>
    </div>

    

    <!-- Optional JavaScript; choose one of the two! -->
     <!-- Option 1: Bootstrap Bundle with Popper -->
     <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

  </body>
</html>