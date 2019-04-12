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

class APIService_ImportOffice_result
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        0 => array(
            'var' => 'success',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        1 => array(
            'var' => 'ex',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Workabox\API\APIException',
        ),
    );

    /**
     * @var int
     */
    public $success = null;
    /**
     * @var \Workabox\API\APIException
     */
    public $ex = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['success'])) {
                $this->success = $vals['success'];
            }
            if (isset($vals['ex'])) {
                $this->ex = $vals['ex'];
            }
        }
    }

    public function getName()
    {
        return 'APIService_ImportOffice_result';
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
                case 0:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->success);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 1:
                    if ($ftype == TType::STRUCT) {
                        $this->ex = new \Workabox\API\APIException();
                        $xfer += $this->ex->read($input);
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
        $xfer += $output->writeStructBegin('APIService_ImportOffice_result');
        if ($this->success !== null) {
            $xfer += $output->writeFieldBegin('success', TType::I32, 0);
            $xfer += $output->writeI32($this->success);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->ex !== null) {
            $xfer += $output->writeFieldBegin('ex', TType::STRUCT, 1);
            $xfer += $this->ex->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
