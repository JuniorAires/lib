<?php

namespace lib;


class Context {
    private $strategy;

    public function setStrategy(ProcessingStrategy $strategy) {
        $this->strategy = $strategy;
    }

    public function processContent($input) {
        return $this->strategy->process($input);
    }
}

