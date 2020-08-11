<?php

namespace Zamasaur\PhpTemplate;

use Zamasaur\PhpTemplate\Template;

class TemplateImpl implements Template
{
    private $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }
    
    public function include(array $searchArray, array $replaceArray)
    {
        ob_start(
            function (string $buffer) use ($searchArray, $replaceArray) {
                return (str_replace($searchArray, $replaceArray, $buffer));
            }
        );
        include $this->filename;
        ob_end_flush();
    }

    public function includeOnce(array $searchArray, array $replaceArray)
    {
        ob_start(
            function (string $buffer) use ($searchArray, $replaceArray) {
                return (str_replace($searchArray, $replaceArray, $buffer));
            }
        );
        include_once $this->filename;
        ob_end_flush();
    }
}
