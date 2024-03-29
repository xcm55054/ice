<?php
//
// Copyright (c) ZeroC, Inc. All rights reserved.
//
//
// Ice version 3.7.3
//
// <auto-generated>
//
// Generated from file `Metrics.ice'
//
// Warning: do not edit this file.
//
// </auto-generated>
//


namespace
{
    require_once 'Ice/BuiltinSequences.php';
}

namespace IceMX
{
    global $IceMX__t_StringIntDict;

    if(!isset($IceMX__t_StringIntDict))
    {
        global $IcePHP__t_string;
        global $IcePHP__t_int;
        $IceMX__t_StringIntDict = IcePHP_defineDictionary('::IceMX::StringIntDict', $IcePHP__t_string, $IcePHP__t_int);
    }
}

namespace IceMX
{
    global $IceMX__t_Metrics;
    class Metrics extends \Ice\Value
    {
        public function __construct($id='', $total=0, $current=0, $totalLifetime=0, $failures=0)
        {
            $this->id = $id;
            $this->total = $total;
            $this->current = $current;
            $this->totalLifetime = $totalLifetime;
            $this->failures = $failures;
        }

        public function ice_id()
        {
            return '::IceMX::Metrics';
        }

        public static function ice_staticId()
        {
            return '::IceMX::Metrics';
        }

        public function __toString()
        {
            global $IceMX__t_Metrics;
            return IcePHP_stringify($this, $IceMX__t_Metrics);
        }

        public $id;
        public $total;
        public $current;
        public $totalLifetime;
        public $failures;
    }

    global $Ice__t_Value;
    global $IcePHP__t_string;
    global $IcePHP__t_long;
    global $IcePHP__t_int;
    $IceMX__t_Metrics = IcePHP_defineClass('::IceMX::Metrics', '\\IceMX\\Metrics', -1, false, false, $Ice__t_Value, array(
        array('id', $IcePHP__t_string, false, 0),
        array('total', $IcePHP__t_long, false, 0),
        array('current', $IcePHP__t_int, false, 0),
        array('totalLifetime', $IcePHP__t_long, false, 0),
        array('failures', $IcePHP__t_int, false, 0)));
}

namespace IceMX
{
    global $IceMX__t_MetricsFailures;
    class MetricsFailures
    {
        public function __construct($id='', $failures=null)
        {
            $this->id = $id;
            $this->failures = $failures;
        }

        public function __toString()
        {
            global $IceMX__t_MetricsFailures;
            return IcePHP_stringify($this, $IceMX__t_MetricsFailures);
        }

        public $id;
        public $failures;
    }

    global $IcePHP__t_string;
    global $IceMX__t_StringIntDict;
    $IceMX__t_MetricsFailures = IcePHP_defineStruct('::IceMX::MetricsFailures', '\\IceMX\\MetricsFailures', array(
        array('id', $IcePHP__t_string),
        array('failures', $IceMX__t_StringIntDict)));
}

namespace IceMX
{
    global $IceMX__t_MetricsFailuresSeq;

    if(!isset($IceMX__t_MetricsFailuresSeq))
    {
        global $IceMX__t_MetricsFailures;
        $IceMX__t_MetricsFailuresSeq = IcePHP_defineSequence('::IceMX::MetricsFailuresSeq', $IceMX__t_MetricsFailures);
    }
}

namespace IceMX
{
    global $IceMX__t_MetricsMap;

    if(!isset($IceMX__t_MetricsMap))
    {
        global $IceMX__t_Metrics;
        $IceMX__t_MetricsMap = IcePHP_defineSequence('::IceMX::MetricsMap', $IceMX__t_Metrics);
    }
}

namespace IceMX
{
    global $IceMX__t_MetricsView;

    if(!isset($IceMX__t_MetricsView))
    {
        global $IcePHP__t_string;
        global $IceMX__t_MetricsMap;
        $IceMX__t_MetricsView = IcePHP_defineDictionary('::IceMX::MetricsView', $IcePHP__t_string, $IceMX__t_MetricsMap);
    }
}

namespace IceMX
{
    global $IceMX__t_UnknownMetricsView;
    class UnknownMetricsView extends \Ice\UserException
    {
        public function __construct()
        {
        }

        public function ice_id()
        {
            return '::IceMX::UnknownMetricsView';
        }

        public function __toString()
        {
            global $IceMX__t_UnknownMetricsView;
            return IcePHP_stringifyException($this, $IceMX__t_UnknownMetricsView);
        }
    }

    $IceMX__t_UnknownMetricsView = IcePHP_defineException('::IceMX::UnknownMetricsView', '\\IceMX\\UnknownMetricsView', false, null, null);
}

namespace IceMX
{
    global $IceMX__t_MetricsAdmin;
    global $IceMX__t_MetricsAdminPrx;

    class MetricsAdminPrxHelper
    {
        public static function checkedCast($proxy, $facetOrContext=null, $context=null)
        {
            return $proxy->ice_checkedCast('::IceMX::MetricsAdmin', $facetOrContext, $context);
        }

        public static function uncheckedCast($proxy, $facet=null)
        {
            return $proxy->ice_uncheckedCast('::IceMX::MetricsAdmin', $facet);
        }

        public static function ice_staticId()
        {
            return '::IceMX::MetricsAdmin';
        }
    }
    $IceMX__t_MetricsAdmin = IcePHP_defineClass('::IceMX::MetricsAdmin', '\\IceMX\\MetricsAdmin', -1, false, true, null, null);

    global $Ice__t_ObjectPrx;
    $IceMX__t_MetricsAdminPrx = IcePHP_defineProxy('::IceMX::MetricsAdmin', $Ice__t_ObjectPrx, null);

    global $Ice__t_StringSeq;
    global $IcePHP__t_string;
    global $IcePHP__t_long;
    global $IceMX__t_MetricsView;
    global $IceMX__t_MetricsFailuresSeq;
    global $IceMX__t_MetricsFailures;
    IcePHP_defineOperation($IceMX__t_MetricsAdminPrx, 'getMetricsViewNames', 0, 0, 2, null, array(array($Ice__t_StringSeq)), array($Ice__t_StringSeq), null);
    IcePHP_defineOperation($IceMX__t_MetricsAdminPrx, 'enableMetricsView', 0, 0, 2, array(array($IcePHP__t_string)), null, null, array($IceMX__t_UnknownMetricsView));
    IcePHP_defineOperation($IceMX__t_MetricsAdminPrx, 'disableMetricsView', 0, 0, 2, array(array($IcePHP__t_string)), null, null, array($IceMX__t_UnknownMetricsView));
    IcePHP_defineOperation($IceMX__t_MetricsAdminPrx, 'getMetricsView', 0, 0, 2, array(array($IcePHP__t_string)), array(array($IcePHP__t_long)), array($IceMX__t_MetricsView), array($IceMX__t_UnknownMetricsView));
    IcePHP_defineOperation($IceMX__t_MetricsAdminPrx, 'getMapMetricsFailures', 0, 0, 2, array(array($IcePHP__t_string), array($IcePHP__t_string)), null, array($IceMX__t_MetricsFailuresSeq), array($IceMX__t_UnknownMetricsView));
    IcePHP_defineOperation($IceMX__t_MetricsAdminPrx, 'getMetricsFailures', 0, 0, 2, array(array($IcePHP__t_string), array($IcePHP__t_string), array($IcePHP__t_string)), null, array($IceMX__t_MetricsFailures), array($IceMX__t_UnknownMetricsView));
}

namespace IceMX
{
    global $IceMX__t_ThreadMetrics;
    class ThreadMetrics extends \IceMX\Metrics
    {
        public function __construct($id='', $total=0, $current=0, $totalLifetime=0, $failures=0, $inUseForIO=0, $inUseForUser=0, $inUseForOther=0)
        {
            parent::__construct($id, $total, $current, $totalLifetime, $failures);
            $this->inUseForIO = $inUseForIO;
            $this->inUseForUser = $inUseForUser;
            $this->inUseForOther = $inUseForOther;
        }

        public function ice_id()
        {
            return '::IceMX::ThreadMetrics';
        }

        public static function ice_staticId()
        {
            return '::IceMX::ThreadMetrics';
        }

        public function __toString()
        {
            global $IceMX__t_ThreadMetrics;
            return IcePHP_stringify($this, $IceMX__t_ThreadMetrics);
        }

        public $inUseForIO;
        public $inUseForUser;
        public $inUseForOther;
    }

    global $IceMX__t_Metrics;
    global $IcePHP__t_int;
    $IceMX__t_ThreadMetrics = IcePHP_defineClass('::IceMX::ThreadMetrics', '\\IceMX\\ThreadMetrics', -1, false, false, $IceMX__t_Metrics, array(
        array('inUseForIO', $IcePHP__t_int, false, 0),
        array('inUseForUser', $IcePHP__t_int, false, 0),
        array('inUseForOther', $IcePHP__t_int, false, 0)));
}

namespace IceMX
{
    global $IceMX__t_DispatchMetrics;
    class DispatchMetrics extends \IceMX\Metrics
    {
        public function __construct($id='', $total=0, $current=0, $totalLifetime=0, $failures=0, $userException=0, $size=0, $replySize=0)
        {
            parent::__construct($id, $total, $current, $totalLifetime, $failures);
            $this->userException = $userException;
            $this->size = $size;
            $this->replySize = $replySize;
        }

        public function ice_id()
        {
            return '::IceMX::DispatchMetrics';
        }

        public static function ice_staticId()
        {
            return '::IceMX::DispatchMetrics';
        }

        public function __toString()
        {
            global $IceMX__t_DispatchMetrics;
            return IcePHP_stringify($this, $IceMX__t_DispatchMetrics);
        }

        public $userException;
        public $size;
        public $replySize;
    }

    global $IceMX__t_Metrics;
    global $IcePHP__t_int;
    global $IcePHP__t_long;
    $IceMX__t_DispatchMetrics = IcePHP_defineClass('::IceMX::DispatchMetrics', '\\IceMX\\DispatchMetrics', -1, false, false, $IceMX__t_Metrics, array(
        array('userException', $IcePHP__t_int, false, 0),
        array('size', $IcePHP__t_long, false, 0),
        array('replySize', $IcePHP__t_long, false, 0)));
}

namespace IceMX
{
    global $IceMX__t_ChildInvocationMetrics;
    class ChildInvocationMetrics extends \IceMX\Metrics
    {
        public function __construct($id='', $total=0, $current=0, $totalLifetime=0, $failures=0, $size=0, $replySize=0)
        {
            parent::__construct($id, $total, $current, $totalLifetime, $failures);
            $this->size = $size;
            $this->replySize = $replySize;
        }

        public function ice_id()
        {
            return '::IceMX::ChildInvocationMetrics';
        }

        public static function ice_staticId()
        {
            return '::IceMX::ChildInvocationMetrics';
        }

        public function __toString()
        {
            global $IceMX__t_ChildInvocationMetrics;
            return IcePHP_stringify($this, $IceMX__t_ChildInvocationMetrics);
        }

        public $size;
        public $replySize;
    }

    global $IceMX__t_Metrics;
    global $IcePHP__t_long;
    $IceMX__t_ChildInvocationMetrics = IcePHP_defineClass('::IceMX::ChildInvocationMetrics', '\\IceMX\\ChildInvocationMetrics', -1, false, false, $IceMX__t_Metrics, array(
        array('size', $IcePHP__t_long, false, 0),
        array('replySize', $IcePHP__t_long, false, 0)));
}

namespace IceMX
{
    global $IceMX__t_CollocatedMetrics;
    class CollocatedMetrics extends \IceMX\ChildInvocationMetrics
    {
        public function __construct($id='', $total=0, $current=0, $totalLifetime=0, $failures=0, $size=0, $replySize=0)
        {
            parent::__construct($id, $total, $current, $totalLifetime, $failures, $size, $replySize);
        }

        public function ice_id()
        {
            return '::IceMX::CollocatedMetrics';
        }

        public static function ice_staticId()
        {
            return '::IceMX::CollocatedMetrics';
        }

        public function __toString()
        {
            global $IceMX__t_CollocatedMetrics;
            return IcePHP_stringify($this, $IceMX__t_CollocatedMetrics);
        }
    }

    global $IceMX__t_ChildInvocationMetrics;
    $IceMX__t_CollocatedMetrics = IcePHP_defineClass('::IceMX::CollocatedMetrics', '\\IceMX\\CollocatedMetrics', -1, false, false, $IceMX__t_ChildInvocationMetrics, null);
}

namespace IceMX
{
    global $IceMX__t_RemoteMetrics;
    class RemoteMetrics extends \IceMX\ChildInvocationMetrics
    {
        public function __construct($id='', $total=0, $current=0, $totalLifetime=0, $failures=0, $size=0, $replySize=0)
        {
            parent::__construct($id, $total, $current, $totalLifetime, $failures, $size, $replySize);
        }

        public function ice_id()
        {
            return '::IceMX::RemoteMetrics';
        }

        public static function ice_staticId()
        {
            return '::IceMX::RemoteMetrics';
        }

        public function __toString()
        {
            global $IceMX__t_RemoteMetrics;
            return IcePHP_stringify($this, $IceMX__t_RemoteMetrics);
        }
    }

    global $IceMX__t_ChildInvocationMetrics;
    $IceMX__t_RemoteMetrics = IcePHP_defineClass('::IceMX::RemoteMetrics', '\\IceMX\\RemoteMetrics', -1, false, false, $IceMX__t_ChildInvocationMetrics, null);
}

namespace IceMX
{
    global $IceMX__t_InvocationMetrics;
    class InvocationMetrics extends \IceMX\Metrics
    {
        public function __construct($id='', $total=0, $current=0, $totalLifetime=0, $failures=0, $retry=0, $userException=0, $remotes=null, $collocated=null)
        {
            parent::__construct($id, $total, $current, $totalLifetime, $failures);
            $this->retry = $retry;
            $this->userException = $userException;
            $this->remotes = $remotes;
            $this->collocated = $collocated;
        }

        public function ice_id()
        {
            return '::IceMX::InvocationMetrics';
        }

        public static function ice_staticId()
        {
            return '::IceMX::InvocationMetrics';
        }

        public function __toString()
        {
            global $IceMX__t_InvocationMetrics;
            return IcePHP_stringify($this, $IceMX__t_InvocationMetrics);
        }

        public $retry;
        public $userException;
        public $remotes;
        public $collocated;
    }

    $IceMX__t_InvocationMetrics = IcePHP_declareClass('::IceMX::InvocationMetrics');

    global $IceMX__t_Metrics;
    global $IcePHP__t_int;
    global $IceMX__t_MetricsMap;
    $IceMX__t_InvocationMetrics = IcePHP_defineClass('::IceMX::InvocationMetrics', '\\IceMX\\InvocationMetrics', -1, false, false, $IceMX__t_Metrics, array(
        array('retry', $IcePHP__t_int, false, 0),
        array('userException', $IcePHP__t_int, false, 0),
        array('remotes', $IceMX__t_MetricsMap, false, 0),
        array('collocated', $IceMX__t_MetricsMap, false, 0)));
}

namespace IceMX
{
    global $IceMX__t_ConnectionMetrics;
    class ConnectionMetrics extends \IceMX\Metrics
    {
        public function __construct($id='', $total=0, $current=0, $totalLifetime=0, $failures=0, $receivedBytes=0, $sentBytes=0)
        {
            parent::__construct($id, $total, $current, $totalLifetime, $failures);
            $this->receivedBytes = $receivedBytes;
            $this->sentBytes = $sentBytes;
        }

        public function ice_id()
        {
            return '::IceMX::ConnectionMetrics';
        }

        public static function ice_staticId()
        {
            return '::IceMX::ConnectionMetrics';
        }

        public function __toString()
        {
            global $IceMX__t_ConnectionMetrics;
            return IcePHP_stringify($this, $IceMX__t_ConnectionMetrics);
        }

        public $receivedBytes;
        public $sentBytes;
    }

    global $IceMX__t_Metrics;
    global $IcePHP__t_long;
    $IceMX__t_ConnectionMetrics = IcePHP_defineClass('::IceMX::ConnectionMetrics', '\\IceMX\\ConnectionMetrics', -1, false, false, $IceMX__t_Metrics, array(
        array('receivedBytes', $IcePHP__t_long, false, 0),
        array('sentBytes', $IcePHP__t_long, false, 0)));
}
namespace
{new Ice\SliceChecksumInit(array(
    "::IceMX::ChildInvocationMetrics" => "e8d7639c4944abd2b46e1676712e3914",
    "::IceMX::CollocatedMetrics" => "3249804089f8e0882d12276c8e6d4165",
    "::IceMX::ConnectionMetrics" => "ff705e359a88ff9bc35ab28283c8e29",
    "::IceMX::DispatchMetrics" => "e583ad5ced38253d9ff59929af294ba",
    "::IceMX::InvocationMetrics" => "64216b477afc9431249a60ae5913f8",
    "::IceMX::Metrics" => "94c8036c48f8749deb5f33a364ecee",
    "::IceMX::MetricsAdmin" => "88697f8371c057b7177760281b33a5",
    "::IceMX::MetricsFailures" => "19ecb6e915befa597421fa4c92a1ac",
    "::IceMX::MetricsFailuresSeq" => "a62163545a1a5a54ade5d7d826aac8bd",
    "::IceMX::MetricsMap" => "22667dd9415a83de99a17cf19f63975",
    "::IceMX::MetricsView" => "c8c150b17e594dea2e3c7c2d4738b6",
    "::IceMX::RemoteMetrics" => "1dda65bb856a2c2fcaf32ea2b40682f",
    "::IceMX::StringIntDict" => "e6c7aa764386f6528aa38c89cbff5dd4",
    "::IceMX::ThreadMetrics" => "54ca6eb235a9769ade47e8ae200ff18",
    "::IceMX::UnknownMetricsView" => "18de0c2a8812deb6facfd521d84ba6"));
}
?>
