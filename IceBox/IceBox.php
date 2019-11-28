<?php
//
// Copyright (c) ZeroC, Inc. All rights reserved.
//
//
// Ice version 3.7.3
//
// <auto-generated>
//
// Generated from file `IceBox.ice'
//
// Warning: do not edit this file.
//
// </auto-generated>
//


namespace
{
    require_once 'Ice/BuiltinSequences.php';
    require_once 'Ice/CommunicatorF.php';
    require_once 'Ice/PropertiesF.php';
    require_once 'Ice/SliceChecksumDict.php';
}

namespace IceBox
{
    global $IceBox__t_FailureException;
    class FailureException extends \Ice\LocalException
    {
        public function __construct($reason='')
        {
            $this->reason = $reason;
        }

        public function ice_id()
        {
            return '::IceBox::FailureException';
        }

        public function __toString()
        {
            global $IceBox__t_FailureException;
            return IcePHP_stringifyException($this, $IceBox__t_FailureException);
        }

        public $reason;
    }
    global $IcePHP__t_string;

    $IceBox__t_FailureException = IcePHP_defineException('::IceBox::FailureException', '\\IceBox\\FailureException', false, null, array(
        array('reason', $IcePHP__t_string, false, 0)));
}

namespace IceBox
{
    global $IceBox__t_AlreadyStartedException;
    class AlreadyStartedException extends \Ice\UserException
    {
        public function __construct()
        {
        }

        public function ice_id()
        {
            return '::IceBox::AlreadyStartedException';
        }

        public function __toString()
        {
            global $IceBox__t_AlreadyStartedException;
            return IcePHP_stringifyException($this, $IceBox__t_AlreadyStartedException);
        }
    }

    $IceBox__t_AlreadyStartedException = IcePHP_defineException('::IceBox::AlreadyStartedException', '\\IceBox\\AlreadyStartedException', false, null, null);
}

namespace IceBox
{
    global $IceBox__t_AlreadyStoppedException;
    class AlreadyStoppedException extends \Ice\UserException
    {
        public function __construct()
        {
        }

        public function ice_id()
        {
            return '::IceBox::AlreadyStoppedException';
        }

        public function __toString()
        {
            global $IceBox__t_AlreadyStoppedException;
            return IcePHP_stringifyException($this, $IceBox__t_AlreadyStoppedException);
        }
    }

    $IceBox__t_AlreadyStoppedException = IcePHP_defineException('::IceBox::AlreadyStoppedException', '\\IceBox\\AlreadyStoppedException', false, null, null);
}

namespace IceBox
{
    global $IceBox__t_NoSuchServiceException;
    class NoSuchServiceException extends \Ice\UserException
    {
        public function __construct()
        {
        }

        public function ice_id()
        {
            return '::IceBox::NoSuchServiceException';
        }

        public function __toString()
        {
            global $IceBox__t_NoSuchServiceException;
            return IcePHP_stringifyException($this, $IceBox__t_NoSuchServiceException);
        }
    }

    $IceBox__t_NoSuchServiceException = IcePHP_defineException('::IceBox::NoSuchServiceException', '\\IceBox\\NoSuchServiceException', false, null, null);
}

namespace IceBox
{
    global $IceBox__t_Service;
    interface Service
    {
        public function start($name, $communicator, $args);
        public function stop();
    }
    $IceBox__t_Service = IcePHP_defineClass('::IceBox::Service', '\\IceBox\\Service', -1, false, true, null, null);
}

namespace IceBox
{
    global $IceBox__t_ServiceObserver;
    global $IceBox__t_ServiceObserverPrx;

    class ServiceObserverPrxHelper
    {
        public static function checkedCast($proxy, $facetOrContext=null, $context=null)
        {
            return $proxy->ice_checkedCast('::IceBox::ServiceObserver', $facetOrContext, $context);
        }

        public static function uncheckedCast($proxy, $facet=null)
        {
            return $proxy->ice_uncheckedCast('::IceBox::ServiceObserver', $facet);
        }

        public static function ice_staticId()
        {
            return '::IceBox::ServiceObserver';
        }
    }
    $IceBox__t_ServiceObserver = IcePHP_defineClass('::IceBox::ServiceObserver', '\\IceBox\\ServiceObserver', -1, false, true, null, null);

    global $Ice__t_ObjectPrx;
    $IceBox__t_ServiceObserverPrx = IcePHP_defineProxy('::IceBox::ServiceObserver', $Ice__t_ObjectPrx, null);

    global $Ice__t_StringSeq;
    IcePHP_defineOperation($IceBox__t_ServiceObserverPrx, 'servicesStarted', 0, 0, 0, array(array($Ice__t_StringSeq)), null, null, null);
    IcePHP_defineOperation($IceBox__t_ServiceObserverPrx, 'servicesStopped', 0, 0, 0, array(array($Ice__t_StringSeq)), null, null, null);
}

namespace IceBox
{
    global $IceBox__t_ServiceManager;
    global $IceBox__t_ServiceManagerPrx;

    class ServiceManagerPrxHelper
    {
        public static function checkedCast($proxy, $facetOrContext=null, $context=null)
        {
            return $proxy->ice_checkedCast('::IceBox::ServiceManager', $facetOrContext, $context);
        }

        public static function uncheckedCast($proxy, $facet=null)
        {
            return $proxy->ice_uncheckedCast('::IceBox::ServiceManager', $facet);
        }

        public static function ice_staticId()
        {
            return '::IceBox::ServiceManager';
        }
    }
    $IceBox__t_ServiceManager = IcePHP_defineClass('::IceBox::ServiceManager', '\\IceBox\\ServiceManager', -1, false, true, null, null);

    global $Ice__t_ObjectPrx;
    $IceBox__t_ServiceManagerPrx = IcePHP_defineProxy('::IceBox::ServiceManager', $Ice__t_ObjectPrx, null);

    global $Ice__t_SliceChecksumDict;
    global $IcePHP__t_string;
    global $IceBox__t_ServiceObserverPrx;
    IcePHP_defineOperation($IceBox__t_ServiceManagerPrx, 'getSliceChecksums', 2, 1, 0, null, null, array($Ice__t_SliceChecksumDict), null);
    IcePHP_defineOperation($IceBox__t_ServiceManagerPrx, 'startService', 0, 0, 0, array(array($IcePHP__t_string)), null, null, array($IceBox__t_AlreadyStartedException, $IceBox__t_NoSuchServiceException));
    IcePHP_defineOperation($IceBox__t_ServiceManagerPrx, 'stopService', 0, 0, 0, array(array($IcePHP__t_string)), null, null, array($IceBox__t_AlreadyStoppedException, $IceBox__t_NoSuchServiceException));
    IcePHP_defineOperation($IceBox__t_ServiceManagerPrx, 'addObserver', 0, 0, 0, array(array($IceBox__t_ServiceObserverPrx)), null, null, null);
    IcePHP_defineOperation($IceBox__t_ServiceManagerPrx, 'shutdown', 0, 0, 0, null, null, null, null);
}
namespace
{new Ice\SliceChecksumInit(array(
    "::IceBox::AlreadyStartedException" => "d5b097af3221b37482d5f175502abf62",
    "::IceBox::AlreadyStoppedException" => "281d493a84d674b3a4335d6afc2c16",
    "::IceBox::NoSuchServiceException" => "5957f1c582d9aebad557cbdb7820d4",
    "::IceBox::ServiceManager" => "df3a42670c3ce4ef67d6125a5d04d4c",
    "::IceBox::ServiceObserver" => "f657781cda7438532a6c33e95988479c"));
}
?>
