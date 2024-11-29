<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
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

        $corretor = $_POST['corretor'];
        $email_corretor = $_POST['email_corretor'];
        $fone_corretor = $_POST['fone_corretor'];
        $ramo = $_POST['ramo'];
        $veiculo = $_POST['veiculo'];
        $modeloVeiculo = $_POST['modeloVeiculo'];
        $nome_segurado = $_POST['nome_segurado'];
        $email_segurado = $_POST['email_segurado'];
        $cpf = $_POST['cpf'];
        $fone_segurado = $_POST['fone_segurado'];
        $endereco = $_POST['endereco'];
        $msg = $_POST['msg'];

        $sql = "INSERT INTO `cotacao`(`corretor`, `email_corretor`, `telefone_corretor`, `ramo`, `automovel`, `modelo`, `segurado`, `email_segurado`, `cpf`, `telefone_segurado`, `endereco`,`mensagemadicional`)
        VALUES ('$corretor','$email_corretor','$fone_corretor','$ramo','$veiculo','$modeloVeiculo','$nome_segurado','$email_segurado','$cpf', '$fone_segurado', '$endereco', '$msg')";

      
        if (mysqli_query($conn, $sql)) {
            mensagem ( "Cadastrado com sucesso!", 'success');
        }
        else 
            mensagem ( "Não cadastrado!", 'danger');
    ?>
    <a href="cadastro.php" class = "btn btn-primary"> Voltar </a>

    
</body>
</html>