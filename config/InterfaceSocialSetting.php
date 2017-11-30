<?php

namespace bongrun\config;

use bongrun\social\base\checker\InterfaceChecker;

/**
 * Interface InterfaceSocialSetting
 * @package bongrun\config
 */
interface InterfaceSocialSetting
{
    const TYPE_VK = 'vk';
    const TYPE_TELEGRAM = 'telegram';

    public function getId();

    public function getType(): string;

    public function getKey(): string;

    public function getCallbackClass(): string;

    public function isRequest(): bool;
    public function isSendResponseUpdate(): bool;

    public function getChecker(): InterfaceChecker;
}