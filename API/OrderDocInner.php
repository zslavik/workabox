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

class OrderDocInner
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'ID',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        2 => array(
            'var' => 'OuterID',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'OrderCustomer',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Workabox\API\ObjectID',
        ),
        4 => array(
            'var' => 'OrderCustomerResponsible',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Workabox\API\ObjectID',
        ),
        5 => array(
            'var' => 'InnerSupplier',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Workabox\API\ObjectID',
        ),
        6 => array(
            'var' => 'InnerSupplierResponsible',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Workabox\API\ObjectID',
        ),
        7 => array(
            'var' => 'GoodsInOrderDoc',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\Workabox\API\GoodsInOrderDocLine',
                ),
        ),
        8 => array(
            'var' => 'Additional',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        9 => array(
            'var' => 'DocumentSumm',
            'isRequired' => false,
            'type' => TType::DOUBLE,
        ),
        10 => array(
            'var' => 'DocNumber',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        11 => array(
            'var' => 'DocumentDate',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        12 => array(
            'var' => 'OuterCodes',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\Workabox\API\OuterCodesLine',
                ),
        ),
        13 => array(
            'var' => 'StateOrderDocInner',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var int
     */
    public $ID = null;
    /**
     * @var string
     */
    public $OuterID = null;
    /**
     * @var \Workabox\API\ObjectID
     */
    public $OrderCustomer = null;
    /**
     * @var \Workabox\API\ObjectID
     */
    public $OrderCustomerResponsible = null;
    /**
     * @var \Workabox\API\ObjectID
     */
    public $InnerSupplier = null;
    /**
     * @var \Workabox\API\ObjectID
     */
    public $InnerSupplierResponsible = null;
    /**
     * @var \Workabox\API\GoodsInOrderDocLine[]
     */
    public $GoodsInOrderDoc = null;
    /**
     * @var string
     */
    public $Additional = null;
    /**
     * @var double
     */
    public $DocumentSumm = null;
    /**
     * @var string
     */
    public $DocNumber = null;
    /**
     * @var string
     */
    public $DocumentDate = null;
    /**
     * @var \Workabox\API\OuterCodesLine[]
     */
    public $OuterCodes = null;
    /**
     * @var string
     */
    public $StateOrderDocInner = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['ID'])) {
                $this->ID = $vals['ID'];
            }
            if (isset($vals['OuterID'])) {
                $this->OuterID = $vals['OuterID'];
            }
            if (isset($vals['OrderCustomer'])) {
                $this->OrderCustomer = $vals['OrderCustomer'];
            }
            if (isset($vals['OrderCustomerResponsible'])) {
                $this->OrderCustomerResponsible = $vals['OrderCustomerResponsible'];
            }
            if (isset($vals['InnerSupplier'])) {
                $this->InnerSupplier = $vals['InnerSupplier'];
            }
            if (isset($vals['InnerSupplierResponsible'])) {
                $this->InnerSupplierResponsible = $vals['InnerSupplierResponsible'];
            }
            if (isset($vals['GoodsInOrderDoc'])) {
                $this->GoodsInOrderDoc = $vals['GoodsInOrderDoc'];
            }
            if (isset($vals['Additional'])) {
                $this->Additional = $vals['Additional'];
            }
            if (isset($vals['DocumentSumm'])) {
                $this->DocumentSumm = $vals['DocumentSumm'];
            }
            if (isset($vals['DocNumber'])) {
                $this->DocNumber = $vals['DocNumber'];
            }
            if (isset($vals['DocumentDate'])) {
                $this->DocumentDate = $vals['DocumentDate'];
            }
            if (isset($vals['OuterCodes'])) {
                $this->OuterCodes = $vals['OuterCodes'];
            }
            if (isset($vals['StateOrderDocInner'])) {
                $this->StateOrderDocInner = $vals['StateOrderDocInner'];
            }
        }
    }

    public function getName()
    {
        return 'OrderDocInner';
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
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->ID);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->OuterID);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRUCT) {
                        $this->OrderCustomer = new \Workabox\API\ObjectID();
                        $xfer += $this->OrderCustomer->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRUCT) {
                        $this->OrderCustomerResponsible = new \Workabox\API\ObjectID();
                        $xfer += $this->OrderCustomerResponsible->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::STRUCT) {
                        $this->InnerSupplier = new \Workabox\API\ObjectID();
                        $xfer += $this->InnerSupplier->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::STRUCT) {
                        $this->InnerSupplierResponsible = new \Workabox\API\ObjectID();
                        $xfer += $this->InnerSupplierResponsible->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::LST) {
                        $this->GoodsInOrderDoc = array();
                        $_size826 = 0;
                        $_etype829 = 0;
                        $xfer += $input->readListBegin($_etype829, $_size826);
                        for ($_i830 = 0; $_i830 < $_size826; ++$_i830) {
                            $elem831 = null;
                            $elem831 = new \Workabox\API\GoodsInOrderDocLine();
                            $xfer += $elem831->read($input);
                            $this->GoodsInOrderDoc []= $elem831;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 8:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->Additional);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 9:
                    if ($ftype == TType::DOUBLE) {
                        $xfer += $input->readDouble($this->DocumentSumm);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 10:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->DocNumber);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 11:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->DocumentDate);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 12:
                    if ($ftype == TType::LST) {
                        $this->OuterCodes = array();
                        $_size832 = 0;
                        $_etype835 = 0;
                        $xfer += $input->readListBegin($_etype835, $_size832);
                        for ($_i836 = 0; $_i836 < $_size832; ++$_i836) {
                            $elem837 = null;
                            $elem837 = new \Workabox\API\OuterCodesLine();
                            $xfer += $elem837->read($input);
                            $this->OuterCodes []= $elem837;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 13:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->StateOrderDocInner);
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
        $xfer += $output->writeStructBegin('OrderDocInner');
        if ($this->ID !== null) {
            $xfer += $output->writeFieldBegin('ID', TType::I32, 1);
            $xfer += $output->writeI32($this->ID);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->OuterID !== null) {
            $xfer += $output->writeFieldBegin('OuterID', TType::STRING, 2);
            $xfer += $output->writeString($this->OuterID);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->OrderCustomer !== null) {
            if (!is_object($this->OrderCustomer)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('OrderCustomer', TType::STRUCT, 3);
            $xfer += $this->OrderCustomer->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->OrderCustomerResponsible !== null) {
            if (!is_object($this->OrderCustomerResponsible)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('OrderCustomerResponsible', TType::STRUCT, 4);
            $xfer += $this->OrderCustomerResponsible->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->InnerSupplier !== null) {
            if (!is_object($this->InnerSupplier)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('InnerSupplier', TType::STRUCT, 5);
            $xfer += $this->InnerSupplier->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->InnerSupplierResponsible !== null) {
            if (!is_object($this->InnerSupplierResponsible)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('InnerSupplierResponsible', TType::STRUCT, 6);
            $xfer += $this->InnerSupplierResponsible->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->GoodsInOrderDoc !== null) {
            if (!is_array($this->GoodsInOrderDoc)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('GoodsInOrderDoc', TType::LST, 7);
            $output->writeListBegin(TType::STRUCT, count($this->GoodsInOrderDoc));
            foreach ($this->GoodsInOrderDoc as $iter838) {
                $xfer += $iter838->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->Additional !== null) {
            $xfer += $output->writeFieldBegin('Additional', TType::STRING, 8);
            $xfer += $output->writeString($this->Additional);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->DocumentSumm !== null) {
            $xfer += $output->writeFieldBegin('DocumentSumm', TType::DOUBLE, 9);
            $xfer += $output->writeDouble($this->DocumentSumm);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->DocNumber !== null) {
            $xfer += $output->writeFieldBegin('DocNumber', TType::STRING, 10);
            $xfer += $output->writeString($this->DocNumber);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->DocumentDate !== null) {
            $xfer += $output->writeFieldBegin('DocumentDate', TType::STRING, 11);
            $xfer += $output->writeString($this->DocumentDate);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->OuterCodes !== null) {
            if (!is_array($this->OuterCodes)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('OuterCodes', TType::LST, 12);
            $output->writeListBegin(TType::STRUCT, count($this->OuterCodes));
            foreach ($this->OuterCodes as $iter839) {
                $xfer += $iter839->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->StateOrderDocInner !== null) {
            $xfer += $output->writeFieldBegin('StateOrderDocInner', TType::STRING, 13);
            $xfer += $output->writeString($this->StateOrderDocInner);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
