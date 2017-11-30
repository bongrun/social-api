<?php

namespace bongrun\social\base\checker;

use bongrun\config\InterfaceSocialSetting;

/**
 * Interface InterfaceChecker
 * @package bongrun\social\base\checker
 */
interface InterfaceChecker
{
    public function __construct(InterfaceSocialSetting $socialSetting);

    public function isRequest(array $data):bool;
}