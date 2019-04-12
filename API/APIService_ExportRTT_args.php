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

class APIService_ExportRTT_args
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'apiKey',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'date',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'filter',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Workabox\API\RTTFilter',
        ),
    );

    /**
     * @var string
     */
    public $apiKey = null;
    /**
     * @var string
     */
    public $date = null;
    /**
     * @var \Workabox\API\RTTFilter
     */
    public $filter = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['apiKey'])) {
                $this->apiKey = $vals['apiKey'];
            }
            if (isset($vals['date'])) {
                $this->date = $vals['date'];
            }
            if (isset($vals['filter'])) {
                $this->filter = $vals['filter'];
            }
        }
    }

    public function getName()
    {
        return 'APIService_ExportRTT_args';
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
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->date);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRUCT) {
                        $this->filter = new \Workabox\API\RTTFilter();
                        $xfer += $this->filter->read($input);
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
        $xfer += $output->writeStructBegin('APIService_ExportRTT_args');
        if ($this->apiKey !== null) {
            $xfer += $output->writeFieldBegin('apiKey', TType::STRING, 1);
            $xfer += $output->writeString($this->apiKey);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->date !== null) {
            $xfer += $output->writeFieldBegin('date', TType::STRING, 2);
            $xfer += $output->writeString($this->date);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->filter !== null) {
            if (!is_object($this->filter)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('filter', TType::STRUCT, 3);
            $xfer += $this->filter->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
