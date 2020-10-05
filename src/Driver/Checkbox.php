<?php
declare(strict_types=1);


namespace DcrPHP\Form\Driver;


use DcrPHP\Form\Concerns\Element;

class Checkbox extends Element
{

    public function html()
    {
        // TODO: Implement html() method.
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
        //多选的情况:比如选择了a,b 那就用这个数组做in_array比较
        $valueList = is_array($this->value) ? array() : explode(',', $this->value);
        //pr($valueList);
        foreach ($inputValueList as $inpValueStr => $inpValueDetail) {
            $additionStr = '';
            //如果item是字符串，则直接用字符当value 如果是数组 则直接用key当value
            if($isItemStr){
                $inpValueStr = $inpValueDetail;
            }
            if (in_array($inpValueStr, $valueList) || 1 === $this->value) {
                $additionStr = ' checked ';
            }

            if ($this->itemLabel && $this->itemLabel instanceof Label) {
                $html .= $this->itemLabel->htmlStart();
            }
            $html .= "<input type='checkbox' {$additionStr} value='{$inpValueStr}' name='{$this->name}[]'>{$inpValueDetail}";
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