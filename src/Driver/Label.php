<?php
declare(strict_types=1);


namespace DcrPHP\Form\Driver;


use DcrPHP\Form\Concerns\Element;

class Label extends Element
{

    /**
     * label分前后 元素在中间 这是前
     */
    public function htmlStart()
    {
        return "<label class='{$this->class}'>{$this->value}";
    }
    /**
     * label分前后 元素在中间 这是后
     */
    public function htmlEnd()
    {
        return "</label>";
    }
    public function html()
    {
        // TODO: Implement html() method.
        return $this->htmlStart() . $this->htmlEnd();
    }
}