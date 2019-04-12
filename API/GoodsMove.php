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

class GoodsMove
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
            'var' => 'Sender',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Workabox\API\ObjectID',
        ),
        4 => array(
            'var' => 'Recipient',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Workabox\API\ObjectID',
        ),
        5 => array(
            'var' => 'ResponsibleSender',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Workabox\API\ObjectID',
        ),
        6 => array(
            'var' => 'ResponsibleReceiver',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Workabox\API\ObjectID',
        ),
        7 => array(
            'var' => 'GoodsInMove',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\Workabox\API\GoodsInMoveLine',
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
            'var' => 'StateGoodsDocuments',
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
    public $Sender = null;
    /**
     * @var \Workabox\API\ObjectID
     */
    public $Recipient = null;
    /**
     * @var \Workabox\API\ObjectID
     */
    public $ResponsibleSender = null;
    /**
     * @var \Workabox\API\ObjectID
     */
    public $ResponsibleReceiver = null;
    /**
     * @var \Workabox\API\GoodsInMoveLine[]
     */
    public $GoodsInMove = null;
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
    public $StateGoodsDocuments = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['ID'])) {
                $this->ID = $vals['ID'];
            }
            if (isset($vals['OuterID'])) {
                $this->OuterID = $vals['OuterID'];
            }
            if (isset($vals['Sender'])) {
                $this->Sender = $vals['Sender'];
            }
            if (isset($vals['Recipient'])) {
                $this->Recipient = $vals['Recipient'];
            }
            if (isset($vals['ResponsibleSender'])) {
                $this->ResponsibleSender = $vals['ResponsibleSender'];
            }
            if (isset($vals['ResponsibleReceiver'])) {
                $this->ResponsibleReceiver = $vals['ResponsibleReceiver'];
            }
            if (isset($vals['GoodsInMove'])) {
                $this->GoodsInMove = $vals['GoodsInMove'];
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
            if (isset($vals['StateGoodsDocuments'])) {
                $this->StateGoodsDocuments = $vals['StateGoodsDocuments'];
            }
        }
    }

    public function getName()
    {
        return 'GoodsMove';
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
                        $this->Sender = new \Workabox\API\ObjectID();
                        $xfer += $this->Sender->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRUCT) {
                        $this->Recipient = new \Workabox\API\ObjectID();
                        $xfer += $this->Recipient->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::STRUCT) {
                        $this->ResponsibleSender = new \Workabox\API\ObjectID();
                        $xfer += $this->ResponsibleSender->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::STRUCT) {
                        $this->ResponsibleReceiver = new \Workabox\API\ObjectID();
                        $xfer += $this->ResponsibleReceiver->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::LST) {
                        $this->GoodsInMove = array();
                        $_size658 = 0;
                        $_etype661 = 0;
                        $xfer += $input->readListBegin($_etype661, $_size658);
                        for ($_i662 = 0; $_i662 < $_size658; ++$_i662) {
                            $elem663 = null;
                            $elem663 = new \Workabox\API\GoodsInMoveLine();
                            $xfer += $elem663->read($input);
                            $this->GoodsInMove []= $elem663;
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
                        $_size664 = 0;
                        $_etype667 = 0;
                        $xfer += $input->readListBegin($_etype667, $_size664);
                        for ($_i668 = 0; $_i668 < $_size664; ++$_i668) {
                            $elem669 = null;
                            $elem669 = new \Workabox\API\OuterCodesLine();
                            $xfer += $elem669->read($input);
                            $this->OuterCodes []= $elem669;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 13:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->StateGoodsDocuments);
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
        $xfer += $output->writeStructBegin('GoodsMove');
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
        if ($this->Sender !== null) {
            if (!is_object($this->Sender)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('Sender', TType::STRUCT, 3);
            $xfer += $this->Sender->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->Recipient !== null) {
            if (!is_object($this->Recipient)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('Recipient', TType::STRUCT, 4);
            $xfer += $this->Recipient->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->ResponsibleSender !== null) {
            if (!is_object($this->ResponsibleSender)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('ResponsibleSender', TType::STRUCT, 5);
            $xfer += $this->ResponsibleSender->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->ResponsibleReceiver !== null) {
            if (!is_object($this->ResponsibleReceiver)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('ResponsibleReceiver', TType::STRUCT, 6);
            $xfer += $this->ResponsibleReceiver->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->GoodsInMove !== null) {
            if (!is_array($this->GoodsInMove)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('GoodsInMove', TType::LST, 7);
            $output->writeListBegin(TType::STRUCT, count($this->GoodsInMove));
            foreach ($this->GoodsInMove as $iter670) {
                $xfer += $iter670->write($output);
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
            foreach ($this->OuterCodes as $iter671) {
                $xfer += $iter671->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->StateGoodsDocuments !== null) {
            $xfer += $output->writeFieldBegin('StateGoodsDocuments', TType::STRING, 13);
            $xfer += $output->writeString($this->StateGoodsDocuments);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
