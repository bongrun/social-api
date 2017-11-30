<?php

namespace bongrun\social\base\request;

use bongrun\adapter\CurlAdapterInterface;
use bongrun\config\InterfaceSocialSetting;

/**
 * Interface SendRequestInterface
 * @package bongrun\social\base\request
 */
interface SendRequestInterface
{
    /**
     * @param InterfaceSocialSetting $socialSetting
     */
    public function setSocialSetting(InterfaceSocialSetting $socialSetting);

    /**
     * @param CurlAdapterInterface $curlAdapter
     */
    public function setCurlAdapter(CurlAdapterInterface $curlAdapter);

    /**
     * @return mixed
     */
    public function getData();
}