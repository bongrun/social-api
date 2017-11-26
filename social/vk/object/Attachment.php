<?php

namespace bongrun\social\vk\object;

class Attachment
{
    protected $data;

    public function __construct($data = [])
    {
        $this->data = $data;
    }
}