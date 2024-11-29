<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/style2.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Formulario</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <?php
        include "conexao.php";

        $sql = "SELECT * FROM cotacao";

        $dados = mysqli_query($conn, $sql);
    ?>


    <header>
        <div class="user">
            <p> Bem-Vindo</p>
        </div>
        <div class="image">
            <img src="assets/images/tapioca (2).png">
        </div>
        <div class="out">
            <!-- <a href="index.php" class="fa fa-sign-out" aria-hidden="true" ></a> -->
        </div>
    </header>
    <div class="subheader">
        <a href="cadastro.php"><span >Nova cotação</span></a>  <a href="consulta.php" ><span>Registro</span></a>

    </div>
    <main class="consulta">
        <div>
            <table class="table table-dark table-hover">
                <caption>Lista Segurado | Veículo</caption>
                <thead>
                    <tr>
                    <th scope="col">Segurado</th>
                    <th scope="col">Email do segurado</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Ramo</th>
                    <th scope="col">Automível</th>
                    <th scope="col">Modelo Veiculo</th>
                    <th scope="col">Função</th>
                    </tr>
                </thead>

                
                <tbody>
                    <?php
                        while($linha = mysqli_fetch_assoc($dados) ){
                            $cod_cota = $linha['cod_cota'];
                            $segurado = $linha['segurado'];
                            $email_segurado = $linha['email_segurado'];
                            $telefone_segurado = $linha['telefone_segurado'];
                            $ramo = $linha['ramo'];
                            $automovel = $linha['automovel'];
                            $modelo = $linha['modelo'];
                            
                            echo "<tr>
                                    <th scope='row'>$segurado</th>
                                    <td>$email_segurado</td>
                                    <td>$telefone_segurado</td>
                                    <td>$ramo</td>
                                    <td>$automovel</td>
                                    <td>$modelo</td>

                                    <td><a href='cadastro_edit.php?id=$cod_cota' class='btn btn-success' > Editar</a>
                                    <a >  <form action= 'excluir_script.php' method='POST' ;>
                                            <input type='hidden' name='id' value='$cod_cota'> <!-- Substitua pelo ID real -->
                                        <button type='submit' class='btn-danger'>Excluir</button>
                                    </form></a>
                                    </td>

                                </tr>";
                            }

                    ?>
                    

                </tbody>

                
            </table>
        </div>
        
        
    </main>
    <footer>
        <p class="text-footer">Todos os direitos reservados &copy;TapiocaSeguros</p>
    </footer>
</body>
</html>