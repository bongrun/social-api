<?php

namespace bongrun\social\base\object;

/**
 * Interface UpdateInterface
 * @package bongrun\social\base\object
 */
interface UpdateInterface
{
    /**
     * @return string
     */
    public function getType(): string;

    /**
     * @return BaseObjectInterface
     */
    public function getObject(): BaseObjectInterface;
}