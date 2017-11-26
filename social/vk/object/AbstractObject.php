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
}