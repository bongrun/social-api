<?php

namespace bongrun\social\base\object;

/**
 * Class AbstractObject
 * @package bongrun\social\base\object
 */
class BaseAbstractObject implements BaseObjectInterface
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