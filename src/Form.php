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
        return new $class();
    }

    public static function __callStatic($name, $arguments)
    {
        // TODO: Implement __callStatic() method.
        return self::createInstance($name);
    }

    /**
     * 获取受支持的input类型
     */
    public static function getSupportElements()
    {
        $driverList = __DIR__ . DIRECTORY_SEPARATOR . 'Driver';
        $fileList = scandir($driverList);
        $list = array();
        foreach ($fileList as $fileName) {
            if (! in_array($fileName, array('.','..'))) {
                $fileInfo = pathinfo($fileName);
                array_push($list, strtolower($fileInfo['filename']));
            }
        }
        return $list;
    }
}
