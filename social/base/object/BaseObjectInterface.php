<?php

namespace bongrun\social\base\object;

/**
 * Interface BaseObjectInterface
 * @package bongrun\social\base\object
 */
interface BaseObjectInterface
{
    /**
     * @param $name
     * @return array|string|int|null
     */
    public function get($name);
}