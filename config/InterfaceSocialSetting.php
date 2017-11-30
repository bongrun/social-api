<?php

namespace bongrun\config;

use bongrun\social\base\callback\InterfaceCallback;

/**
 * Interface InterfaceSocialSetting
 * @package bongrun\config
 */
interface InterfaceSocialSetting
{
    const TYPE_VK = 'vk';
    const TYPE_TELEGRAM = 'telegram';

    public function getType(): string;

    public function getKey(): string;

    public function getCallbackClass(): InterfaceCallback;
}