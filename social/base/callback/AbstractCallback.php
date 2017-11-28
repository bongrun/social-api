<?php

namespace bongrun\social\base\callback;

use bongrun\social\base\object\BaseObjectInterface;

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
     * @return BaseObjectInterface[]
     */
    abstract protected function getUpdates(): array;
}