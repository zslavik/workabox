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

class APIService_ImportRoutings_args
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'apiKey',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'importdata',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Workabox\API\Routings',
        ),
    );

    /**
     * @var string
     */
    public $apiKey = null;
    /**
     * @var \Workabox\API\Routings
     */
    public $importdata = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['apiKey'])) {
                $this->apiKey = $vals['apiKey'];
            }
            if (isset($vals['importdata'])) {
                $this->importdata = $vals['importdata'];
            }
        }
    }

    public function getName()
    {
        return 'APIService_ImportRoutings_args';
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
                        $xfer += $input->readString($this->apiKey);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRUCT) {
                        $this->importdata = new \Workabox\API\Routings();
                        $xfer += $this->importdata->read($input);
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
        $xfer += $output->writeStructBegin('APIService_ImportRoutings_args');
        if ($this->apiKey !== null) {
            $xfer += $output->writeFieldBegin('apiKey', TType::STRING, 1);
            $xfer += $output->writeString($this->apiKey);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->importdata !== null) {
            if (!is_object($this->importdata)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('importdata', TType::STRUCT, 2);
            $xfer += $this->importdata->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
