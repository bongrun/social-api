<?php

namespace bongrun\core;

use bongrun\config\InterfaceSocialSetting;
use bongrun\event\UpdateEventInterface;
use bongrun\social\base\callback\InterfaceCallback;
use League\Event\EmitterInterface;

/**
 * Class App
 * @package bongrun\core
 */
abstract class AbstractApp
{
    /**
     * @var InterfaceSocialSetting[]
     */
    protected $socialsSettings;
    /**
     * @var EmitterInterface
     */
    protected $emitter;
    /**
     * @var string
     */
    protected $updateEventClass;
    /**
     * @var string
     */
    protected $runClass;

    /**
     * App constructor.
     * @param array $socialsSettings
     * @param EmitterInterface $emitter
     * @param string $updateEventClass
     * @param string $runClass
     */
    public function __construct(array $socialsSettings, EmitterInterface $emitter, string $updateEventClass, string $runClass)
    {
        $this->socialsSettings = $socialsSettings;
        $this->emitter = $emitter;
        $this->updateEventClass = $updateEventClass;
        $this->runClass = $runClass;
    }

    /**
     * По данным($_REQUEST) которые пришли из запроса создаются события $updateEventClass
     *
     * @param array $data
     * @throws \Exception
     */
    public function request(array $data)
    {
        foreach ($this->socialsSettings as $socialSetting) {
            if (!is_a($socialSetting, InterfaceSocialSetting::class)) {
                throw new \Exception('У $socialSetting не верный интерфейс');
            }
            if (!$socialSetting->isRequest()) {
                continue;
            }
            if (!$socialSetting->getChecker()->isRequest($data)) {
                continue;
            }
            /** @var InterfaceCallback $callback */
            $callback = new ($socialSetting->getCallbackClass())($data);
            if (!is_a($callback, InterfaceCallback::class)) {
                throw new \Exception('У $callback не верный интерфейс');
            }
            foreach ($callback->getUpdates() as $update) {
                if (!is_subclass_of($this->updateEventClass, UpdateEventInterface::class)) {
                    throw new \Exception('У $updateEvent не верный интерфейс');
                }
                /** @var UpdateEventInterface $updateEvent */
                $updateEvent = new ($this->updateEventClass)($socialSetting, $update);
                $this->emitter->emit($updateEvent);
            }
        }
    }

    abstract public function listener();
}