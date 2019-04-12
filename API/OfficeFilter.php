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

class OfficeFilter
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
            'var' => 'ObjectName',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        4 => array(
            'var' => 'CodeOKPO',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        5 => array(
            'var' => 'RegistrationCode',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        6 => array(
            'var' => 'HierarchyBranch',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        7 => array(
            'var' => 'ObjectOwner',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Workabox\API\ObjectID',
        ),
        8 => array(
            'var' => 'Settlement',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        9 => array(
            'var' => 'PostAddress',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        10 => array(
            'var' => 'Phone',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        11 => array(
            'var' => 'StateMain',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRING,
            'elem' => array(
                'type' => TType::STRING,
                ),
        ),
        12 => array(
            'var' => 'SubOfficeMaster',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Workabox\API\ObjectID',
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
     * @var string
     */
    public $ObjectName = null;
    /**
     * @var string
     */
    public $CodeOKPO = null;
    /**
     * @var string
     */
    public $RegistrationCode = null;
    /**
     * @var string
     */
    public $HierarchyBranch = null;
    /**
     * @var \Workabox\API\ObjectID
     */
    public $ObjectOwner = null;
    /**
     * @var string
     */
    public $Settlement = null;
    /**
     * @var string
     */
    public $PostAddress = null;
    /**
     * @var string
     */
    public $Phone = null;
    /**
     * @var string[]
     */
    public $StateMain = null;
    /**
     * @var \Workabox\API\ObjectID
     */
    public $SubOfficeMaster = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['ID'])) {
                $this->ID = $vals['ID'];
            }
            if (isset($vals['OuterID'])) {
                $this->OuterID = $vals['OuterID'];
            }
            if (isset($vals['ObjectName'])) {
                $this->ObjectName = $vals['ObjectName'];
            }
            if (isset($vals['CodeOKPO'])) {
                $this->CodeOKPO = $vals['CodeOKPO'];
            }
            if (isset($vals['RegistrationCode'])) {
                $this->RegistrationCode = $vals['RegistrationCode'];
            }
            if (isset($vals['HierarchyBranch'])) {
                $this->HierarchyBranch = $vals['HierarchyBranch'];
            }
            if (isset($vals['ObjectOwner'])) {
                $this->ObjectOwner = $vals['ObjectOwner'];
            }
            if (isset($vals['Settlement'])) {
                $this->Settlement = $vals['Settlement'];
            }
            if (isset($vals['PostAddress'])) {
                $this->PostAddress = $vals['PostAddress'];
            }
            if (isset($vals['Phone'])) {
                $this->Phone = $vals['Phone'];
            }
            if (isset($vals['StateMain'])) {
                $this->StateMain = $vals['StateMain'];
            }
            if (isset($vals['SubOfficeMaster'])) {
                $this->SubOfficeMaster = $vals['SubOfficeMaster'];
            }
        }
    }

    public function getName()
    {
        return 'OfficeFilter';
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
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->ObjectName);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->CodeOKPO);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->RegistrationCode);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->HierarchyBranch);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::STRUCT) {
                        $this->ObjectOwner = new \Workabox\API\ObjectID();
                        $xfer += $this->ObjectOwner->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 8:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->Settlement);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 9:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->PostAddress);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 10:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->Phone);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 11:
                    if ($ftype == TType::LST) {
                        $this->StateMain = array();
                        $_size357 = 0;
                        $_etype360 = 0;
                        $xfer += $input->readListBegin($_etype360, $_size357);
                        for ($_i361 = 0; $_i361 < $_size357; ++$_i361) {
                            $elem362 = null;
                            $xfer += $input->readString($elem362);
                            $this->StateMain []= $elem362;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 12:
                    if ($ftype == TType::STRUCT) {
                        $this->SubOfficeMaster = new \Workabox\API\ObjectID();
                        $xfer += $this->SubOfficeMaster->read($input);
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
        $xfer += $output->writeStructBegin('OfficeFilter');
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
        if ($this->ObjectName !== null) {
            $xfer += $output->writeFieldBegin('ObjectName', TType::STRING, 3);
            $xfer += $output->writeString($this->ObjectName);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->CodeOKPO !== null) {
            $xfer += $output->writeFieldBegin('CodeOKPO', TType::STRING, 4);
            $xfer += $output->writeString($this->CodeOKPO);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->RegistrationCode !== null) {
            $xfer += $output->writeFieldBegin('RegistrationCode', TType::STRING, 5);
            $xfer += $output->writeString($this->RegistrationCode);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->HierarchyBranch !== null) {
            $xfer += $output->writeFieldBegin('HierarchyBranch', TType::STRING, 6);
            $xfer += $output->writeString($this->HierarchyBranch);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->ObjectOwner !== null) {
            if (!is_object($this->ObjectOwner)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('ObjectOwner', TType::STRUCT, 7);
            $xfer += $this->ObjectOwner->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->Settlement !== null) {
            $xfer += $output->writeFieldBegin('Settlement', TType::STRING, 8);
            $xfer += $output->writeString($this->Settlement);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->PostAddress !== null) {
            $xfer += $output->writeFieldBegin('PostAddress', TType::STRING, 9);
            $xfer += $output->writeString($this->PostAddress);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->Phone !== null) {
            $xfer += $output->writeFieldBegin('Phone', TType::STRING, 10);
            $xfer += $output->writeString($this->Phone);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->StateMain !== null) {
            if (!is_array($this->StateMain)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('StateMain', TType::LST, 11);
            $output->writeListBegin(TType::STRING, count($this->StateMain));
            foreach ($this->StateMain as $iter363) {
                $xfer += $output->writeString($iter363);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->SubOfficeMaster !== null) {
            if (!is_object($this->SubOfficeMaster)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('SubOfficeMaster', TType::STRUCT, 12);
            $xfer += $this->SubOfficeMaster->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
