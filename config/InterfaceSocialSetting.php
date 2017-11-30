<?php

namespace bongrun\config;

use bongrun\social\base\checker\InterfaceChecker;
use bongrun\social\base\request\SendRequestInterface;

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

    public function isSendRequestUpdate(): bool;

    public function getChecker(): InterfaceChecker;

    public function getSendRequest(): SendRequestInterface;

    public function getTimeoutMilliseconds(): int;
}