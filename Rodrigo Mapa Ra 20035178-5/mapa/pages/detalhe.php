<?php

$produtos = $produtos[$_GET['id']];
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>detalhe</title>
        
        <link rel="stylesheet" type='text/css' href="css/style.css">
    </head>


    <?php 
        $_GET['id'];
        ?>

    <h3><?php echo $produtos['nome'];?></h3>
</html>
