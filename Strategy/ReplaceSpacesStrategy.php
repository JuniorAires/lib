<?php
 namespace lib;

// estratégia de substituição de múltiplos espaços por uma vírgula
class ReplaceSpacesStrategy implements ProcessingStrategy {
    public function process($conteudo) {
        return preg_replace('/\s+/', ',', $conteudo);
    }
}
