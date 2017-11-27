<?php

namespace bongrun\social\vk\object;

/**
 * Описание места
 *
 * Class PlaceObject
 * @package bongrun\social\vk\object
 */
class PlaceObject extends AbstractObject
{
    /**
     * идентификатор места (если назначено)
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->data['id'] ?? null;
    }

    /**
     * название места (если назначено)
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->data['title'] ?? null;
    }

    /**
     * географическая широта
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->data['latitude'];
    }

    /**
     * географическая долгота
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->data['longitude'];
    }

    /**
     * дата создания (если назначено)
     *
     * @return int|null
     */
    public function getCreated()
    {
        return $this->data['created'] ?? null;
    }

    /**
     * URL изображения-иконки
     *
     * @return string|null
     */
    public function getIcon()
    {
        return $this->data['icon'] ?? null;
    }

    /**
     * название страны
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->data['country'] ?? null;
    }

    /**
     * название города
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->data['city'] ?? null;
    }
}