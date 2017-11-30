<?php

namespace bongrun\social\base\request;

use bongrun\adapter\CurlAdapterInterface;
use bongrun\config\InterfaceSocialSetting;

/**
 * Class TelegramSendRequest
 * @package bongrun\social\base\request
 */
class TelegramSendRequest extends AbstractSendRequest
{
    /**
     * @return mixed
     */
    public function getData()
    {
        //  todo реализовать через telegram api
        return [];
    }
}