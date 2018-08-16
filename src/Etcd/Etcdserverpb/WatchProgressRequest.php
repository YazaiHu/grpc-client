<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Etcdserverpb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Requests the a watch stream progress status be sent in the watch response stream as soon as
 * possible.
 *
 * Generated from protobuf message <code>etcdserverpb.WatchProgressRequest</code>
 */
class WatchProgressRequest extends \Google\Protobuf\Internal\Message
{

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

}

