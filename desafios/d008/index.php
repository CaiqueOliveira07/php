<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 08</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $numero= $_GET['num'] ?? 0;
    ?>

    <main>
<h1>Informe um numero</h1>
<form action="<?=$_SERVER['PHP_SELF']?>" method="get" >
<label for="num">Numero</label>
<input type="number" name="num" id="num" value="<?=$numero ?>" >
<input type="submit" value="Calcular raizes" >
</form>
</main>
<section>
    <h2>Resultado final</h2>
    <?php 
    $rq = $numero **(1/2);
    $rc = $numero ** (1/3);
    
    echo "<p> Analisando o numero <strong> $numero </strong>, temos ";
    echo"<li> A sua raiz quadra é <strong> ". number_format($rq, 2, ",", "."). "</strong></li>";
    echo"<li> A sua raiz cubica é <strong>".number_format($rc, 2, ",", ".")."</li></ul>" ;
    ?>
</section>

</body>
</html>