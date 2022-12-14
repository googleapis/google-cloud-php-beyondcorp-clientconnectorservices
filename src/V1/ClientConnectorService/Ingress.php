<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/beyondcorp/clientconnectorservices/v1/client_connector_services_service.proto

namespace Google\Cloud\BeyondCorp\ClientConnectorServices\V1\ClientConnectorService;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings of how to connect to the ClientGateway.
 * One of the following options should be set.
 *
 * Generated from protobuf message <code>google.cloud.beyondcorp.clientconnectorservices.v1.ClientConnectorService.Ingress</code>
 */
class Ingress extends \Google\Protobuf\Internal\Message
{
    protected $ingress_config;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\BeyondCorp\ClientConnectorServices\V1\ClientConnectorService\Ingress\Config $config
     *           The basic ingress config for ClientGateways.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Beyondcorp\Clientconnectorservices\V1\ClientConnectorServicesService::initOnce();
        parent::__construct($data);
    }

    /**
     * The basic ingress config for ClientGateways.
     *
     * Generated from protobuf field <code>.google.cloud.beyondcorp.clientconnectorservices.v1.ClientConnectorService.Ingress.Config config = 1;</code>
     * @return \Google\Cloud\BeyondCorp\ClientConnectorServices\V1\ClientConnectorService\Ingress\Config|null
     */
    public function getConfig()
    {
        return $this->readOneof(1);
    }

    public function hasConfig()
    {
        return $this->hasOneof(1);
    }

    /**
     * The basic ingress config for ClientGateways.
     *
     * Generated from protobuf field <code>.google.cloud.beyondcorp.clientconnectorservices.v1.ClientConnectorService.Ingress.Config config = 1;</code>
     * @param \Google\Cloud\BeyondCorp\ClientConnectorServices\V1\ClientConnectorService\Ingress\Config $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BeyondCorp\ClientConnectorServices\V1\ClientConnectorService\Ingress\Config::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getIngressConfig()
    {
        return $this->whichOneof("ingress_config");
    }

}


