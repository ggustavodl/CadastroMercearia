<?php
if(isset($_POST["submit"])){
    include_once("config.php");
    $nome_forne = $_POST["nome_forne"];
    $end_forne = $_POST["end_forne"];
    $num_forne = $_POST["num_forne"];
    $email_forne = $_POST["email_forne"];
    
    $response = mysqli_query($conexao, "INSERT INTO fornecedor(nome_forne, end_forne, num_forne, email_forne) VALUES('$nome_forne','$end_forne','$num_forne','$email_forne')");
}    
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro Fornecedor</title>
</head>
<body>
    <div class="conteiner">
        <div class="card_form1">
            <form action="form2.php" method="post" class="form">
                <h1>Cadastro do fornecedor</h1>

                <label for="nome_prod">Nome:</label>
                <input type="text" name="nome_forne" id="nome_forne" placeholder="Digite o nome do fornecedor">
                    
                <label for="categoria_prod">Endereço:</label>
                <input type="text" name="end_forne" id="end_forne" placeholder="Ex:Alimentos, bebidas, etc. ">
        
                <label for="preco_prod">Número:</label>
                <input type="text" name="num_forne" id="end_forne" placeholder="Digite o número do fornecedor">
        
                <label for="estoque_prod">Email:</label>
                <input type="email" name="email_forne" id="email_forne" placeholder="Digite o email do fornecedor">
        
              

                <input type="submit" name="submit" class="btn_form">
            </form>
           
        </div>
    </div>
</body>
</html>