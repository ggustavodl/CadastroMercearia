<?php

if(isset($_POST["submit"])){
    include_once("config.php");
    $nome_prod = $_POST["nome_prod"];
    $categoria_prod = $_POST["categoria_prod"];
    $preco_prod = $_POST["preco_prod"];
    $estoque_prod = $_POST["estoque_prod"];
    $datavalid = $_POST["datavalid"];

    $response = mysqli_query($conexao,"INSERT INTO produto(nome_prod,categoria_prod,preco_prod,estoque_prod,datavalid) VALUES('$nome_prod','$categoria_prod','$preco_prod','$estoque_prod','$datavalid') ");
}



?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro Produto</title>
</head>
<body>
    <div class="conteiner">
        <div class="card_form1">
            <form action="form1.php" method="post" class="form">
                <h1>Cadastro do produto</h1>

                <label for="nome_prod">Nome:</label>
                <input type="text" name="nome_prod" id="nome_prod" placeholder="Digite o nome do produto">
                    
                <label for="categoria_prod">Categoria do produto:</label>
                <input type="text" name="categoria_prod" id="categoria_prod" placeholder="Ex:Alimentos, bebidas, etc. ">
        
                <label for="preco_prod">Preço:</label>
                <input type="text" name="preco_prod" id="preco_prod" placeholder="Digite o preço do produto">
        
                <label for="estoque_prod">Estoque:</label>
                <input type="text" name="estoque_prod" id="estoque_prod" placeholder="Digite o estoque total do produto">
        
                <label for="datavalid">Data de validade:</label>
                <input type="date" name="datavalid" id="datavalid" placeholder="Digite a data de validade">

                <input type="submit" name="submit" class="btn_form">
            </form>
           
        </div>
    </div>
       
    
</body>
</html>