<?php

namespace bongrun\social\vk\object;

/**
 * Описания размеров фотографии
 *
 * Class PhotoSizeObject
 * @package bongrun\social\vk\object
 * @see https://vk.com/dev/objects/photo_sizes
 */
class PhotoSizeObject extends VkAbstractObject
{
    /** пропорциональная копия изображения с максимальной стороной 75px; */
    const TYPE_PHOTO_S = 's';
    /** пропорциональная копия изображения с максимальной стороной 130px; */
    const TYPE_PHOTO_M = 'm';
    /** пропорциональная копия изображения с максимальной стороной 604px */
    const TYPE_PHOTO_X = 'x';
    /** если соотношение "ширина/высота" исходного изображения меньше или равно 3:2, то пропорциональная копия с максимальной стороной 130px.
     * Если соотношение "ширина/высота" больше 3:2, то копия обрезанного слева изображения с максимальной стороной 130px и соотношением сторон 3:2. */
    const TYPE_PHOTO_O = 'o';
    /** если соотношение "ширина/высота" исходного изображения меньше или равно 3:2, то пропорциональная копия с максимальной стороной 200px.
     * Если соотношение "ширина/высота" больше 3:2, то копия обрезанного слева и справа изображения с максимальной стороной 200px и соотношением сторон 3:2. */
    const TYPE_PHOTO_P = 'p';
    /** если соотношение "ширина/высота" исходного изображения меньше или равно 3:2, то пропорциональная копия с максимальной стороной 320px.
     * Если соотношение "ширина/высота" больше 3:2, то копия обрезанного слева и справа изображения с максимальной стороной 320px и соотношением сторон 3:2 */
    const TYPE_PHOTO_Q = 'q';
    /** если соотношение "ширина/высота" исходного изображения меньше или равно 3:2, то пропорциональная копия с максимальной стороной 510px.
     * Если соотношение "ширина/высота" больше 3:2, то копия обрезанного слева и справа изображения с максимальной стороной 510px и соотношением сторон 3:2 */
    const TYPE_PHOTO_R = 'r';
    /** пропорциональная копия изображения с максимальной стороной 807px; */
    const TYPE_PHOTO_Y = 'y';
    /** пропорциональная копия изображения с максимальным размером 1080x1024; */
    const TYPE_PHOTO_Z = 'z';
    /** пропорциональная копия изображения с максимальным размером 2560x2048px. */
    const TYPE_PHOTO_W = 'w';

    /** пропорциональная копия изображения с максимальной стороной 100px; */
    const TYPE_DOC_S = 's';
    /** пропорциональная копия изображения с максимальной стороной 130px; */
    const TYPE_DOC_M = 'm';
    /** пропорциональная копия изображения с максимальной стороной 604px; */
    const TYPE_DOC_X = 'x';
    /** пропорциональная копия изображения с максимальной стороной 807px; */
    const TYPE_DOC_Y = 'y';
    /** пропорциональная копия изображения с максимальным размером 1080x1024px; */
    const TYPE_DOC_Z = 'z';
    /** копия изображения с размерами оригинала. */
    const TYPE_DOC_O = 'o';

    /**
     * URL копии изображения.
     *
     * @return string
     */
    public function getSrc()
    {
        return $this->data['src'];
    }

    /**
     * обозначение размера и пропорций копии.
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->data['type'] ?? null;
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