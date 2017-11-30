<?php

namespace bongrun\social\base\request;

use bongrun\adapter\CurlAdapterInterface;
use bongrun\config\InterfaceSocialSetting;

/**
 * Class AbstractSendRequest
 * @package bongrun\social\base\request
 */
abstract class AbstractSendRequest implements SendRequestInterface
{
    /** @var InterfaceSocialSetting */
    protected $socialSetting;
    /** @var CurlAdapterInterface */
    protected $curlAdapter;

    /**
     * @param InterfaceSocialSetting $socialSetting
     */
    public function setSocialSetting(InterfaceSocialSetting $socialSetting)
    {
        $this->socialSetting = $socialSetting;
    }

    /**
     * @param CurlAdapterInterface $curlAdapter
     */
    public function setCurlAdapter(CurlAdapterInterface $curlAdapter)
    {
        $this->curlAdapter = $curlAdapter;
    }

    /**
     * @return mixed
     */
    abstract public function getData();
}