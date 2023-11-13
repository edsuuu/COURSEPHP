<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $vet = [6, "edsu", 9, 3, true];
    var_dump($vet);

    $frase = "Opa";
    $completa = "Beleza";

    const estado = "rj";

    // usando coonst jeito errado 
    //echo "Moro no $estado";
    //jeito certo

    echo "Moro no " . estado . "<br>";

    echo "$frase Edsu, $completa?<br><br>";

    echo "Estamos no ano de " . date('Y');

    echo '<br> <br> $frase Edsu, $completa? <br><br>';

    $nom = "Rod";
    $snom = "Nog";
    
    echo "$nom " . ' "Minotauro" ' . " $snom <br>"; //errado
    echo "$nom \"Minotauro\" $snom"; //certo

    ?>

</body>

</html>

<!-- ESCAPE SEQUENCES 

\n   NOVA LINHA
\t   TABULACAO HORIZONTAL/ESPACO NO CODIGO 
\\   BARRA INVERTIDA
\$  PARA PRINTAR O SINAL $ NA TELA
\u{}  CODEPINT UNICODE 


-->