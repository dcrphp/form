<?php
declare(strict_types=1);


namespace DcrPHP\Form\Driver;


use DcrPHP\Form\Concerns\Element;

class Textarea extends Element
{

    public function html()
    {
        // TODO: Implement html() method.
        $value = $this->value ? $this->value : $this->default;
        $html = '';
        if($this->label && $this->label instanceof Label)
        {
            $html .= $this->label->htmlStart();
        }
        $html .= "<textarea name='{$this->name}' id='{$this->id}' class='{$this->class}'>{$value}</textarea>";
        if($this->label && $this->label instanceof Label)
        {
            $html .= $this->label->htmlEnd();
        }
        return $html;
    }
}