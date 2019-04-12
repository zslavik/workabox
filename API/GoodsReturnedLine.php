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

class GoodsReturnedLine
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'Quantity',
            'isRequired' => false,
            'type' => TType::DOUBLE,
        ),
        2 => array(
            'var' => 'Goods',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Workabox\API\ObjectID',
        ),
    );

    /**
     * @var double
     */
    public $Quantity = null;
    /**
     * @var \Workabox\API\ObjectID
     */
    public $Goods = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['Quantity'])) {
                $this->Quantity = $vals['Quantity'];
            }
            if (isset($vals['Goods'])) {
                $this->Goods = $vals['Goods'];
            }
        }
    }

    public function getName()
    {
        return 'GoodsReturnedLine';
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
                    if ($ftype == TType::DOUBLE) {
                        $xfer += $input->readDouble($this->Quantity);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRUCT) {
                        $this->Goods = new \Workabox\API\ObjectID();
                        $xfer += $this->Goods->read($input);
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
        $xfer += $output->writeStructBegin('GoodsReturnedLine');
        if ($this->Quantity !== null) {
            $xfer += $output->writeFieldBegin('Quantity', TType::DOUBLE, 1);
            $xfer += $output->writeDouble($this->Quantity);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->Goods !== null) {
            if (!is_object($this->Goods)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('Goods', TType::STRUCT, 2);
            $xfer += $this->Goods->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
