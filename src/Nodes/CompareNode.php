<?php

declare(strict_types=1);

namespace Majkel\Pseudokod\Nodes;

class CompareNode implements ExpressionNode
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
            $this->left->print($variables)
            .' '.$this->operator()
            .' '.$this->right->print($variables)
        ;
    }

    public function operator(): string
    {
        return match ($this->operator) {
            // todo split logic from compare (im lazy and tired)
            'AND' => '&&',
            'OR' => '||',
            default => $this->operator
        };
    }
}
