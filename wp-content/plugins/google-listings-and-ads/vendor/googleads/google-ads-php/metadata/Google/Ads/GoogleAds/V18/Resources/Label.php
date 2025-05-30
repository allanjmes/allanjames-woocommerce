<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/resources/label.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V18\Resources;

class Label
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
1google/ads/googleads/v18/enums/label_status.protogoogle.ads.googleads.v18.enums"X
LabelStatusEnum"E
LabelStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
"com.google.ads.googleads.v18.enumsBLabelStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v18/enums;enums�GAA�Google.Ads.GoogleAds.V18.Enums�Google\\Ads\\GoogleAds\\V18\\Enums�"Google::Ads::GoogleAds::V18::Enumsbproto3
�
0google/ads/googleads/v18/common/text_label.protogoogle.ads.googleads.v18.common"i
	TextLabel
background_color (	H �
description (	H�B
_background_colorB
_descriptionB�
#com.google.ads.googleads.v18.commonBTextLabelProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v18/common;common�GAA�Google.Ads.GoogleAds.V18.Common�Google\\Ads\\GoogleAds\\V18\\Common�#Google::Ads::GoogleAds::V18::Commonbproto3
�
.google/ads/googleads/v18/resources/label.proto"google.ads.googleads.v18.resources1google/ads/googleads/v18/enums/label_status.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
Label=
resource_name (	B&�A�A 
googleads.googleapis.com/Label
id (B�AH �
name (	H�P
status (2;.google.ads.googleads.v18.enums.LabelStatusEnum.LabelStatusB�A>

text_label (2*.google.ads.googleads.v18.common.TextLabel:N�AK
googleads.googleapis.com/Label)customers/{customer_id}/labels/{label_id}B
_idB
_nameB�
&com.google.ads.googleads.v18.resourcesB
LabelProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v18/resources;resources�GAA�"Google.Ads.GoogleAds.V18.Resources�"Google\\Ads\\GoogleAds\\V18\\Resources�&Google::Ads::GoogleAds::V18::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

