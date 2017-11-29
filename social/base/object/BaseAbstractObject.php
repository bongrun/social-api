<?php

namespace bongrun\social\base\object;

/**
 * Class BaseAbstractObject
 * @package bongrun\social\base\object
 */
class BaseAbstractObject implements BaseObjectInterface
{
    /**
     * @var array
     */
    protected $data;

    /**
     * BaseAbstractObject constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Обращение к свойствам для которых не созданны методы
     *
     * @param $name
     * @return string|int|array|null
     */
    public function get($name)
    {
        return $this->data[$name] ?? null;
    }
}