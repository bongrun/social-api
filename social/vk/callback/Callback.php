<?php

namespace bongrun\social\vk\callback;
use bongrun\social\vk\object\UpdateObject;

/**
 * Получение нового оповещения из группы
 *
 * Class Callback
 * @package bongrun\social\vk\callback
 */
class Callback extends AbstractCallback
{
    protected $update;

    protected function init()
    {
        parent::init();
        $this->initUpdates();
    }

    protected function initUpdates()
    {
        $this->update = new UpdateObject($this->data);
    }

    public function getUpdates(): array
    {
        if (!$this->update) {
            return [];
        }
        return [$this->update];
    }
}