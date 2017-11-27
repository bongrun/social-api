<?php

namespace bongrun\social\base\callback;

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
}