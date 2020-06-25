<?php
declare(strict_types=1);
namespace DcrPHP\Form;

class Form
{
    /**
     * @param string $type
     * @return mixed
     */
    public static function createInstance(string $type)
    {
        $class = "DcrPHP\\Form\\Driver\\" . ucfirst($type);
        return new $class;
    }

    public static function __callStatic($name, $arguments)
    {
        // TODO: Implement __callStatic() method.
        return self::createInstance($name);
    }
}