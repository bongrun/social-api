<?php

namespace bongrun\social\vk\object;

/**
 * Информация о медиавложениях в личных сообщениях
 *
 * Class Attachment
 * @package bongrun\social\vk\object
 */
class Attachment
{
    protected $data;

    public function __construct($data = [])
    {
        $this->data = $data;
        //todo
    }
}