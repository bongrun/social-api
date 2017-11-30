<?php

namespace bongrun\core;

use bongrun\config\InterfaceSocialSetting;

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
}