<?php
//
// Copyright (c) ZeroC, Inc. All rights reserved.
//
//
// Ice version 3.7.3
//
// <auto-generated>
//
// Generated from file `UserAccountMapper.ice'
//
// Warning: do not edit this file.
//
// </auto-generated>
//


namespace IceGrid
{
    global $IceGrid__t_UserAccountNotFoundException;
    class UserAccountNotFoundException extends \Ice\UserException
    {
        public function __construct()
        {
        }

        public function ice_id()
        {
            return '::IceGrid::UserAccountNotFoundException';
        }

        public function __toString()
        {
            global $IceGrid__t_UserAccountNotFoundException;
            return IcePHP_stringifyException($this, $IceGrid__t_UserAccountNotFoundException);
        }
    }

    $IceGrid__t_UserAccountNotFoundException = IcePHP_defineException('::IceGrid::UserAccountNotFoundException', '\\IceGrid\\UserAccountNotFoundException', false, null, null);
}

namespace IceGrid
{
    global $IceGrid__t_UserAccountMapper;
    global $IceGrid__t_UserAccountMapperPrx;

    class UserAccountMapperPrxHelper
    {
        public static function checkedCast($proxy, $facetOrContext=null, $context=null)
        {
            return $proxy->ice_checkedCast('::IceGrid::UserAccountMapper', $facetOrContext, $context);
        }

        public static function uncheckedCast($proxy, $facet=null)
        {
            return $proxy->ice_uncheckedCast('::IceGrid::UserAccountMapper', $facet);
        }

        public static function ice_staticId()
        {
            return '::IceGrid::UserAccountMapper';
        }
    }
    $IceGrid__t_UserAccountMapper = IcePHP_defineClass('::IceGrid::UserAccountMapper', '\\IceGrid\\UserAccountMapper', -1, false, true, null, null);

    global $Ice__t_ObjectPrx;
    $IceGrid__t_UserAccountMapperPrx = IcePHP_defineProxy('::IceGrid::UserAccountMapper', $Ice__t_ObjectPrx, null);

    global $IcePHP__t_string;
    IcePHP_defineOperation($IceGrid__t_UserAccountMapperPrx, 'getUserAccount', 0, 0, 0, array(array($IcePHP__t_string)), null, array($IcePHP__t_string), array($IceGrid__t_UserAccountNotFoundException));
}
namespace
{new Ice\SliceChecksumInit(array(
    "::IceGrid::UserAccountMapper" => "779fd561878e199444e04cdebaf9ffd4",
    "::IceGrid::UserAccountNotFoundException" => "fe2dc4d87f21b9b2cf6f1339d1666281"));
}
?>