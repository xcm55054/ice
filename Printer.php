<?php
//
// Copyright (c) ZeroC, Inc. All rights reserved.
//
//
// Ice version 3.7.3
//
// <auto-generated>
//
// Generated from file `Printer.ice'
//
// Warning: do not edit this file.
//
// </auto-generated>
//


namespace demoice
{
    global $demoice__t_Printer;
    global $demoice__t_PrinterPrx;

    class PrinterPrxHelper
    {
        public static function checkedCast($proxy, $facetOrContext=null, $context=null)
        {
            return $proxy->ice_checkedCast('::demoice::Printer', $facetOrContext, $context);
        }

        public static function uncheckedCast($proxy, $facet=null)
        {
            return $proxy->ice_uncheckedCast('::demoice::Printer', $facet);
        }

        public static function ice_staticId()
        {
            return '::demoice::Printer';
        }
    }
    $demoice__t_Printer = IcePHP_defineClass('::demoice::Printer', '\\demoice\\Printer', -1, false, true, null, null);

    global $Ice__t_ObjectPrx;
    $demoice__t_PrinterPrx = IcePHP_defineProxy('::demoice::Printer', $Ice__t_ObjectPrx, null);

    global $IcePHP__t_string;
    IcePHP_defineOperation($demoice__t_PrinterPrx, 'sayHello', 0, 0, 0, array(array($IcePHP__t_string)), null, array($IcePHP__t_string), null);
}
?>
