<?php

namespace bongrun\core;

use bongrun\config\InterfaceSocialSetting;
use bongrun\social\base\object\UpdateInterface;

/**
 * Interface RunInterface
 * @package bongrun\core
 */
interface RunInterface
{
    /**
     * RunInterface constructor.
     * @param InterfaceSocialSetting $socialSetting
     * @param UpdateInterface $update
     */
    public function __construct(InterfaceSocialSetting $socialSetting, UpdateInterface $update);

    /**
     * @return mixed
     */
    public function start();
}