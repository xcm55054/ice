<?php
//
// Copyright (c) ZeroC, Inc. All rights reserved.
//
//
// Ice version 3.7.3
//
// <auto-generated>
//
// Generated from file `Process.ice'
//
// Warning: do not edit this file.
//
// </auto-generated>
//


namespace Ice
{
    global $Ice__t_Process;
    global $Ice__t_ProcessPrx;

    class ProcessPrxHelper
    {
        public static function checkedCast($proxy, $facetOrContext=null, $context=null)
        {
            return $proxy->ice_checkedCast('::Ice::Process', $facetOrContext, $context);
        }

        public static function uncheckedCast($proxy, $facet=null)
        {
            return $proxy->ice_uncheckedCast('::Ice::Process', $facet);
        }

        public static function ice_staticId()
        {
            return '::Ice::Process';
        }
    }
    $Ice__t_Process = IcePHP_defineClass('::Ice::Process', '\\Ice\\Process', -1, false, true, null, null);

    global $Ice__t_ObjectPrx;
    $Ice__t_ProcessPrx = IcePHP_defineProxy('::Ice::Process', $Ice__t_ObjectPrx, null);

    global $IcePHP__t_string;
    global $IcePHP__t_int;
    IcePHP_defineOperation($Ice__t_ProcessPrx, 'shutdown', 0, 0, 0, null, null, null, null);
    IcePHP_defineOperation($Ice__t_ProcessPrx, 'writeMessage', 0, 0, 0, array(array($IcePHP__t_string), array($IcePHP__t_int)), null, null, null);
}
namespace
{new Ice\SliceChecksumInit(array(
    "::Ice::Process" => "e3a9673d486a5bf031844cac6f9d287e"));
}
?>