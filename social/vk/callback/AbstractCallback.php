<?php

namespace bongrun\social\vk\callback;

use bongrun\social\base\callback\AbstractCallback as BaseAbstractCallback;

/**
 * Class AbstractCallback
 */
abstract class AbstractCallback extends BaseAbstractCallback
{
    protected $type;
    protected $groupId;
    protected $object;

    protected function init()
    {
        $this->type = $this->data['type'] ?? null;
        $this->groupId = $this->data['group_id'] ?? null;
        $this->object = $this->data['object'] ?? null;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getGroupId()
    {
        return $this->groupId;
    }

    public function getObject()
    {
        return $this->object;
    }
}