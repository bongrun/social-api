<?php

namespace bongrun\social\telegram\object;

use bongrun\social\base\object\ObjectInterface;

/**
 * Class AbstractObject
 * @package bongrun\social\telegram\object
 */
class AbstractObject implements ObjectInterface
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Обращение к свойствам для которых не созданны методы
     *
     * @param $name
     * @return mixed
     */
    public function get($name)
    {
        return $this->data[$name] ?? null;
    }
}