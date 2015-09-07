<?php

namespace AdamPaterson\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;

class ImgurResourceOwner implements ResourceOwnerInterface
{
    /**
     * Raw response
     *
     * @var
     */
    protected $response;

    /**
     * Creates new resource owner.
     *
     * @param $response
     */
    public function __construct($response)
    {
        $this->response = $response;
    }

    /**
     * Get resource owner id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->response['data']['id'] ?: null;
    }

    /**
     * Return all of the owner details available as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->response['data'];
    }

    /**
     * Get resource owner url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->response['data']['url'] ?: null;
    }

    /**
     * Get Imgur bio
     *
     * @return mixed
     */
    public function getBio()
    {
        return $this->response['data']['bio'] ?: null;
    }

    /**
     * Get resource owner reputation
     *
     * @return mixed
     */
    public function getReputation()
    {
        return $this->response['data']['reputation'] ?: null;
    }

    /**
     * Get created at timestamp
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->response['data']['created'] ?: null;
    }

    /**
     * Get pro account expiration timestamp
     *
     * @return string
     */
    public function getProExpiration()
    {
        return $this->response['data']['pro_expiration'] ?: null;
    }
}