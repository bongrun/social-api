<?php

namespace bongrun\social\vk\object;

/**
 * Информация о местоположении
 *
 * Class Geo
 * @package bongrun\social\vk\object
 */
class Geo
{
    protected $data;

    public function __construct($data = [])
    {
        $this->data = $data;
        //todo
    }
}