<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/errors/distinct_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V18\Errors;

class DistinctError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
4google/ads/googleads/v18/errors/distinct_error.protogoogle.ads.googleads.v18.errors"m
DistinctErrorEnum"X
DistinctError
UNSPECIFIED 
UNKNOWN
DUPLICATE_ELEMENT
DUPLICATE_TYPEB�
#com.google.ads.googleads.v18.errorsBDistinctErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v18/errors;errors�GAA�Google.Ads.GoogleAds.V18.Errors�Google\\Ads\\GoogleAds\\V18\\Errors�#Google::Ads::GoogleAds::V18::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

