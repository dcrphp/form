<?php

namespace DcrPHP\Form\Concerns;

/**
 * Class Element
 * @package DcrPHP\Form\Concerns
 * @method class
 * @method id
 * @method name
 * @method value
 * @method item
 * @method itemLabel
 * @method label
 */
abstract class Element
{
    //生成html
    abstract public function html();

    public function __call($name, $arguments)
    {
        $this->$name = $arguments[0];
        return $this;
    }
}