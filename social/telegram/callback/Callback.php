<?php

namespace bongrun\social\telegram\callback;

use bongrun\social\telegram\object\UpdateObject;

/**
 * Получение нового оповещения
 *
 * Class Callback
 * @package bongrun\social\telegram\callback
 */
class Callback extends AbstractCallback
{
    protected $updates = [];

    protected function init()
    {
        parent::init();
        $this->initUpdates();
    }

    protected function initUpdates()
    {
        if (!$this->allowedUpdates) {
            return;
        }
        foreach ($this->allowedUpdates as $update) {
            $this->updates[] = new UpdateObject($update);
        }
    }

    /**
     * @return UpdateObject[]
     */
    public function getUpdates(): array
    {
        return $this->updates;
    }
}