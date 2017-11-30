<?php

namespace bongrun\core;

use bongrun\config\InterfaceSocialSetting;
use bongrun\social\base\callback\InterfaceCallback;

/**
 * Class App
 * @package bongrun\core
 */
class App
{
    /**
     * @var InterfaceSocialSetting[]
     */
    protected $socialsSettings;

    /**
     * App constructor.
     * @param InterfaceSocialSetting[] $socialsSettings
     */
    public function __construct(array $socialsSettings)
    {
        $this->socialsSettings = $socialsSettings;
    }

    /**
     * По данным которые пришли из запроса
     *
     * @param array $data
     */
    public function request(array $data)
    {
        foreach ($this->socialsSettings as $socialSetting) {
            if (!$socialSetting->isRequest()) {
                continue;
            }
            if ($socialSetting->getChecker()->isRequest($data)) {
                /** @var InterfaceCallback $callback */
                $callback = new ($socialSetting->getCallbackClass())($data);
                foreach ($callback->getUpdates() as $update) {
                    // todo вызов события
                    new EventUpdate($socialSetting, $update);
                }
            }
        }
    }
}