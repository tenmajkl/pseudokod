<?php

namespace Majkel\Pseudokod\Nodes;

class EtaReductionNode
{
    public function __construct(
        public readonly string $operator,
        public readonly ?NumberNode $number = null
    ) {

    }
}
