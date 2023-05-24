<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
$preco= $_REQUEST ['preco'] ?? '0';
$reaj= $_REQUEST ['reaj'] ?? '0';
?>


<main>
<h1>Reajustador de preço</h1>
<form action="<?=$_SERVER['PHP_SELF'] ?>" method="$_GET" >
<label for="preco">Preço do produto (R$) </label>
<input type="number" name="preco" id="preco"  min="0.10" step="0.01" value="<?=$preco?>" >

<label for="reaj">Qual sera o percentual de reajuste ? (<strong><span id="p" >?</span>%</strong>) </label>
<input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reaj?>" >

<input type="submit" value="Reajustar" >
</form>
</main>

 <?php 
$aumento = $preco * $reaj / 100;
$novopreco= $preco + $aumento ; 
 ?>


<section>
<h2>Resultado do reajuste</h2>
<p>O produto que custava <?=$preco?>,com <strong> <?=$reaj?>%  de aumento</strong> vai passar a custar <br><strong>R$ <?=number_format($novopreco, 2, ",", ".")?></strong> a partir de agora.  </p>
</section>

<script>
mudaValor () ;


function mudaValor() {
    p.innerText = reaj.value ;
}

</script>

    
</body>
</html>