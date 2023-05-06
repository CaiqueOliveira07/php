<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio01</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <main>
    <h1>Resultado Final </h1>
    <p>
        <?php 
        $n = $_REQUEST["num"] ?? 0 ;
        $a = $n - 1;
        $s = $n + 1;
        echo " O numero escolhido foi <strong>$n</strong>";
        echo " <br>O antecessor é <em>$a</em>";
        echo " <br>O sucessor é <em>$s</em>";
        ?>
    </p>
    <button onclick="javascript:history.go(-1)" >Voltar</button>
 </main>
    
</body>
</html>