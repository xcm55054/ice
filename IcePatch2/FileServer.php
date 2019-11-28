<?php
//
// Copyright (c) ZeroC, Inc. All rights reserved.
//
//
// Ice version 3.7.3
//
// <auto-generated>
//
// Generated from file `FileServer.ice'
//
// Warning: do not edit this file.
//
// </auto-generated>
//


namespace
{
    require_once 'IcePatch2/FileInfo.php';
}

namespace IcePatch2
{
    global $IcePatch2__t_ByteSeqSeq;

    if(!isset($IcePatch2__t_ByteSeqSeq))
    {
        global $Ice__t_ByteSeq;
        $IcePatch2__t_ByteSeqSeq = IcePHP_defineSequence('::IcePatch2::ByteSeqSeq', $Ice__t_ByteSeq);
    }
}

namespace IcePatch2
{
    global $IcePatch2__t_PartitionOutOfRangeException;
    class PartitionOutOfRangeException extends \Ice\UserException
    {
        public function __construct()
        {
        }

        public function ice_id()
        {
            return '::IcePatch2::PartitionOutOfRangeException';
        }

        public function __toString()
        {
            global $IcePatch2__t_PartitionOutOfRangeException;
            return IcePHP_stringifyException($this, $IcePatch2__t_PartitionOutOfRangeException);
        }
    }

    $IcePatch2__t_PartitionOutOfRangeException = IcePHP_defineException('::IcePatch2::PartitionOutOfRangeException', '\\IcePatch2\\PartitionOutOfRangeException', false, null, null);
}

namespace IcePatch2
{
    global $IcePatch2__t_FileAccessException;
    class FileAccessException extends \Ice\UserException
    {
        public function __construct($reason='')
        {
            $this->reason = $reason;
        }

        public function ice_id()
        {
            return '::IcePatch2::FileAccessException';
        }

        public function __toString()
        {
            global $IcePatch2__t_FileAccessException;
            return IcePHP_stringifyException($this, $IcePatch2__t_FileAccessException);
        }

        public $reason;
    }
    global $IcePHP__t_string;

    $IcePatch2__t_FileAccessException = IcePHP_defineException('::IcePatch2::FileAccessException', '\\IcePatch2\\FileAccessException', false, null, array(
        array('reason', $IcePHP__t_string, false, 0)));
}

namespace IcePatch2
{
    global $IcePatch2__t_FileSizeRangeException;
    class FileSizeRangeException extends \IcePatch2\FileAccessException
    {
        public function __construct($reason='')
        {
            parent::__construct($reason);
        }

        public function ice_id()
        {
            return '::IcePatch2::FileSizeRangeException';
        }

        public function __toString()
        {
            global $IcePatch2__t_FileSizeRangeException;
            return IcePHP_stringifyException($this, $IcePatch2__t_FileSizeRangeException);
        }
    }

    $IcePatch2__t_FileSizeRangeException = IcePHP_defineException('::IcePatch2::FileSizeRangeException', '\\IcePatch2\\FileSizeRangeException', false, $IcePatch2__t_FileAccessException, null);
}

namespace IcePatch2
{
    global $IcePatch2__t_FileServer;
    global $IcePatch2__t_FileServerPrx;

    class FileServerPrxHelper
    {
        public static function checkedCast($proxy, $facetOrContext=null, $context=null)
        {
            return $proxy->ice_checkedCast('::IcePatch2::FileServer', $facetOrContext, $context);
        }

        public static function uncheckedCast($proxy, $facet=null)
        {
            return $proxy->ice_uncheckedCast('::IcePatch2::FileServer', $facet);
        }

        public static function ice_staticId()
        {
            return '::IcePatch2::FileServer';
        }
    }
    $IcePatch2__t_FileServer = IcePHP_defineClass('::IcePatch2::FileServer', '\\IcePatch2\\FileServer', -1, false, true, null, null);

    global $Ice__t_ObjectPrx;
    $IcePatch2__t_FileServerPrx = IcePHP_defineProxy('::IcePatch2::FileServer', $Ice__t_ObjectPrx, null);

    global $IcePHP__t_int;
    global $IcePatch2__t_FileInfoSeq;
    global $IcePatch2__t_LargeFileInfoSeq;
    global $IcePatch2__t_ByteSeqSeq;
    global $Ice__t_ByteSeq;
    global $IcePHP__t_string;
    global $IcePHP__t_long;
    IcePHP_defineOperation($IcePatch2__t_FileServerPrx, 'getFileInfoSeq', 2, 1, 0, array(array($IcePHP__t_int)), null, array($IcePatch2__t_FileInfoSeq), array($IcePatch2__t_PartitionOutOfRangeException, $IcePatch2__t_FileSizeRangeException));
    IcePHP_defineOperation($IcePatch2__t_FileServerPrx, 'getLargeFileInfoSeq', 2, 1, 0, array(array($IcePHP__t_int)), null, array($IcePatch2__t_LargeFileInfoSeq), array($IcePatch2__t_PartitionOutOfRangeException));
    IcePHP_defineOperation($IcePatch2__t_FileServerPrx, 'getChecksumSeq', 2, 1, 0, null, null, array($IcePatch2__t_ByteSeqSeq), null);
    IcePHP_defineOperation($IcePatch2__t_FileServerPrx, 'getChecksum', 2, 1, 0, null, null, array($Ice__t_ByteSeq), null);
    IcePHP_defineOperation($IcePatch2__t_FileServerPrx, 'getFileCompressed', 2, 1, 0, array(array($IcePHP__t_string), array($IcePHP__t_int), array($IcePHP__t_int)), null, array($Ice__t_ByteSeq), array($IcePatch2__t_FileAccessException, $IcePatch2__t_FileSizeRangeException));
    IcePHP_defineOperation($IcePatch2__t_FileServerPrx, 'getLargeFileCompressed', 2, 1, 0, array(array($IcePHP__t_string), array($IcePHP__t_long), array($IcePHP__t_int)), null, array($Ice__t_ByteSeq), array($IcePatch2__t_FileAccessException));
}
namespace
{new Ice\SliceChecksumInit(array(
    "::IcePatch2::ByteSeqSeq" => "4bef9684e41babda8aa55f759a854c",
    "::IcePatch2::FileAccessException" => "e94ba15e1b6a3639c2358d2f384648",
    "::IcePatch2::FileServer" => "4e2d29a4d5995edae6405e69b265943b",
    "::IcePatch2::FileSizeRangeException" => "24ba4c71f6441c58b23a2058cd776c8",
    "::IcePatch2::PartitionOutOfRangeException" => "edd324eb399a3f6fecc1a28c2296d8"));
}
?>