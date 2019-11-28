<?php
//
// Copyright (c) ZeroC, Inc. All rights reserved.
//
//
// Ice version 3.7.3
//
// <auto-generated>
//
// Generated from file `Locator.ice'
//
// Warning: do not edit this file.
//
// </auto-generated>
//


namespace
{
    require_once 'Ice/Identity.php';
    require_once 'Ice/Process.php';
}

namespace Ice
{
    global $Ice__t_AdapterNotFoundException;
    class AdapterNotFoundException extends \Ice\UserException
    {
        public function __construct()
        {
        }

        public function ice_id()
        {
            return '::Ice::AdapterNotFoundException';
        }

        public function __toString()
        {
            global $Ice__t_AdapterNotFoundException;
            return IcePHP_stringifyException($this, $Ice__t_AdapterNotFoundException);
        }
    }

    $Ice__t_AdapterNotFoundException = IcePHP_defineException('::Ice::AdapterNotFoundException', '\\Ice\\AdapterNotFoundException', false, null, null);
}

namespace Ice
{
    global $Ice__t_InvalidReplicaGroupIdException;
    class InvalidReplicaGroupIdException extends \Ice\UserException
    {
        public function __construct()
        {
        }

        public function ice_id()
        {
            return '::Ice::InvalidReplicaGroupIdException';
        }

        public function __toString()
        {
            global $Ice__t_InvalidReplicaGroupIdException;
            return IcePHP_stringifyException($this, $Ice__t_InvalidReplicaGroupIdException);
        }
    }

    $Ice__t_InvalidReplicaGroupIdException = IcePHP_defineException('::Ice::InvalidReplicaGroupIdException', '\\Ice\\InvalidReplicaGroupIdException', false, null, null);
}

namespace Ice
{
    global $Ice__t_AdapterAlreadyActiveException;
    class AdapterAlreadyActiveException extends \Ice\UserException
    {
        public function __construct()
        {
        }

        public function ice_id()
        {
            return '::Ice::AdapterAlreadyActiveException';
        }

        public function __toString()
        {
            global $Ice__t_AdapterAlreadyActiveException;
            return IcePHP_stringifyException($this, $Ice__t_AdapterAlreadyActiveException);
        }
    }

    $Ice__t_AdapterAlreadyActiveException = IcePHP_defineException('::Ice::AdapterAlreadyActiveException', '\\Ice\\AdapterAlreadyActiveException', false, null, null);
}

namespace Ice
{
    global $Ice__t_ObjectNotFoundException;
    class ObjectNotFoundException extends \Ice\UserException
    {
        public function __construct()
        {
        }

        public function ice_id()
        {
            return '::Ice::ObjectNotFoundException';
        }

        public function __toString()
        {
            global $Ice__t_ObjectNotFoundException;
            return IcePHP_stringifyException($this, $Ice__t_ObjectNotFoundException);
        }
    }

    $Ice__t_ObjectNotFoundException = IcePHP_defineException('::Ice::ObjectNotFoundException', '\\Ice\\ObjectNotFoundException', false, null, null);
}

namespace Ice
{
    global $Ice__t_ServerNotFoundException;
    class ServerNotFoundException extends \Ice\UserException
    {
        public function __construct()
        {
        }

        public function ice_id()
        {
            return '::Ice::ServerNotFoundException';
        }

        public function __toString()
        {
            global $Ice__t_ServerNotFoundException;
            return IcePHP_stringifyException($this, $Ice__t_ServerNotFoundException);
        }
    }

    $Ice__t_ServerNotFoundException = IcePHP_defineException('::Ice::ServerNotFoundException', '\\Ice\\ServerNotFoundException', false, null, null);
}

namespace Ice
{
    global $Ice__t_LocatorRegistry;
    global $Ice__t_LocatorRegistryPrx;
    if(!isset($Ice__t_LocatorRegistry))
    {
        $Ice__t_LocatorRegistry = IcePHP_declareClass('::Ice::LocatorRegistry');
        $Ice__t_LocatorRegistryPrx = IcePHP_declareProxy('::Ice::LocatorRegistry');
    }
}

namespace Ice
{
    global $Ice__t_Locator;
    global $Ice__t_LocatorPrx;

    class LocatorPrxHelper
    {
        public static function checkedCast($proxy, $facetOrContext=null, $context=null)
        {
            return $proxy->ice_checkedCast('::Ice::Locator', $facetOrContext, $context);
        }

        public static function uncheckedCast($proxy, $facet=null)
        {
            return $proxy->ice_uncheckedCast('::Ice::Locator', $facet);
        }

        public static function ice_staticId()
        {
            return '::Ice::Locator';
        }
    }
    $Ice__t_Locator = IcePHP_defineClass('::Ice::Locator', '\\Ice\\Locator', -1, false, true, null, null);

    global $Ice__t_ObjectPrx;
    $Ice__t_LocatorPrx = IcePHP_defineProxy('::Ice::Locator', $Ice__t_ObjectPrx, null);

    global $Ice__t_Identity;
    global $Ice__t_ObjectPrx;
    global $IcePHP__t_string;
    global $Ice__t_LocatorRegistryPrx;
    IcePHP_defineOperation($Ice__t_LocatorPrx, 'findObjectById', 2, 1, 0, array(array($Ice__t_Identity)), null, array($Ice__t_ObjectPrx), array($Ice__t_ObjectNotFoundException));
    IcePHP_defineOperation($Ice__t_LocatorPrx, 'findAdapterById', 2, 1, 0, array(array($IcePHP__t_string)), null, array($Ice__t_ObjectPrx), array($Ice__t_AdapterNotFoundException));
    IcePHP_defineOperation($Ice__t_LocatorPrx, 'getRegistry', 2, 1, 0, null, null, array($Ice__t_LocatorRegistryPrx), null);
}

namespace Ice
{
    global $Ice__t_LocatorRegistry;
    global $Ice__t_LocatorRegistryPrx;

    class LocatorRegistryPrxHelper
    {
        public static function checkedCast($proxy, $facetOrContext=null, $context=null)
        {
            return $proxy->ice_checkedCast('::Ice::LocatorRegistry', $facetOrContext, $context);
        }

        public static function uncheckedCast($proxy, $facet=null)
        {
            return $proxy->ice_uncheckedCast('::Ice::LocatorRegistry', $facet);
        }

        public static function ice_staticId()
        {
            return '::Ice::LocatorRegistry';
        }
    }
    $Ice__t_LocatorRegistry = IcePHP_defineClass('::Ice::LocatorRegistry', '\\Ice\\LocatorRegistry', -1, false, true, null, null);

    global $Ice__t_ObjectPrx;
    $Ice__t_LocatorRegistryPrx = IcePHP_defineProxy('::Ice::LocatorRegistry', $Ice__t_ObjectPrx, null);

    global $IcePHP__t_string;
    global $Ice__t_ObjectPrx;
    global $Ice__t_ProcessPrx;
    IcePHP_defineOperation($Ice__t_LocatorRegistryPrx, 'setAdapterDirectProxy', 2, 2, 0, array(array($IcePHP__t_string), array($Ice__t_ObjectPrx)), null, null, array($Ice__t_AdapterNotFoundException, $Ice__t_AdapterAlreadyActiveException));
    IcePHP_defineOperation($Ice__t_LocatorRegistryPrx, 'setReplicatedAdapterDirectProxy', 2, 2, 0, array(array($IcePHP__t_string), array($IcePHP__t_string), array($Ice__t_ObjectPrx)), null, null, array($Ice__t_AdapterNotFoundException, $Ice__t_AdapterAlreadyActiveException, $Ice__t_InvalidReplicaGroupIdException));
    IcePHP_defineOperation($Ice__t_LocatorRegistryPrx, 'setServerProcessProxy', 2, 2, 0, array(array($IcePHP__t_string), array($Ice__t_ProcessPrx)), null, null, array($Ice__t_ServerNotFoundException));
}

namespace Ice
{
    global $Ice__t_LocatorFinder;
    global $Ice__t_LocatorFinderPrx;

    class LocatorFinderPrxHelper
    {
        public static function checkedCast($proxy, $facetOrContext=null, $context=null)
        {
            return $proxy->ice_checkedCast('::Ice::LocatorFinder', $facetOrContext, $context);
        }

        public static function uncheckedCast($proxy, $facet=null)
        {
            return $proxy->ice_uncheckedCast('::Ice::LocatorFinder', $facet);
        }

        public static function ice_staticId()
        {
            return '::Ice::LocatorFinder';
        }
    }
    $Ice__t_LocatorFinder = IcePHP_defineClass('::Ice::LocatorFinder', '\\Ice\\LocatorFinder', -1, false, true, null, null);

    global $Ice__t_ObjectPrx;
    $Ice__t_LocatorFinderPrx = IcePHP_defineProxy('::Ice::LocatorFinder', $Ice__t_ObjectPrx, null);

    global $Ice__t_LocatorPrx;
    IcePHP_defineOperation($Ice__t_LocatorFinderPrx, 'getLocator', 0, 0, 0, null, null, array($Ice__t_LocatorPrx), null);
}
namespace
{new Ice\SliceChecksumInit(array(
    "::Ice::AdapterAlreadyActiveException" => "bf5f24acc569fea5251d9f8532a83ab8",
    "::Ice::AdapterNotFoundException" => "55f1a93f62d3937d94533ad2894ad9c",
    "::Ice::InvalidReplicaGroupIdException" => "7876104b5711f2b49ae078686a03f",
    "::Ice::Locator" => "5efd321bc74cc794fed432e3f5186d9",
    "::Ice::LocatorFinder" => "19b7a40de7be4cae27f4f8d867bd682",
    "::Ice::LocatorRegistry" => "e9f8ca2c8ce174f9214961e8596b7ed",
    "::Ice::ObjectNotFoundException" => "23fe4ef042d6496b97c4e2313f6c4675",
    "::Ice::ServerNotFoundException" => "bafa988368a55c1471e3c7be16baa74"));
}
?>