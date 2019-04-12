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

class GoodsPricesLine
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'Rest',
            'isRequired' => false,
            'type' => TType::DOUBLE,
        ),
        2 => array(
            'var' => 'Price',
            'isRequired' => false,
            'type' => TType::DOUBLE,
        ),
        3 => array(
            'var' => 'PricesOwner',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Workabox\API\ObjectID',
        ),
    );

    /**
     * @var double
     */
    public $Rest = null;
    /**
     * @var double
     */
    public $Price = null;
    /**
     * @var \Workabox\API\ObjectID
     */
    public $PricesOwner = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['Rest'])) {
                $this->Rest = $vals['Rest'];
            }
            if (isset($vals['Price'])) {
                $this->Price = $vals['Price'];
            }
            if (isset($vals['PricesOwner'])) {
                $this->PricesOwner = $vals['PricesOwner'];
            }
        }
    }

    public function getName()
    {
        return 'GoodsPricesLine';
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
                        $xfer += $input->readDouble($this->Rest);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::DOUBLE) {
                        $xfer += $input->readDouble($this->Price);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRUCT) {
                        $this->PricesOwner = new \Workabox\API\ObjectID();
                        $xfer += $this->PricesOwner->read($input);
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
        $xfer += $output->writeStructBegin('GoodsPricesLine');
        if ($this->Rest !== null) {
            $xfer += $output->writeFieldBegin('Rest', TType::DOUBLE, 1);
            $xfer += $output->writeDouble($this->Rest);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->Price !== null) {
            $xfer += $output->writeFieldBegin('Price', TType::DOUBLE, 2);
            $xfer += $output->writeDouble($this->Price);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->PricesOwner !== null) {
            if (!is_object($this->PricesOwner)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('PricesOwner', TType::STRUCT, 3);
            $xfer += $this->PricesOwner->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
