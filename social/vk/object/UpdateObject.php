<?php

namespace bongrun\social\vk\object;

use bongrun\social\base\object\BaseObjectInterface;
use bongrun\social\base\object\UpdateInterface;

/**
 * Информация о медиавложениях в личных сообщениях
 *
 * Class Attachment
 * @package bongrun\social\vk\object
 */
class UpdateObject extends VkAbstractObject implements UpdateInterface
{
    const TYPE_CONFIRM = 'confirm';
    const TYPE_MESSAGE_NEW = 'message_new';
    const TYPE_MESSAGE_REPLY = 'message_reply';
    const TYPE_MESSAGE_ALLOW = 'message_allow';
    const TYPE_MESSAGE_DENY = 'message_deny';
    const TYPE_PHOTO_NEW = 'photo_new';
    const TYPE_PHOTO_COMMENT_NEW = 'photo_comment_new';
    const TYPE_PHOTO_COMMENT_EDIT = 'photo_comment_edit';
    const TYPE_PHOTO_COMMENT_RESTORE = 'photo_comment_restore';
    const TYPE_PHOTO_COMMENT_DELETE = 'photo_comment_delete';
    const TYPE_AUDIO_NEW = 'audio_new';
    const TYPE_VIDEO_NEW = 'video_new';
    const TYPE_VIDEO_COMMENT_NEW = 'video_comment_new';
    const TYPE_VIDEO_COMMENT_EDIT = 'video_comment_edit';
    const TYPE_VIDEO_COMMENT_RESTORE = 'video_comment_restore';
    const TYPE_VIDEO_COMMENT_DELETE = 'video_comment_delete';
    const TYPE_WALL_POST_NEW = 'wall_post_new';
    const TYPE_WALL_REPOST = 'wall_repost';
    const TYPE_WALL_REPLY_NEW = 'wall_reply_new';
    const TYPE_WALL_REPLY_EDIT = 'wall_reply_edit';
    const TYPE_WALL_REPLY_RESTORE = 'wall_reply_restore';
    const TYPE_WALL_REPLY_DELETE = 'wall_reply_delete';
    const TYPE_BOARD_POST_NEW = 'board_post_new';
    const TYPE_BOARD_POST_EDIT = 'board_post_edit';
    const TYPE_BOARD_POST_RESTORE = 'board_post_restore';
    const TYPE_BOARD_POST_DELETE = 'board_post_delete';
    const TYPE_MARKET_COMMENT_NEW = 'market_comment_new';
    const TYPE_MARKET_COMMENT_EDIT = 'market_comment_edit';
    const TYPE_MARKET_COMMENT_RESTORE = 'market_comment_restore';
    const TYPE_MARKET_COMMENT_DELETE = 'market_comment_delete';
    const TYPE_GROUP_LEAVE = 'group_leave';
    const TYPE_GROUP_JOIN = 'group_join';
    const TYPE_USER_BLOCK = 'user_block';
    const TYPE_USER_UNBLOCK = 'user_unblock';
    const TYPE_POLL_VOTE_NEW = 'poll_vote_new';
    const TYPE_GROUP_OFFICERS_EDIT = 'group_officers_edit';
    const TYPE_GROUP_CHANGE_SETTINGS = 'group_change_settings';
    const TYPE_GROUP_CHANGE_PHOTO = 'group_change_photo';

    public function getType():string
    {
        return $this->data['type'] ?? null;
    }

    /**
     * @return int
     */
    public function getGroupId()
    {
        return $this->data['group_id'];
    }

    /**
     * @return VkBaseObjectInterface|BaseObjectInterface|null
     */
    public function getObject():BaseObjectInterface
    {
        $object = $this->data['object'] ?? null;
        if (!$object) {
            return null;
        }
        switch ($this->getType()) {
            case static::TYPE_CONFIRM:
                //todo
                break;
            case static::TYPE_MESSAGE_NEW:
            case static::TYPE_MESSAGE_REPLY:
                return new MessageObject($object);
            case static::TYPE_PHOTO_NEW:
                return new PhotoObject($object);
            case static::TYPE_AUDIO_NEW:
                return new AudioObject($object);
            case static::TYPE_VIDEO_NEW:
                return new VideoObject($object);
            case static::TYPE_WALL_POST_NEW:
            case static::TYPE_WALL_REPOST:
                return new WallObject($object);
            case static::TYPE_WALL_REPLY_NEW:
            case static::TYPE_WALL_REPLY_EDIT:
            case static::TYPE_WALL_REPLY_RESTORE:
            case static::TYPE_MARKET_COMMENT_NEW:
            case static::TYPE_MARKET_COMMENT_EDIT:
            case static::TYPE_MARKET_COMMENT_RESTORE:
            case static::TYPE_PHOTO_COMMENT_NEW:
            case static::TYPE_PHOTO_COMMENT_EDIT:
            case static::TYPE_PHOTO_COMMENT_RESTORE:
            case static::TYPE_VIDEO_COMMENT_NEW:
            case static::TYPE_VIDEO_COMMENT_EDIT:
            case static::TYPE_VIDEO_COMMENT_RESTORE:
                return new WallReplyObject($object);
            //todo
        }
        return null;
    }
}