<?php

namespace bongrun\social\vk\object;

/**
 * Объект, описывающий личное сообщение
 *
 * Class Message
 * @package bongrun\social\vk\object
 */
class Message
{
    const READ_STATE_UNREAD = 0;
    const READ_STATE_READ = 1;
    const OUT_RECEIVED = 0;
    const OUT_SEND = 1;

    protected $data;

    public function __construct($data = [])
    {
        $this->data = $data;
    }

    /**
     * идентификатор сообщения (не возвращается для пересланных сообщений).
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->data['id'] ?? null;
    }

    /**
     * идентификатор пользователя, в диалоге с которым находится сообщение.
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->data['user_id'];
    }

    /**
     * идентификатор автора сообщения.
     *
     * @return int
     */
    public function getFromId()
    {
        return $this->data['from_id'];
    }

    /**
     * дата отправки сообщения в формате Unixtime.
     *
     * @return int
     */
    public function getDate()
    {
        return $this->data['date'] ?? null;
    }

    /**
     * статус сообщения (Message::READ_STATE_UNREAD — не прочитано, Message::READ_STATE_READ — прочитано, не возвращается для пересланных сообщений).
     *
     * @return int
     */
    public function getReadState()
    {
        return (int)$this->data['read_state'] ?? null;
    }

    /**
     * Статус сообщения: прочитано
     *
     * @return bool
     */
    public function isRead()
    {
        return $this->getReadState() === static::READ_STATE_READ;
    }

    /**
     * Статус сообщения: не прочитано
     *
     * @return bool
     */
    public function isUnread()
    {
        return $this->getReadState() === static::READ_STATE_UNREAD;
    }

    /**
     * тип сообщения (Message::OUT_RECEIVED — полученное, Message::OUT_SEND — отправленное, не возвращается для пересланных сообщений).
     *
     * @return int
     */
    public function getOut()
    {
        return (int)$this->data['out'] ?? null;
    }

    /**
     * Тип сообщения: полученное
     *
     * @return bool
     */
    public function isReceived()
    {
        return $this->getOut() === static::OUT_RECEIVED;
    }

    /**
     * Тип сообщения: отправленное
     *
     * @return bool
     */
    public function isSend()
    {
        return $this->getOut() === static::OUT_SEND;
    }

    /**
     * заголовок сообщения или беседы.
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->data['title'] ?? null;
    }

    /**
     * текст сообщения.
     *
     * @return string|null
     */
    public function getBody()
    {
        return $this->data['body'] ?? null;
    }

    /**
     * информация о местоположении
     *
     * @return Geo|null
     */
    public function getGeo()
    {
        return $this->data['geo'] ? new Geo($this->data['geo']) : null;
    }

    /**
     * медиавложения сообщения (фотографии, ссылки и т.п.)
     *
     * @return Attachment[]|null
     */
    public function getAttachments()
    {
        if (!$this->data['attachments']) {
            return null;
        }
        $attachments = [];
        foreach ($this->data['attachments'] as $attachment) {
            $attachments[] = new Attachment($attachment);
        }
        return $attachments;
    }

    /**
     * массив пересланных сообщений (если есть)
     *
     * @return static[]|null
     */
    public function getForwardedMessages()
    {
        if (!$this->data['fwd_messages']) {
            return null;
        }
        $messages = [];
        foreach ($this->data['fwd_messages'] as $message) {
            $messages[] = new static($message);
        }
        return $messages;
    }

    /**
     * содержатся ли в сообщении emoji-смайлы.
     *
     * @return bool
     */
    public function isEmoji()
    {
        return (bool)($this->data['emoji'] ?? false);
    }

    /**
     * является ли сообщение важным.
     *
     * @return bool
     */
    public function isImportant()
    {
        return (bool)($this->data['important'] ?? false);
    }

    /**
     * удалено ли сообщение.
     *
     * @return bool
     */
    public function isDeleted()
    {
        return (bool)($this->data['deleted'] ?? false);
    }

    /**
     * идентификатор, используемый при отправке сообщения. Возвращается только для исходящих сообщений.
     *
     * @return int|null
     */
    public function getRandomId()
    {
        return $this->data['random_id'] ?? null;
    }
}