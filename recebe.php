<?php

    include_once "funcoes.php";

    $nome = trataNome($_POST["nome"]);

    $email = $_POST["email"];

    $telefone = $_POST["telefone"];

    //echo $nome . $email . $telefone;

    if(!empty($nome) && !empty($email)){

        $arquivo = fopen("c://temp/dados.txt", "a+");

        fwrite($arquivo, "\r\n Nome: " . $nome);
        fwrite($arquivo, "\r\n E-mail: " . $email);
        fwrite($arquivo, "\r\n Telefone: " . $telefone);
        fwrite($arquivo, "\r\n ---------------------------- \n\n");

        fclose($arquivo);
    }else{
        echo "Nome e e-mail são obrigatórios!";

        echo "<a href='index.php'>Voltar</a>";
    }

?>