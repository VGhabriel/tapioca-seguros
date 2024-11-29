<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/style2.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Pesquisa</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

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
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/banner1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/images/banner2.jpg" class="d-block w-100" alt="...">
    </div>    

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <main>
        <div class="form-container">
            
            
            <form action="cadastro_script.php" method="POST">
                <div class="dadosbasicos">
                    <h3 class="title">Dados Basicos</h3>
                    <div>
                        <label for="nome">Corretor:</label>
                        <input type="text" id="Corretor" name="corretor" maxlength="20" required>
                    </div>
                    <div>
                        <label for="email">Email do corretor: </label>
                        <input type="email" id="email" name="email_corretor" required>
                    </div>
                    <div>
                        <label for="fone_corretor">Telefone:</label>
                        <input type="text" id="fone_corretor" name="fone_corretor" >
                    </div>
                    <div>
                        <label for="ramo">Ramo: </label>
                        <select id="ramo" name="ramo" placeholder="Selecione:" required>
                            <option value=""> Selecione </option>
                            <option value="SP"> Transporte </option>
                        </select>       
                    </div>
                    <div>
                        <label for="veiculo">Automóvel: </label>
                        <select id="veiculo" name="veiculo" required >
                            <option value=""> Selecione </option>
                            <option value="carro"> Carro </option>
                            <option value="moto"> Moto </option>
                            <option value="Caminhão"> Caminhão </option>
                        </select>       
                    </div>
                    <div>
                        <label for="modeloVeiculo">Modelo Veiculo: </label>
                        <input type="text" id="modeloVeiculo" name="modeloVeiculo" maxlength="40" required>
                    </div>
                </div>

                <div>
                    <h3 class="title">Dados Segurado</h3>
                    <div>
                        <label for="nome_segurado">Nome:</label>
                        <input type="text" id="nome_segurado" name="nome_segurado" maxlength="20" required>
                    </div>
                    <div>
                        <label for="email">Email: </label>
                        <input type="email" id="email" name="email_segurado" required>
                    </div>
                    <div>
                        <label for="cpf">CPF: </label>
                        <input type="text" id="cpf" name="cpf" required >
                    </div>
                    <div>
                        <label for="fone">Telefone:</label>
                        <input type="tel" id="fone" name="fone_segurado" required >
                    </div>
                    <div>
                        <label for="endereco">Endereço</label>
                        <textarea id="endereco" name="endereco" required></textarea>
                    </div>

                </div>

                <div>
                    <h3 class="title">Informações Adicionais</h3>
                    <p>Preencer no campo abaixo as informações adicionais para a cotação:</p>
                    <div>
                        <label for="msg">Mensagem</label>
                        <textarea id="msg" name="msg" rows="4" cols="40"></textarea>
                    </div>
                </div>
                
                <div class="form-actions">
                    <input type="submit" value="Enviar">
                </div> 
            </form>

           
        </div>

       
    </main>
    <footer>
        <p class="text-footer">Todos os direitos reservados &copy;TapiocaSeguros</p>
    </footer>
</body>
</html>