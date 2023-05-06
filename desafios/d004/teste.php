<?php 

$inicio = date("m-d-Y", strtotime("-7 days"));
$fim = date("m-d-Y"); 
$url= '{"@odata.context":"https://was-p.bcnet.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata$metadata#_CotacaoDolarPeriodo(cotacaoCompra,cotacaoVenda,dataHoraCotacao)","value":[{"cotacaoCompra":4.96900,"cotacaoVenda":4.96960,"dataHoraCotacao":"2023-05-05 13:05:21.278"}]}';

$dados = json_decode(file_get_contents($url), true);
$cotação = $dados ["value"][0]["cotacaoCompra"];

echo" Acotação foi $cotação" ;

?>