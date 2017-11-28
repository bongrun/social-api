<?php

namespace bongrun\social\vk\object;

/**
 * Информация о местоположении
 *
 * Class Geo
 * @package bongrun\social\vk\object
 */
class GeoObject extends VkAbstractObject
{
    /**
     * тип места
     *
     * @return string
     */
    public function getType()
    {
        return $this->data['type'];
    }

    /**
     * координаты места
     *
     * @return string
     */
    public function getCoordinates()
    {
        return $this->data['coordinates'];
    }

    /**
     * координаты места
     *
     * @return array
     */
    public function getCoordinatesToArray()
    {
        return explode(',', $this->data['coordinates']);
    }

    /**
     * координаты места X
     *
     * @return float
     */
    public function getCoordinateX()
    {
        return $this->getCoordinatesToArray()[0];
    }

    /**
     * координаты места X
     *
     * @return float
     */
    public function getCoordinateY()
    {
        return $this->getCoordinatesToArray()[1];
    }

    /**
     * описание места (если оно добавлено)
     *
     * @return PlaceObject|null
     */
    public function getPlace()
    {
        return isset($this->data['place']) ? new PlaceObject($this->data['place']) : null;
    }
}