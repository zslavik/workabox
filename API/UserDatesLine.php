<?php
namespace Workabox\API;

/**
 * Autogenerated by Thrift Compiler (0.12.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class UserDatesLine
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'DateAndTime',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'UserPropertyId',
            'isRequired' => false,
            'type' => TType::I32,
        ),
    );

    /**
     * @var string
     */
    public $DateAndTime = null;
    /**
     * @var int
     */
    public $UserPropertyId = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['DateAndTime'])) {
                $this->DateAndTime = $vals['DateAndTime'];
            }
            if (isset($vals['UserPropertyId'])) {
                $this->UserPropertyId = $vals['UserPropertyId'];
            }
        }
    }

    public function getName()
    {
        return 'UserDatesLine';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->DateAndTime);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->UserPropertyId);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('UserDatesLine');
        if ($this->DateAndTime !== null) {
            $xfer += $output->writeFieldBegin('DateAndTime', TType::STRING, 1);
            $xfer += $output->writeString($this->DateAndTime);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->UserPropertyId !== null) {
            $xfer += $output->writeFieldBegin('UserPropertyId', TType::I32, 2);
            $xfer += $output->writeI32($this->UserPropertyId);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
