<?php

namespace bongrun\social\base\callback;

use bongrun\social\base\object\ObjectInterface;

/**
 * Class AbstractCallback
 */
abstract class AbstractCallback
{
    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
        $this->init();
    }

    abstract protected function init();

    /**
     * @return ObjectInterface[]
     */
    abstract protected function getUpdates(): array;
}