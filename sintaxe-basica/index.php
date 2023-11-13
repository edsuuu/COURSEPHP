<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>
            <?php echo "olha eu aqui \u{1F30E}"; ?>
        </h1>
        <p>Para imprimir o emoji com echo </p>
    </div>
    <div>
        <?php
        echo " <h1>Imprimindo horas </h1> ";

        date_default_timezone_set("America/Sao_Paulo");
        //setar a regiao para horario 

        echo "Hoje é dia " . date(" d/M/Y ");
        echo " e a hora " . date(" G:i:s ");

        $nome = "Edson";
        $sobrenome = "Lima";

        const pais = "braza"; 
        //const é valor fixo nao recebe outro valor 

        echo "Ola $nome $sobrenome voce mora no " . pais;


        echo "<br><h1>Tipos Primitivos</h1><br>";

        $name = "Silva";

        echo "<p>A variavel $name é um tipo string, sequencia de letras, numeros, e simbolos, sempre representada entre aspas </p>" ;

        $idade = 30;

        echo "<p>A variavel $idade é um tipo int ou integer, um valor numerico inteiro, aquele que vem sem a parte decimal </p>" ;

        $peso = 85.6;
        echo "<p>A variavel $peso é um tipo float, double, 'real parou de funcionar no php 7' é um valor numerico real que vem com uma parte decimal depois do conto flutuante  </p>" ;

        $casado = true;

        echo "<p>A variavel $casado é um tipo bool ou boolean, é um valor logico que aceita apenas os valores verdadeiro ou falso, true or false </p>" ;

        echo "";
        $p = 35.3;    
        $b = true;   
        $s = "oi";
        $v = 300;
        var_dump($v, $s, $p, $b);

        //coerção


        $num1 = (int) "950";
        $num2 = (string) "950";
        //forçar q um valor seja outro 

        var_dump($num2 , $num1 )
        
        //EXEMPLO COM ARRAY 

        ?>

    </div>

</body>

</html>