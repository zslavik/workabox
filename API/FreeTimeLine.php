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

class FreeTimeLine
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'FreeTimeTo',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'DDate',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'FreeTimeFrom',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var string
     */
    public $FreeTimeTo = null;
    /**
     * @var string
     */
    public $DDate = null;
    /**
     * @var string
     */
    public $FreeTimeFrom = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['FreeTimeTo'])) {
                $this->FreeTimeTo = $vals['FreeTimeTo'];
            }
            if (isset($vals['DDate'])) {
                $this->DDate = $vals['DDate'];
            }
            if (isset($vals['FreeTimeFrom'])) {
                $this->FreeTimeFrom = $vals['FreeTimeFrom'];
            }
        }
    }

    public function getName()
    {
        return 'FreeTimeLine';
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
                        $xfer += $input->readString($this->FreeTimeTo);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->DDate);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->FreeTimeFrom);
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
        $xfer += $output->writeStructBegin('FreeTimeLine');
        if ($this->FreeTimeTo !== null) {
            $xfer += $output->writeFieldBegin('FreeTimeTo', TType::STRING, 1);
            $xfer += $output->writeString($this->FreeTimeTo);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->DDate !== null) {
            $xfer += $output->writeFieldBegin('DDate', TType::STRING, 2);
            $xfer += $output->writeString($this->DDate);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->FreeTimeFrom !== null) {
            $xfer += $output->writeFieldBegin('FreeTimeFrom', TType::STRING, 3);
            $xfer += $output->writeString($this->FreeTimeFrom);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
