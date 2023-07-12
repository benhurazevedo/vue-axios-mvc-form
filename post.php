<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(!isset($_POST['nome']) || !isset($_POST['idade'])){
            ?><h1>Não há dados!</h1><?php
        }
        else{
            ?><p>Nome: <?=$_POST['nome']?> <br> Idade: <?=$_POST['idade']?></p><?php
        }?>
        
</body>
</html>