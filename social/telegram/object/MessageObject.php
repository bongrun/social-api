<?php

namespace bongrun\social\telegram\object;

/**
 * Class MessageObject
 * @package bongrun\social\telegram\object
 * @see https://core.telegram.org/bots/api#message
 */
class MessageObject extends AbstractObject
{
    /**
     * @return int
     */
    public function getId()
    {
        return $this->data['message_id'];
    }

    /**
     * @return UserObject|null
     */
    public function getFrom()
    {
        if (!$this->data['from']) {
            return null;
        }
        return $this->data['from']; //todo new UserObject
    }

    /**
     * @return int
     */
    public function getDate()
    {
        return $this->data['date'];
    }

    /**
     * @return ChatObject
     */
    public function getChat()
    {
        return $this->data['chat']; //todo new ChatObject
    }

    /**
     * @return UserObject|null
     */
    public function getForwardFrom()
    {
        if (!$this->data['forward_from']) {
            return null;
        }
        return $this->data['forward_from']; //todo new UserObject
    }

    /**
     * @return ChatObject|null
     */
    public function getForwardFromChat()
    {
        if (!$this->data['forward_from_chat']) {
            return null;
        }
        return $this->data['forward_from_chat']; //todo new ChatObject
    }

    //todo дописать
}