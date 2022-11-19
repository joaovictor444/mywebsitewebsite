<?php 

    include ('conexao.php');

    $nome = $_POST ['nome'];
    $sobrenome = $_POST ['sobrenome'];
    $email = $_POST ['email'];
    $senha = $_POST ['senha'];
    
    $sql = "INSERT INTO clientes (nome, sobrenome, email, senha) 
    VALUES ('$nome', '$sobrenome' , '$email' , '$senha' )";

    if (mysqli_query($mysqli, $sql)){
        echo "usuário cadastrado com sucesso";
    }

    else {
        echo "Erro no cadastro de dados";
    }

    mysqli_close($mysqli);

?>