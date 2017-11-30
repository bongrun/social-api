<?php

namespace bongrun\social\base\callback;

use bongrun\social\base\object\BaseObjectInterface;

/**
 * Class AbstractCallback
 * @package bongrun\social\base\callback
 */
interface InterfaceCallback
{
    /**
     * IntegfaceCallback constructor.
     * @param array $data
     */
    public function __construct(array $data);

    /**
     * @return BaseObjectInterface[]
     */
    public function getUpdates(): array;
}