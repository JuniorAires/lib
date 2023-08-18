<?php

namespace lib;

//estratégias de extração de elementos de posições impares
class RemoveOddElementsStrategy implements ProcessingStrategy {
    public function process($arrayDeElementos) {
        $arraySemImpares = array();
        foreach ($arrayDeElementos as $chave => $valor) {
           if ($chave % 2 == 0) {
               $arraySemImpares[] = [
                    $chave=>$valor 
                ];
            }
        }
        $arrayFinal = [];
        for ($i = 0; $i < count($arraySemImpares)-1; $i +=2){
            $arrayFinal[] = [
                $arraySemImpares[$i],
                $arraySemImpares[$i+1],
            ];
        }
        return $arrayFinal;
    }
}
