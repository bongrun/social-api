<?php

namespace bongrun\core;

use bongrun\adapter\QueueAdapterInterface;
use bongrun\event\UpdateEventInterface;

/**
 * Class AppQueue
 * @package bongrun\core
 */
class AppQueue extends AbstractApp
{
    /**
     * @var QueueAdapterInterface
     */
    protected $queue;

    public function setQueue(QueueAdapterInterface $queue){
        $this->queue = $queue;
    }

    public function listener()
    {
        $that = $this;
        $this->emitter->addListener($this->updateEventClass, function (UpdateEventInterface $updateEvent) use ($that) {
            $that->queue->put($this->updateEventClass, $updateEvent);
        });
    }

    public function queuePull()
    {
        $that = $this;
        $this->queue->pull($this->updateEventClass, function (UpdateEventInterface $updateEvent) use ($that) {
            $that->queue->put($this->updateEventClass, $updateEvent);
            if (!is_a($that->runClass, RunInterface::class)) {
                throw new \Exception('У $runClass не верный интерфейс');
            }
            /** @var RunInterface $run */
            $run = new ($that->runClass)($updateEvent->getSocialSetting(), $updateEvent->getUpdate());
            $run->start();
        });
    }
}