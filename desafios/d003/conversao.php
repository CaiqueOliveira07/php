<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="style.css">


</head>

<body>
    <h1>Conversor de Moedas</h1>
    <main>
        <?php 
$cotação = 506;

$real = $_REQUEST["din"] ?? 0 ;

$dólar = $real / $cotação;

$padrão = numfmt_create("pt-BR", NumberFormatter::CURRENCY );

echo "<p>Seus " . numfmt_format_currency ($padrão, $real , "BRL") . " equivalem a " . numfmt_format_currency($padrão, $dólar, "USD") . "</p>";
?>

<button onclick="javascript:history.go(-1)">VOLTAR</button>
    </main>

</body>

</html>