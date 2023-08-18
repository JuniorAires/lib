<?php

namespace lib;


// estratégia de dividir o conteúdo em um array usando a vírgula como delimitador
class SplitElementsStrategy implements ProcessingStrategy {
    public function process($conteudo) {
        return explode(',', $conteudo);
    }
}

