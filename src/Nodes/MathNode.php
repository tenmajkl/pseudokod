<?php

namespace Majkel\Pseudokod\Nodes;

class MathNode implements ExpressionNode
{
    public function __construct(
        public readonly ExpressionNode $left,
        public readonly string $operator,
        public readonly ExpressionNode $right
    ) {

    }

    public function print(int $level = 0): string
    {
        return 
            $this->left->print()
            .' '.$this->operator
            .' '.$this->right->print()
        ;
    }
}
