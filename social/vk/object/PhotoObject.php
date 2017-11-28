<?php

namespace bongrun\social\vk\object;

/**
 * Объект, описывающий фотографию
 *
 * Class PhotoObject
 * @package bongrun\social\vk\object
 * @see https://vk.com/dev/objects/photo
 */
class PhotoObject extends VkAbstractObject implements AttachmentObjectItemInterface
{
    const USER_GROUP = 100;

    /**
     * идентификатор фотографии.
     *
     * @return int
     */
    public function getId()
    {
        return $this->data['id'];
    }

    /**
     * идентификатор альбома, в котором находится фотография.
     *
     * @return int
     */
    public function getAlbumId()
    {
        return $this->data['album_id'];
    }

    /**
     * идентификатор владельца фотографии.
     *
     * @return int
     */
    public function getOwnerId()
    {
        return $this->data['owner_id'];
    }

    /**
     * идентификатор пользователя, загрузившего фото (если фотография размещена в сообществе).
     * Для фотографий, размещенных от имени сообщества, user_id = 100.
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->data['user_id'];
    }

    /**
     * Проверка что фото выставленно от имени группы
     *
     * @return bool
     */
    public function isUserGroup()
    {
        return $this->getUserId() == static::USER_GROUP;
    }

    /**
     * текст описания фотографии.
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->data['text'] ?? null;
    }

    /**
     * дата добавления в формате Unixtime.
     *
     * @return int
     */
    public function getDate()
    {
        return $this->data['date'];
    }

    /**
     * массив с копиями изображения в разных размерах.
     *
     * @return PhotoSizeObject[]|null
     */
    public function getSizes()
    {
        if (!isset($this->data['sizes'])) {
            return null;
        }
        $sizes = [];
        foreach ($this->data['sizes'] as $size) {
            $sizes[] = new PhotoSizeObject($size);
        }
        return $sizes;
    }

    /**
     * URL копии фотографии с максимальным размером 75x75px
     *
     * @return string|null
     */
    public function getPhoto75()
    {
        return $this->data['photo_75'] ?? null;
    }

    /**
     * URL копии фотографии с максимальным размером 130x130px.
     *
     * @return string|null
     */
    public function getPhoto130()
    {
        return $this->data['photo_130'] ?? null;
    }

    /**
     * URL копии фотографии с максимальным размером 604x604px.
     *
     * @return string|null
     */
    public function getPhoto604()
    {
        return $this->data['photo_604'] ?? null;
    }

    /**
     * URL копии фотографии с максимальным размером 807x807px.
     *
     * @return string|null
     */
    public function getPhoto807()
    {
        return $this->data['photo_807'] ?? null;
    }

    /**
     * URL копии фотографии с максимальным размером 1280x1024px.
     *
     * @return string|null
     */
    public function getPhoto1280()
    {
        return $this->data['photo_1280'] ?? null;
    }

    /**
     * URL копии фотографии с максимальным размером 2560x2048px.
     *
     * @return string|null
     */
    public function getPhoto2560()
    {
        return $this->data['photo_2560'] ?? null;
    }

    /**
     * ширина оригинала фотографии в пикселах.
     *
     * @return int|null
     */
    public function getWidth()
    {
        return $this->data['width'] ?? null;
    }

    /**
     * высота оригинала фотографии в пикселах.
     *
     * @return int|null
     */
    public function getHeight()
    {
        return $this->data['height'] ?? null;
    }
}