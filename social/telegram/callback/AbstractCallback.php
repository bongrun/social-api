<?php

namespace bongrun\social\telegram\callback;

use bongrun\social\base\callback\AbstractCallback as BaseAbstractCallback;

/**
 * Class AbstractCallback
 */
abstract class AbstractCallback extends BaseAbstractCallback
{
    protected $offset;
    protected $limit;
    protected $timeout;

    protected $url;
    protected $hasCustomCertificate;
    protected $pendingUpdateCount;
    protected $lastErrorDate;
    protected $lastErrorMessage;
    protected $maxConnections;

    protected $allowedUpdates;

    protected function init()
    {
        $this->offset = $this->data['offset'] ?? null;
        $this->limit = $this->data['limit'] ?? null;
        $this->timeout = $this->data['timeout'] ?? null;
        $this->url = $this->data['url'] ?? null;
        $this->hasCustomCertificate = $this->data['has_custom_certificate'] ?? null;
        $this->pendingUpdateCount = $this->data['pending_update_count'] ?? null;
        $this->lastErrorDate = $this->data['last_error_date'] ?? null;
        $this->lastErrorMessage = $this->data['last_error_message'] ?? null;
        $this->maxConnections = $this->data['max_connections'] ?? null;
        $this->allowedUpdates = $this->data['allowed_updates'] ?? null;
    }

    public function getOffset()
    {
        return $this->offset;
    }

    public function getLimit()
    {
        return $this->limit;
    }

    public function getTimeout()
    {
        return $this->timeout;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getHasCustomCertificate()
    {
        return $this->hasCustomCertificate;
    }

    public function getPendingUpdateCount()
    {
        return $this->pendingUpdateCount;
    }

    public function getLastErrorDate()
    {
        return $this->lastErrorDate;
    }

    public function getLastErrorMessage()
    {
        return $this->lastErrorMessage;
    }

    public function getMaxConnections()
    {
        return $this->maxConnections;
    }

    public function getAllowedUpdates()
    {
        return $this->allowedUpdates;
    }
}