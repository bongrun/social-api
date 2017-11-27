<?php

namespace bongrun\social\vk\object;

/**
 * Class AbstractObject
 * @package bongrun\social\vk\object
 */
class AbstractObject
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