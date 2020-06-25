<?php
declare(strict_types=1);


namespace DcrPHP\Form\Driver;


use DcrPHP\Form\Concerns\Element;

class Hidden extends Element
{

    public function html()
    {
        // TODO: Implement html() method.
        return "<input class='{$this->class}' name='{$this->name}' id='{$this->id}' type='hidden' value='{$this->value}'>";
    }
}