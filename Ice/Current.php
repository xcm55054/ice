<?php
//
// Copyright (c) ZeroC, Inc. All rights reserved.
//
//
// Ice version 3.7.3
//
// <auto-generated>
//
// Generated from file `Current.ice'
//
// Warning: do not edit this file.
//
// </auto-generated>
//


namespace
{
    require_once 'Ice/ObjectAdapterF.php';
    require_once 'Ice/ConnectionF.php';
    require_once 'Ice/Identity.php';
    require_once 'Ice/Version.php';
}

namespace Ice
{
    global $Ice__t_Context;

    if(!isset($Ice__t_Context))
    {
        global $IcePHP__t_string;
        global $IcePHP__t_string;
        $Ice__t_Context = IcePHP_defineDictionary('::Ice::Context', $IcePHP__t_string, $IcePHP__t_string);
    }
}

namespace Ice
{
    global $Ice__t_OperationMode;
    class OperationMode
    {
        const Normal = 0;
        const Nonmutating = 1;
        const Idempotent = 2;
    }

    $Ice__t_OperationMode = IcePHP_defineEnum('::Ice::OperationMode', array('Normal', 0, 'Nonmutating', 1, 'Idempotent', 2));
}

namespace Ice
{
    global $Ice__t_Current;
    class Current
    {
        public function __construct($adapter=null, $con=null, $id=null, $facet='', $operation='', $mode=\Ice\OperationMode::Normal, $ctx=null, $requestId=0, $encoding=null)
        {
            $this->adapter = $adapter;
            $this->con = $con;
            $this->id = is_null($id) ? new \Ice\Identity : $id;
            $this->facet = $facet;
            $this->operation = $operation;
            $this->mode = $mode;
            $this->ctx = $ctx;
            $this->requestId = $requestId;
            $this->encoding = is_null($encoding) ? new \Ice\EncodingVersion : $encoding;
        }

        public function __toString()
        {
            global $Ice__t_Current;
            return IcePHP_stringify($this, $Ice__t_Current);
        }

        public $adapter;
        public $con;
        public $id;
        public $facet;
        public $operation;
        public $mode;
        public $ctx;
        public $requestId;
        public $encoding;
    }

    global $Ice__t_ObjectAdapter;
    global $Ice__t_Connection;
    global $Ice__t_Identity;
    global $IcePHP__t_string;
    global $Ice__t_OperationMode;
    global $Ice__t_Context;
    global $IcePHP__t_int;
    global $Ice__t_EncodingVersion;
    $Ice__t_Current = IcePHP_defineStruct('::Ice::Current', '\\Ice\\Current', array(
        array('adapter', $Ice__t_ObjectAdapter),
        array('con', $Ice__t_Connection),
        array('id', $Ice__t_Identity),
        array('facet', $IcePHP__t_string),
        array('operation', $IcePHP__t_string),
        array('mode', $Ice__t_OperationMode),
        array('ctx', $Ice__t_Context),
        array('requestId', $IcePHP__t_int),
        array('encoding', $Ice__t_EncodingVersion)));
}
namespace
{new Ice\SliceChecksumInit(array(
    "::Ice::Context" => "e6cb8aba8a3ca160eab3597c6fbbeba",
    "::Ice::OperationMode" => "56db1e0dd464f97828282bdb11d8955"));
}
?>
