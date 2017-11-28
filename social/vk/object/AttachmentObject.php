<?php

namespace bongrun\social\vk\object;

/**
 * Информация о медиавложениях в личных сообщениях
 *
 * Class Attachment
 * @package bongrun\social\vk\object
 */
class AttachmentObject extends VkAbstractObject
{
    const TYPE_PHOTO = 'photo';
    const TYPE_VIDEO = 'video';
    const TYPE_AUDIO = 'audio';
    const TYPE_DOC = 'doc';
    const TYPE_LINK = 'link';
    const TYPE_MARKET = 'market';
    const TYPE_MARKET_ALBUM = 'market_album';
    const TYPE_WALL = 'wall';
    const TYPE_WALL_REPLY = 'wall_reply';
    const TYPE_STICKER = 'sticker';
    const TYPE_GIFT = 'gift';

    /**
     * @return string|null
     */
    public function getType()
    {
        return $this->data['type'] ?? null;
    }

    /**
     * @return AttachmentObjectItemInterface|null
     */
    public function getItem()
    {
        $item = $this->data[$this->getType()] ?? null;
        if (!$item) {
            return null;
        }
        switch ($this->getType()) {
            case static::TYPE_PHOTO:
                return new PhotoObject($item);
            case static::TYPE_VIDEO:
                return new VideoObject($item);
            case static::TYPE_AUDIO:
                return new AudioObject($item);
            case static::TYPE_DOC:
                return new DocObject($item);
            case static::TYPE_LINK:
                return new LinkObject($item);
            case static::TYPE_MARKET:
                return new MarketObject($item);
            case static::TYPE_MARKET_ALBUM:
                return new MarketAlbumObject($item);
            case static::TYPE_WALL:
                return new WallObject($item);
            case static::TYPE_WALL_REPLY:
                return new WallReplyObject($item);
            case static::TYPE_STICKER:
                return new StikerObject($item);
            case static::TYPE_GIFT:
                return new GiftObject($item);
        }
        return null;
    }
}