<?php

namespace bongrun\social\telegram\object;

use bongrun\social\base\object\ObjectInterface;
use bongrun\social\base\object\UpdateInterface;

/**
 * Class Attachment
 * @package bongrun\social\telegram\object
 * @see https://core.telegram.org/bots/api#getting-updates
 */
class UpdateObject extends AbstractObject implements UpdateInterface
{
    const TYPE_MESSAGE = 'message';
    const TYPE_EDITED_MESSAGE = 'edited_message';
    const TYPE_CHANNEL_POST = 'channel_post';
    const TYPE_EDITED_CHANNEL_POST = 'edited_channel_post';
    const TYPE_INLINE_QUERY = 'inline_query';
    const TYPE_CHOSEN_INLINE_RESULT = 'chosen_inline_result';
    const TYPE_CALLBACK_QUERY = 'callback_query';
    const TYPE_SHIPPING_QUERY = 'shipping_query';
    const TYPE_PRE_CHECKOUT_QUERY = 'pre_checkout_query';

    protected $types = [
        self::TYPE_MESSAGE,
        self::TYPE_EDITED_MESSAGE,
        self::TYPE_CHANNEL_POST,
        self::TYPE_EDITED_CHANNEL_POST,
        self::TYPE_INLINE_QUERY,
        self::TYPE_CHOSEN_INLINE_RESULT,
        self::TYPE_CALLBACK_QUERY,
        self::TYPE_SHIPPING_QUERY,
        self::TYPE_PRE_CHECKOUT_QUERY,
    ];

    /**
     * @return int
     */
    public function getId()
    {
        return $this->data['update_id'];
    }

    public function getType()
    {
        foreach ($this->types as $type) {
            if (isset($this->data[$type])) {
                return $type;
            }
        }
        return null;
    }

    /**
     * @return ObjectInterface|null
     */
    public function getObject()
    {
        switch ($this->getType()) {
            case static::TYPE_MESSAGE:
            case static::TYPE_EDITED_MESSAGE:
            case static::TYPE_CHANNEL_POST:
            case static::TYPE_EDITED_CHANNEL_POST:
                return new MessageObject($this->data[$this->getType()]);
            //todo
        }
        return null;
    }
}