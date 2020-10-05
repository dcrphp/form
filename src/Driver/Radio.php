<?php

declare(strict_types=1);

namespace DcrPHP\Form\Driver;

use DcrPHP\Form\Concerns\Element;

class Radio extends Element
{
    public function html($inputType = 'radio')
    {
        // TODO: Implement html() method.
        $html = '';
        $isItemStr = false;
        if (! is_array($this->item)) {
            $isItemStr = true;
            $inputValueList = explode(',', $this->item);
        } else {
            $inputValueList = $this->item;
        }
        if ($this->label && $this->label instanceof Label) {
            $html .= $this->label->htmlStart();
        }
        foreach ($inputValueList as $inpValueStr => $inpValueDetail) {
            $additionStr = '';
            if ($inpValueDetail == $this->value || 1 == $this->value) {
                $additionStr = ' checked ';
            }

            if ($this->itemLabel && $this->itemLabel instanceof Label) {
                $html .= $this->itemLabel->htmlStart();
            }
            //如果item是字符串，则直接用字符当value 如果是数组 则直接用key当value
            if (! $isItemStr) {
                $inpValueDetail = $inpValueStr;
            }
            $html .= "<input type='radio' {$additionStr} value='{$inpValueDetail}' name='{$this->name}[]'>{$inpValueDetail}";
            if ($this->itemLabel && $this->itemLabel instanceof Label) {
                $html .= $this->itemLabel->htmlEnd();
            }
        }
        if ($this->label && $this->label instanceof Label) {
            $html .= $this->label->htmlEnd();
        }
        return $html;
    }
}
