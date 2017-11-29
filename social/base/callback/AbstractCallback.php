<?php

namespace bongrun\social\base\callback;

use bongrun\social\base\object\BaseObjectInterface;

/**
 * Class AbstractCallback
 * @package bongrun\social\base\callback
 */
abstract class AbstractCallback
{
    /**
     * @var array
     */
    protected $data;

    /**
     * AbstractCallback constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
        $this->init();
    }

    abstract protected function init();

    /**
     * @return BaseObjectInterface[]
     */
    abstract protected function getUpdates(): array;
}