<?php

namespace bongrun\core;
use bongrun\config\InterfaceSocialSetting;
use bongrun\social\base\object\UpdateInterface;

/**
 * Class Run
 * @package bongrun\core
 */
class Run implements RunInterface
{
    protected $socialSetting;
    protected $update;

    /**
     * Run constructor.
     * @param InterfaceSocialSetting $socialSetting
     * @param UpdateInterface $update
     */
    public function __construct(InterfaceSocialSetting $socialSetting, UpdateInterface $update)
    {
        $this->socialSetting = $socialSetting;
        $this->update = $update;
    }

    public function start()
    {
        // TODO: Implement start() method.
    }
}