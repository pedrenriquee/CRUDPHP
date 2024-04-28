<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-firt=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Pesquisar</title>
  </head>
  <body>
    <?php
    if (isset($_POST["busca"])){
        $pesquisa = $_POST['busca'];
    } else {
        $pesquisa = '';
    }

    include "conexao.php";

    $sql = " SELECT * FROM pessoas WHERE nome like '%$pesquisa%'";

    $dados = mysqli_query($conn, $sql);
    ?>

    <h1>Pesquisar</h1>
    <div class="contanier">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-light bg-light">
                    <form class="form-inline" action="pesquisa.php" method="POST">
                        <input class="form-control mr-sm-2" type="search" placeholder="Nome" aria-label="Search" name="busca" autofocus>
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                     </form>
                </nav>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Data de nascimento</th>
                            <th scope="col">Funções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while ($linha = mysqli_fetch_assoc($dados)){
                                $cod_pessoa = $linha["cod_pessoa"];
                                $nome = $linha["nome"];
                                $endereco = $linha["endereco"];
                                $telefone = $linha["telefone"];
                                $email = $linha["email"];
                                $data_nascimento = $linha["data_nascimento"];
                                $data_nascimento = mostra_data($data_nascimento);
                            
                                echo "<tr>
                                        <th scope='row'>$nome</th>
                                        <td>$endereco</td>
                                        <td>$telefone</td>
                                        <td>$email</td>
                                        <td>$data_nascimento</td>
                                        <td width=20px>
                                            <a href='cadastro_edit.php?id=$cod_pessoa' class='btn btn-success btn-sm'>Editar</a>
                                            <a href='#' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#confirma' onclick=" . '"' ."pegar_dados($cod_pessoa, '$nome')" . '"' .">Excluir</a>
                                        </td>
                                    </tr>";
                            }
                        ?>
                        <!-- onclick=".'"'."pegar_dados($cod_pessoa, '$nome')".'"'." é necessario passar a aspas dupla dentro do echo para isso foi feito toda essa concatenação  -->
                        
                     </tbody>
                </table>
                <a class="btn btn-primary" href="index.php" role="button">Voltar para inicio</a>
            </div>
        </div>
    </div>


        <!-- Modal -->
    <div class="modal fade" id="confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmação de exclusão</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                    <form action="excluir_script.php" method="POST">
                        <p>deseja realmente excluir  <b id="nome_pessoa">Nome da pessoa</b>?</p>
                </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                        <input type="hidden" name="id" id="cod_pessoa" value="">
                        <input type="hidden" name="nome" id="nome_pessoa_1" value="">
                        <input type="submit" class="btn btn-danger"value="Sim">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function pegar_dados(id, nome){
            document.getElementById('nome_pessoa').innerHTML = nome;
            document.getElementById('cod_pessoa').value = id;
            document.getElementById('nome_pessoa_1').value = nome;


        }
    </script>    

    <!-- Optional JavaScript; choose one of the two! -->
     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS 
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
                        -->
  </body>
</html>