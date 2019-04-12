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

class RoutingsFilter
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
            'var' => 'ObjectOwner',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Workabox\API\ObjectID',
        ),
        4 => array(
            'var' => 'ProdCost',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        5 => array(
            'var' => 'StoreFinished',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Workabox\API\ObjectID',
        ),
        6 => array(
            'var' => 'StoreMaterials',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Workabox\API\ObjectID',
        ),
        7 => array(
            'var' => 'ObjectName',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        8 => array(
            'var' => 'StateMain',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRING,
            'elem' => array(
                'type' => TType::STRING,
                ),
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
    public $ObjectOwner = null;
    /**
     * @var string
     */
    public $ProdCost = null;
    /**
     * @var \Workabox\API\ObjectID
     */
    public $StoreFinished = null;
    /**
     * @var \Workabox\API\ObjectID
     */
    public $StoreMaterials = null;
    /**
     * @var string
     */
    public $ObjectName = null;
    /**
     * @var string[]
     */
    public $StateMain = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['ID'])) {
                $this->ID = $vals['ID'];
            }
            if (isset($vals['OuterID'])) {
                $this->OuterID = $vals['OuterID'];
            }
            if (isset($vals['ObjectOwner'])) {
                $this->ObjectOwner = $vals['ObjectOwner'];
            }
            if (isset($vals['ProdCost'])) {
                $this->ProdCost = $vals['ProdCost'];
            }
            if (isset($vals['StoreFinished'])) {
                $this->StoreFinished = $vals['StoreFinished'];
            }
            if (isset($vals['StoreMaterials'])) {
                $this->StoreMaterials = $vals['StoreMaterials'];
            }
            if (isset($vals['ObjectName'])) {
                $this->ObjectName = $vals['ObjectName'];
            }
            if (isset($vals['StateMain'])) {
                $this->StateMain = $vals['StateMain'];
            }
        }
    }

    public function getName()
    {
        return 'RoutingsFilter';
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
                        $this->ObjectOwner = new \Workabox\API\ObjectID();
                        $xfer += $this->ObjectOwner->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->ProdCost);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::STRUCT) {
                        $this->StoreFinished = new \Workabox\API\ObjectID();
                        $xfer += $this->StoreFinished->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::STRUCT) {
                        $this->StoreMaterials = new \Workabox\API\ObjectID();
                        $xfer += $this->StoreMaterials->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->ObjectName);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 8:
                    if ($ftype == TType::LST) {
                        $this->StateMain = array();
                        $_size938 = 0;
                        $_etype941 = 0;
                        $xfer += $input->readListBegin($_etype941, $_size938);
                        for ($_i942 = 0; $_i942 < $_size938; ++$_i942) {
                            $elem943 = null;
                            $xfer += $input->readString($elem943);
                            $this->StateMain []= $elem943;
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
        $xfer += $output->writeStructBegin('RoutingsFilter');
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
        if ($this->ObjectOwner !== null) {
            if (!is_object($this->ObjectOwner)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('ObjectOwner', TType::STRUCT, 3);
            $xfer += $this->ObjectOwner->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->ProdCost !== null) {
            $xfer += $output->writeFieldBegin('ProdCost', TType::STRING, 4);
            $xfer += $output->writeString($this->ProdCost);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->StoreFinished !== null) {
            if (!is_object($this->StoreFinished)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('StoreFinished', TType::STRUCT, 5);
            $xfer += $this->StoreFinished->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->StoreMaterials !== null) {
            if (!is_object($this->StoreMaterials)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('StoreMaterials', TType::STRUCT, 6);
            $xfer += $this->StoreMaterials->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->ObjectName !== null) {
            $xfer += $output->writeFieldBegin('ObjectName', TType::STRING, 7);
            $xfer += $output->writeString($this->ObjectName);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->StateMain !== null) {
            if (!is_array($this->StateMain)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('StateMain', TType::LST, 8);
            $output->writeListBegin(TType::STRING, count($this->StateMain));
            foreach ($this->StateMain as $iter944) {
                $xfer += $output->writeString($iter944);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
