<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <h1>RESULTADO DO PROCESSAMENTO</h1>
    </header>

    <main>
<?php 
$n = $_GET ["nome"];

$s = $_GET ["idsobrenome"];

echo "<p> É um prazer conhecer você , <strong> $n  $s </strong>  !. Este é meu site ";
?>

    </main>
</body>
</html>