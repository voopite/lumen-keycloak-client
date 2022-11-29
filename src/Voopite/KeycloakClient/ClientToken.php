<?php

namespace Voopite\KeycloakClient;

class ClientToken
{

    /**
     * @param $clientToken
     */
    public function __construct(private $clientToken)
    {
    }

    /**
     * @return mixed
     */
    public function getClientToken()
    {
        return $this->clientToken;
    }
}