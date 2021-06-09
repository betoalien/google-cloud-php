<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/notification_service.proto

namespace GPBMetadata\Google\Monitoring\V3;

class NotificationService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Monitoring\V3\Notification::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�%
/google/monitoring/v3/notification_service.protogoogle.monitoring.v3google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto\'google/monitoring/v3/notification.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/struct.protogoogle/protobuf/timestamp.proto"�
)ListNotificationChannelDescriptorsRequestM
name (	B?�A�A97monitoring.googleapis.com/NotificationChannelDescriptor
	page_size (

page_token (	"�
*ListNotificationChannelDescriptorsResponseP
channel_descriptors (23.google.monitoring.v3.NotificationChannelDescriptor
next_page_token (	"x
\'GetNotificationChannelDescriptorRequestM
name (	B?�A�A9
7monitoring.googleapis.com/NotificationChannelDescriptor"�
 CreateNotificationChannelRequestC
name (	B5�A�A/-monitoring.googleapis.com/NotificationChannelL
notification_channel (2).google.monitoring.v3.NotificationChannelB�A"�
ListNotificationChannelsRequestC
name (	B5�A�A/-monitoring.googleapis.com/NotificationChannel
filter (	
order_by (	
	page_size (

page_token (	"�
 ListNotificationChannelsResponseH
notification_channels (2).google.monitoring.v3.NotificationChannel
next_page_token (	"d
GetNotificationChannelRequestC
name (	B5�A�A/
-monitoring.googleapis.com/NotificationChannel"�
 UpdateNotificationChannelRequest/
update_mask (2.google.protobuf.FieldMaskL
notification_channel (2).google.monitoring.v3.NotificationChannelB�A"v
 DeleteNotificationChannelRequestC
name (	B5�A�A/
-monitoring.googleapis.com/NotificationChannel
force ("u
.SendNotificationChannelVerificationCodeRequestC
name (	B5�A�A/
-monitoring.googleapis.com/NotificationChannel"�
-GetNotificationChannelVerificationCodeRequestC
name (	B5�A�A/
-monitoring.googleapis.com/NotificationChannel/
expire_time (2.google.protobuf.Timestamp"o
.GetNotificationChannelVerificationCodeResponse
code (	/
expire_time (2.google.protobuf.Timestamp"z
 VerifyNotificationChannelRequestC
name (	B5�A�A/
-monitoring.googleapis.com/NotificationChannel
code (	B�A2�
NotificationChannelService�
"ListNotificationChannelDescriptors?.google.monitoring.v3.ListNotificationChannelDescriptorsRequest@.google.monitoring.v3.ListNotificationChannelDescriptorsResponse"C���64/v3/{name=projects/*}/notificationChannelDescriptors�Aname�
 GetNotificationChannelDescriptor=.google.monitoring.v3.GetNotificationChannelDescriptorRequest3.google.monitoring.v3.NotificationChannelDescriptor"E���86/v3/{name=projects/*/notificationChannelDescriptors/*}�Aname�
ListNotificationChannels5.google.monitoring.v3.ListNotificationChannelsRequest6.google.monitoring.v3.ListNotificationChannelsResponse"9���,*/v3/{name=projects/*}/notificationChannels�Aname�
GetNotificationChannel3.google.monitoring.v3.GetNotificationChannelRequest).google.monitoring.v3.NotificationChannel";���.,/v3/{name=projects/*/notificationChannels/*}�Aname�
CreateNotificationChannel6.google.monitoring.v3.CreateNotificationChannelRequest).google.monitoring.v3.NotificationChannel"d���B"*/v3/{name=projects/*}/notificationChannels:notification_channel�Aname,notification_channel�
UpdateNotificationChannel6.google.monitoring.v3.UpdateNotificationChannelRequest).google.monitoring.v3.NotificationChannel"����Y2A/v3/{notification_channel.name=projects/*/notificationChannels/*}:notification_channel�A update_mask,notification_channel�
DeleteNotificationChannel6.google.monitoring.v3.DeleteNotificationChannelRequest.google.protobuf.Empty"A���.*,/v3/{name=projects/*/notificationChannels/*}�A
name,force�
\'SendNotificationChannelVerificationCodeD.google.monitoring.v3.SendNotificationChannelVerificationCodeRequest.google.protobuf.Empty"S���F"A/v3/{name=projects/*/notificationChannels/*}:sendVerificationCode:*�Aname�
&GetNotificationChannelVerificationCodeC.google.monitoring.v3.GetNotificationChannelVerificationCodeRequestD.google.monitoring.v3.GetNotificationChannelVerificationCodeResponse"R���E"@/v3/{name=projects/*/notificationChannels/*}:getVerificationCode:*�Aname�
VerifyNotificationChannel6.google.monitoring.v3.VerifyNotificationChannelRequest).google.monitoring.v3.NotificationChannel"J���8"3/v3/{name=projects/*/notificationChannels/*}:verify:*�A	name,code��Amonitoring.googleapis.com�A�https://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/monitoring,https://www.googleapis.com/auth/monitoring.readB�
com.google.monitoring.v3BNotificationServiceProtoPZ>google.golang.org/genproto/googleapis/monitoring/v3;monitoring�Google.Cloud.Monitoring.V3�Google\\Cloud\\Monitoring\\V3�Google::Cloud::Monitoring::V3bproto3'
        , true);

        static::$is_initialized = true;
    }
}

