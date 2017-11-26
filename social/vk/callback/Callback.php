<?php

namespace bongrun\social\vk\callback;
use bongrun\social\vk\object\AudioObject;
use bongrun\social\vk\object\MessageObject;
use bongrun\social\vk\object\PhotoObject;
use bongrun\social\vk\object\VideoObject;
use bongrun\social\vk\object\WallObject;
use bongrun\social\vk\object\WallReplyObject;

/**
 * Class MessageNewCallback
 */
class Callback extends AbstractCallback
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

    protected function init()
    {
        parent::init();
        $this->initObject();
    }

    protected function initObject()
    {
        switch ($this->getType()) {
            case static::TYPE_CONFIRM:
                //todo
                break;
            case static::TYPE_MESSAGE_NEW:
            case static::TYPE_MESSAGE_REPLY:
                $this->object = new MessageObject($this->object);
                break;
            case static::TYPE_PHOTO_NEW:
                $this->object = new PhotoObject($this->object);
                break;
            case static::TYPE_AUDIO_NEW:
                $this->object = new AudioObject($this->object);
                break;
            case static::TYPE_VIDEO_NEW:
                $this->object = new VideoObject($this->object);
                break;
            case static::TYPE_WALL_POST_NEW:
            case static::TYPE_WALL_REPOST:
                $this->object = new WallObject($this->object);
                break;
            case static::TYPE_WALL_REPLY_NEW:
            case static::TYPE_WALL_REPLY_EDIT:
            case static::TYPE_WALL_REPLY_RESTORE:
            case static::TYPE_MARKET_COMMENT_NEW:
            case static::TYPE_MARKET_COMMENT_EDIT:
            case static::TYPE_MARKET_COMMENT_RESTORE:
                $this->object = new WallReplyObject($this->object);
                break;
            //todo
        }
    }
}