<?php

declare(strict_types=1);

namespace PoP\GraphQLParser;

class Environment
{
    public final const ENABLE_MULTIPLE_QUERY_EXECUTION = 'ENABLE_MULTIPLE_QUERY_EXECUTION';
    public final const ENABLE_COMPOSABLE_DIRECTIVES = 'ENABLE_COMPOSABLE_DIRECTIVES';
    public final const ENABLE_DYNAMIC_VARIABLES = 'ENABLE_DYNAMIC_VARIABLES';
    public final const ENABLE_RESOLVED_FIELD_VARIABLE_REFERENCES = 'ENABLE_RESOLVED_FIELD_VARIABLE_REFERENCES';
}
