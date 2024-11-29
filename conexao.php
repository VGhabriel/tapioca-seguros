<?php
    $server = "localhost"; //se fosse web, colocar ip
    $user = "root";
    $pass = "";
    $bd = "tapiocaseguros";

    if ($conn = mysqli_connect($server, $user, $pass, $bd) ){//conexao php
        //echo "conectado!";
    } else
        echo "error";
    //if serve para quando abrir a pagina saber se ela fez conexao corretamento no banco

    function mensagem ($texto, $tipo ){
        echo "<div class='alert alert-$tipo' role='alert'>
                $texto
            </div>";
    }
    


?>