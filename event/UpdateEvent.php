<?php

namespace bongrun\event;

use bongrun\config\InterfaceSocialSetting;
use bongrun\social\base\object\UpdateInterface;
use League\Event\AbstractEvent;
use League\Event\Event;
use League\Event\EventInterface;

/**
 * Interface UpdateEventInterface
 * @package bongrun\event
 */
class UpdateEvent extends AbstractEvent implements UpdateEventInterface
{
    protected $socialSetting;
    protected $update;

    /**
     * UpdateEventInterface constructor.
     * @param InterfaceSocialSetting $socialSetting
     * @param UpdateInterface $update
     */
    public function __construct(InterfaceSocialSetting $socialSetting, UpdateInterface $update)
    {
        $this->socialSetting = $socialSetting;
        $this->update = $update;
    }

    /**
     * @return InterfaceSocialSetting
     */
    public function getSocialSetting(): InterfaceSocialSetting
    {
        return $this->socialSetting;
    }

    /**
     * @return UpdateInterface
     */
    public function getUpdate(): UpdateInterface
    {
        return $this->update;
    }
}