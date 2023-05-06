<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Numero Real</h1>
        <?php 
        $num = $_POST["n"] ?? 0 ;

        echo "<p> Analisando o numero". number_format($num ,3 ,",", ".")." informado pelo usuario:<\p>";
        
$int =  (int) $num;
$fra = $num - $int ;

echo "<ul><li> Aparte inteira do numero  é $int </li>";
echo " <li> A parte fracionada do numero é  $fra</li></ul>";

        ?>
        <button onclick="javascript:history.go(-1)">VOLTAR</button>
    </main>
    
</body>
</html>