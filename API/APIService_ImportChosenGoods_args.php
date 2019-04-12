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

class APIService_ImportChosenGoods_args
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'apiKey',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'rttID',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Workabox\API\ObjectID',
        ),
        3 => array(
            'var' => 'goodsIDs',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\Workabox\API\ObjectID',
                ),
        ),
    );

    /**
     * @var string
     */
    public $apiKey = null;
    /**
     * @var \Workabox\API\ObjectID
     */
    public $rttID = null;
    /**
     * @var \Workabox\API\ObjectID[]
     */
    public $goodsIDs = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['apiKey'])) {
                $this->apiKey = $vals['apiKey'];
            }
            if (isset($vals['rttID'])) {
                $this->rttID = $vals['rttID'];
            }
            if (isset($vals['goodsIDs'])) {
                $this->goodsIDs = $vals['goodsIDs'];
            }
        }
    }

    public function getName()
    {
        return 'APIService_ImportChosenGoods_args';
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
                        $this->rttID = new \Workabox\API\ObjectID();
                        $xfer += $this->rttID->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::LST) {
                        $this->goodsIDs = array();
                        $_size1085 = 0;
                        $_etype1088 = 0;
                        $xfer += $input->readListBegin($_etype1088, $_size1085);
                        for ($_i1089 = 0; $_i1089 < $_size1085; ++$_i1089) {
                            $elem1090 = null;
                            $elem1090 = new \Workabox\API\ObjectID();
                            $xfer += $elem1090->read($input);
                            $this->goodsIDs []= $elem1090;
                        }
                        $xfer += $input->readListEnd();
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
        $xfer += $output->writeStructBegin('APIService_ImportChosenGoods_args');
        if ($this->apiKey !== null) {
            $xfer += $output->writeFieldBegin('apiKey', TType::STRING, 1);
            $xfer += $output->writeString($this->apiKey);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->rttID !== null) {
            if (!is_object($this->rttID)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('rttID', TType::STRUCT, 2);
            $xfer += $this->rttID->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->goodsIDs !== null) {
            if (!is_array($this->goodsIDs)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('goodsIDs', TType::LST, 3);
            $output->writeListBegin(TType::STRUCT, count($this->goodsIDs));
            foreach ($this->goodsIDs as $iter1091) {
                $xfer += $iter1091->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
