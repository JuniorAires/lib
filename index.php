<?php

use lib\Context;
use lib\RemoveEmptyElementsStrategy;
use lib\RemoveOddElementsStrategy;
use lib\ReplaceSpacesStrategy;
use lib\SplitElementsStrategy;

include 'Context.php';
include 'Interface/ProcessingStrategy.php';
include 'Strategy/ReplaceSpacesStrategy.php';
include 'Strategy/SplitElementsStrategy.php';
include 'Strategy/RemoveEmptyElementsStrategy.php';
include 'Strategy/RemoveOddElementsStrategy.php';



// Leitura do Arquivo
$arquivoEntrada = 'BTWITEMS_18.txt';
$conteudo = file_get_contents($arquivoEntrada);


//Instanciamento do contexto
$contexto = new Context();

// Aplicação das estratégias de processamento
$contexto->setStrategy(new ReplaceSpacesStrategy());
$conteudoFormatado = $contexto->processContent($conteudo);

$contexto->setStrategy(new SplitElementsStrategy());
$arrayDeElementos = $contexto->processContent($conteudoFormatado);

// $contexto->setStrategy(new RemoveEmptyElementsStrategy());
// $arrayDeElementos = $contexto->processContent($arrayDeElementos);

$contexto->setStrategy(new RemoveOddElementsStrategy());
$arrayFinal = $contexto->processContent($arrayDeElementos);

// Imprime os elementos em duplas (duas colunas)

 
for ($i = 0; $i < count($arrayFinal); $i += 2) {
    var_dump($arrayFinal[$i]). ',';
    if ($i + 1 < count($arrayFinal)) {

        var_dump($arrayFinal[$i + 1]);
        
    }
    echo '<br>';
}

