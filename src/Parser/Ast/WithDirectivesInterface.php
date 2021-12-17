<?php

declare(strict_types=1);

namespace PoPBackbone\GraphQLParser\Parser\Ast;

use PoPBackbone\GraphQLParser\Parser\Ast\Directive;

interface WithDirectivesInterface
{
    /**
     * @param Directive[] $directives
     */
    public function setDirectives(array $directives): void;

    /**
     * @return Directive[]
     */
    public function getDirectives(): array;

    public function hasDirectives(): bool;
}
