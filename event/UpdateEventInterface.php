<?php

namespace bongrun\event;

use bongrun\config\InterfaceSocialSetting;
use bongrun\social\base\object\UpdateInterface;
use League\Event\EventInterface;

/**
 * Interface UpdateEventInterface
 * @package bongrun\event
 */
interface UpdateEventInterface extends EventInterface
{
    /**
     * UpdateEventInterface constructor.
     * @param InterfaceSocialSetting $socialSetting
     * @param UpdateInterface $update
     */
    public function __construct(InterfaceSocialSetting $socialSetting, UpdateInterface $update);

    /**
     * @return InterfaceSocialSetting
     */
    public function getSocialSetting(): InterfaceSocialSetting;

    /**
     * @return UpdateInterface
     */
    public function getUpdate(): UpdateInterface;
}