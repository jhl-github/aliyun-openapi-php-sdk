<?php

namespace Dyvmsapi\Request\V20170525;

/**
 * Request of VoipGetToken
 *
 * @method string getResourceOwnerId()
 * @method string getVoipId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getDeviceId()
 * @method string getIsCustomAccount()
 */
class VoipGetTokenRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Dyvmsapi',
            '2017-05-25',
            'VoipGetToken',
            'dyvmsapi'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $voipId
     *
     * @return $this
     */
    public function setVoipId($voipId)
    {
        $this->requestParameters['VoipId'] = $voipId;
        $this->queryParameters['VoipId'] = $voipId;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $deviceId
     *
     * @return $this
     */
    public function setDeviceId($deviceId)
    {
        $this->requestParameters['DeviceId'] = $deviceId;
        $this->queryParameters['DeviceId'] = $deviceId;

        return $this;
    }

    /**
     * @param string $isCustomAccount
     *
     * @return $this
     */
    public function setIsCustomAccount($isCustomAccount)
    {
        $this->requestParameters['IsCustomAccount'] = $isCustomAccount;
        $this->queryParameters['IsCustomAccount'] = $isCustomAccount;

        return $this;
    }
}
