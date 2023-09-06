<?php

namespace Php\Project\Formatters;

use function Php\Project\Formatters\Stylish\renderStylish;
use function Php\Project\Formatters\Plain\renderPlain;
use function Php\Project\Formatters\Json\renderJson;

function render($diffTree, $format)
{
    if ($format === "stylish") {
        return renderStylish($diffTree);
    } elseif ($format === "plain") {
        return renderPlain($diffTree);
    } elseif ($format === "json") {
        return renderJson($diffTree);
    }
}
