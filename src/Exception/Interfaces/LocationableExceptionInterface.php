<?php

declare(strict_types=1);

namespace PoPBackbone\GraphQLParser\Exception\Interfaces;

use PoPBackbone\GraphQLParser\Parser\Location;

interface LocationableExceptionInterface
{
    public function getLocation(): Location;
}
