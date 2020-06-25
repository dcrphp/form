<?php
require_once("../vendor/autoload.php");

use DcrPHP\Form\Form;

ini_set('display_errors', 'on');

echo 'text:';
echo "\r\n";
$label = Form::label()->class('class')->value('');
echo Form::text()->label($label)->class('class')->id('id')->name('name')->value('value')->html();
echo "\r\n";
echo 'textarea:';
echo "\r\n";
echo Form::textarea()->class()->id()->name()->value('text content')->html();
echo "\r\n";
$label = Form::label();
echo "\r\n";
echo 'radio:';
echo "\r\n";
echo Form::radio()->label($label)->itemLabel($label)->class('radio-sex')->id('sex')->name('sex')->value('男')->item('男,女')->html();
echo "\r\n";
echo 'checkbox:';
echo "\r\n";
echo Form::checkbox()->itemLabel($label)->class()->id()->name('chose')->value('1,2')->item(array(
    1 => '无',
    2 => '有',
    3 => '不明确'
))->html();
echo "\r\n";
echo 'select:';
echo "\r\n";
echo Form::select()->class('select')->id()->name()->value('15')->item('15,16,17,18')->html();