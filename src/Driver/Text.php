<?php

declare(strict_types=1);

namespace DcrPHP\Form\Driver;

use DcrPHP\Form\Concerns\Element;

class Text extends Element
{

    public function html()
    {
        // TODO: Implement html() method.
        $html = '';
        if ($this->label && $this->label instanceof Label) {
            $html .= $this->label->htmlStart();
        }
        $html .= "<input class='{$this->class}' name='{$this->name}' id='{$this->id}' type='text' value='{$this->value}'>";
        if ($this->label && $this->label instanceof Label) {
            $html .= $this->label->htmlEnd();
        }
        return $html;
    }
}
