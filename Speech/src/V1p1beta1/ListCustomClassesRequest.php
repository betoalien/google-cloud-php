<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1p1beta1/cloud_speech_adaptation.proto

namespace Google\Cloud\Speech\V1p1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message sent by the client for the `ListCustomClasses` method.
 *
 * Generated from protobuf message <code>google.cloud.speech.v1p1beta1.ListCustomClassesRequest</code>
 */
class ListCustomClassesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent, which owns this collection of custom classes.
     * Format:
     * {api_version}/projects/{project}/locations/{location}/customClasses
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * The maximum number of custom classes to return. The service may return
     * fewer than this value. If unspecified, at most 50 custom classes will be
     * returned. The maximum value is 1000; values above 1000 will be coerced to
     * 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * A page token, received from a previous `ListCustomClass` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListCustomClass` must
     * match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent, which owns this collection of custom classes.
     *           Format:
     *           {api_version}/projects/{project}/locations/{location}/customClasses
     *     @type int $page_size
     *           The maximum number of custom classes to return. The service may return
     *           fewer than this value. If unspecified, at most 50 custom classes will be
     *           returned. The maximum value is 1000; values above 1000 will be coerced to
     *           1000.
     *     @type string $page_token
     *           A page token, received from a previous `ListCustomClass` call.
     *           Provide this to retrieve the subsequent page.
     *           When paginating, all other parameters provided to `ListCustomClass` must
     *           match the call that provided the page token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V1P1Beta1\CloudSpeechAdaptation::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent, which owns this collection of custom classes.
     * Format:
     * {api_version}/projects/{project}/locations/{location}/customClasses
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent, which owns this collection of custom classes.
     * Format:
     * {api_version}/projects/{project}/locations/{location}/customClasses
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The maximum number of custom classes to return. The service may return
     * fewer than this value. If unspecified, at most 50 custom classes will be
     * returned. The maximum value is 1000; values above 1000 will be coerced to
     * 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of custom classes to return. The service may return
     * fewer than this value. If unspecified, at most 50 custom classes will be
     * returned. The maximum value is 1000; values above 1000 will be coerced to
     * 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * A page token, received from a previous `ListCustomClass` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListCustomClass` must
     * match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A page token, received from a previous `ListCustomClass` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListCustomClass` must
     * match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

