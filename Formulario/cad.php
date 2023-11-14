<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>
        <h1>Resultado do processamento</h1>
    </div>

    <?php
        //var_dump($_REQUEST); //global
    
        $n = $_REQUEST["nome"] ;
        $s = $_REQUEST["sobrenome"] ;

        echo "Seja bem vindo $n $s";
    ?>
    <br>
    <a href="index.html">Voltar</a>
</body>

</html>