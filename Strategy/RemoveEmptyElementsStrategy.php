<?php

namespace lib;


//estratégia de remoção de elementos vazios resultantes da substituição
class RemoveEmptyElementsStrategy implements ProcessingStrategy {
    public function process($arrayDeElementos) {
        return array_filter($arrayDeElementos, 'strlen');
    }
}
