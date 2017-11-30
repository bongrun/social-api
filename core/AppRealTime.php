<?php

namespace bongrun\core;

use bongrun\event\UpdateEventInterface;

/**
 * Class AppRealTime
 * @package bongrun\core
 */
class AppRealTime extends AbstractApp
{
    public function listener()
    {
        $that = $this;
        $this->emitter->addListener($this->updateEventClass, function (UpdateEventInterface $updateEvent) use ($that) {
            if (!is_a($that->runClass, RunInterface::class)) {
                throw new \Exception('У $runClass не верный интерфейс');
            }
            /** @var RunInterface $run */
            $run = new ($that->runClass)($updateEvent->getSocialSetting(), $updateEvent->getUpdate());
            $run->start();
        });
    }
}