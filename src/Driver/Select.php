<?php
declare(strict_types=1);


namespace DcrPHP\Form\Driver;


use DcrPHP\Form\Concerns\Element;

class Select extends Element
{

    public function html()
    {
        $html = '';
        $isItemStr = false;
        if( ! is_array( $this->item ) )
        {
            $isItemStr = true;
            $inputValueList = explode(',', $this->item);
        }else
        {
            $inputValueList = $this->item;
        }
        if ($this->label && $this->label instanceof Label) {
            $html .= $this->label->htmlStart();
        }
        $html = "<select name='{$this->name}' id='{$this->id}'>";
        $html .= "<option value=''>请选择</option>";
        foreach ($inputValueList as $inpValueStr=> $inpValueDetail) {
            $additionStr = '';
            if ($inpValueDetail == $this->value) {
                $additionStr = ' selected ';
            }
            if( ! $isItemStr )
            {
                $inpValueDetail = $inpValueStr;
            }
            $html .= "<option {$additionStr} value='{$inpValueDetail}'>{$inpValueDetail}</option>";
        }
        $html .= '</select>';
        if ($this->label && $this->label instanceof Label) {
            $html .= $this->label->htmlEnd();
        }
        return $html;
    }
}