<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        $num = $_REQUEST["num"];

        $mais = $num + 1;
        $menos = $num - 1;

        echo "<br> O numero digitado foi $num <br>";
        echo "<br> O antecessor de $num é $menos <br> ";
        echo "<br> O sucessor de $num é $mais <br> ";
    
    
    ?>
</body>
</html>