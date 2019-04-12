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

class CustomerNaturalPerson
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
            'var' => 'Birthday',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        4 => array(
            'var' => 'CanGetAdditionalInfo',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        5 => array(
            'var' => 'RefreshDate',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        6 => array(
            'var' => 'LastMovementDate',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        7 => array(
            'var' => 'AmountAccount',
            'isRequired' => false,
            'type' => TType::DOUBLE,
        ),
        8 => array(
            'var' => 'SumLastMove',
            'isRequired' => false,
            'type' => TType::DOUBLE,
        ),
        9 => array(
            'var' => 'InformationMessage',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        10 => array(
            'var' => 'HistoryMIPartner',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\Workabox\API\HistoryMIPartnerLine',
                ),
        ),
        11 => array(
            'var' => 'P425',
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
            'var' => 'Additional',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        14 => array(
            'var' => 'EMail',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        15 => array(
            'var' => 'MobilePhone',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        16 => array(
            'var' => 'HomePhone',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        17 => array(
            'var' => 'SecondName',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        18 => array(
            'var' => 'FirstName',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        19 => array(
            'var' => 'MiddleName',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        20 => array(
            'var' => 'BirthDay_Day',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        21 => array(
            'var' => 'BirthDay_Month',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        22 => array(
            'var' => 'BirthDay_Year',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        23 => array(
            'var' => 'Sex',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        24 => array(
            'var' => 'UserStrings',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\Workabox\API\UserStringsLine',
                ),
        ),
        25 => array(
            'var' => 'UserLongStrings',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\Workabox\API\UserLongStringsLine',
                ),
        ),
        26 => array(
            'var' => 'UserDates',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\Workabox\API\UserDatesLine',
                ),
        ),
        27 => array(
            'var' => 'UserNumbers',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\Workabox\API\UserNumbersLine',
                ),
        ),
        28 => array(
            'var' => 'UserCatalogs',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\Workabox\API\UserCatalogsLine',
                ),
        ),
        29 => array(
            'var' => 'UserCatalogsView',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\Workabox\API\UserCatalogsViewLine',
                ),
        ),
        30 => array(
            'var' => 'StateCustomer',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        31 => array(
            'var' => 'MIPartnersSlave',
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
    public $Birthday = null;
    /**
     * @var string
     */
    public $CanGetAdditionalInfo = null;
    /**
     * @var string
     */
    public $RefreshDate = null;
    /**
     * @var string
     */
    public $LastMovementDate = null;
    /**
     * @var double
     */
    public $AmountAccount = null;
    /**
     * @var double
     */
    public $SumLastMove = null;
    /**
     * @var string
     */
    public $InformationMessage = null;
    /**
     * @var \Workabox\API\HistoryMIPartnerLine[]
     */
    public $HistoryMIPartner = null;
    /**
     * @var string
     */
    public $P425 = null;
    /**
     * @var \Workabox\API\OuterCodesLine[]
     */
    public $OuterCodes = null;
    /**
     * @var string
     */
    public $Additional = null;
    /**
     * @var string
     */
    public $EMail = null;
    /**
     * @var string
     */
    public $MobilePhone = null;
    /**
     * @var string
     */
    public $HomePhone = null;
    /**
     * @var string
     */
    public $SecondName = null;
    /**
     * @var string
     */
    public $FirstName = null;
    /**
     * @var string
     */
    public $MiddleName = null;
    /**
     * @var int
     */
    public $BirthDay_Day = null;
    /**
     * @var string
     */
    public $BirthDay_Month = null;
    /**
     * @var int
     */
    public $BirthDay_Year = null;
    /**
     * @var string
     */
    public $Sex = null;
    /**
     * @var \Workabox\API\UserStringsLine[]
     */
    public $UserStrings = null;
    /**
     * @var \Workabox\API\UserLongStringsLine[]
     */
    public $UserLongStrings = null;
    /**
     * @var \Workabox\API\UserDatesLine[]
     */
    public $UserDates = null;
    /**
     * @var \Workabox\API\UserNumbersLine[]
     */
    public $UserNumbers = null;
    /**
     * @var \Workabox\API\UserCatalogsLine[]
     */
    public $UserCatalogs = null;
    /**
     * @var \Workabox\API\UserCatalogsViewLine[]
     */
    public $UserCatalogsView = null;
    /**
     * @var string
     */
    public $StateCustomer = null;
    /**
     * @var \Workabox\API\ObjectID[]
     */
    public $MIPartnersSlave = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['ID'])) {
                $this->ID = $vals['ID'];
            }
            if (isset($vals['OuterID'])) {
                $this->OuterID = $vals['OuterID'];
            }
            if (isset($vals['Birthday'])) {
                $this->Birthday = $vals['Birthday'];
            }
            if (isset($vals['CanGetAdditionalInfo'])) {
                $this->CanGetAdditionalInfo = $vals['CanGetAdditionalInfo'];
            }
            if (isset($vals['RefreshDate'])) {
                $this->RefreshDate = $vals['RefreshDate'];
            }
            if (isset($vals['LastMovementDate'])) {
                $this->LastMovementDate = $vals['LastMovementDate'];
            }
            if (isset($vals['AmountAccount'])) {
                $this->AmountAccount = $vals['AmountAccount'];
            }
            if (isset($vals['SumLastMove'])) {
                $this->SumLastMove = $vals['SumLastMove'];
            }
            if (isset($vals['InformationMessage'])) {
                $this->InformationMessage = $vals['InformationMessage'];
            }
            if (isset($vals['HistoryMIPartner'])) {
                $this->HistoryMIPartner = $vals['HistoryMIPartner'];
            }
            if (isset($vals['P425'])) {
                $this->P425 = $vals['P425'];
            }
            if (isset($vals['OuterCodes'])) {
                $this->OuterCodes = $vals['OuterCodes'];
            }
            if (isset($vals['Additional'])) {
                $this->Additional = $vals['Additional'];
            }
            if (isset($vals['EMail'])) {
                $this->EMail = $vals['EMail'];
            }
            if (isset($vals['MobilePhone'])) {
                $this->MobilePhone = $vals['MobilePhone'];
            }
            if (isset($vals['HomePhone'])) {
                $this->HomePhone = $vals['HomePhone'];
            }
            if (isset($vals['SecondName'])) {
                $this->SecondName = $vals['SecondName'];
            }
            if (isset($vals['FirstName'])) {
                $this->FirstName = $vals['FirstName'];
            }
            if (isset($vals['MiddleName'])) {
                $this->MiddleName = $vals['MiddleName'];
            }
            if (isset($vals['BirthDay_Day'])) {
                $this->BirthDay_Day = $vals['BirthDay_Day'];
            }
            if (isset($vals['BirthDay_Month'])) {
                $this->BirthDay_Month = $vals['BirthDay_Month'];
            }
            if (isset($vals['BirthDay_Year'])) {
                $this->BirthDay_Year = $vals['BirthDay_Year'];
            }
            if (isset($vals['Sex'])) {
                $this->Sex = $vals['Sex'];
            }
            if (isset($vals['UserStrings'])) {
                $this->UserStrings = $vals['UserStrings'];
            }
            if (isset($vals['UserLongStrings'])) {
                $this->UserLongStrings = $vals['UserLongStrings'];
            }
            if (isset($vals['UserDates'])) {
                $this->UserDates = $vals['UserDates'];
            }
            if (isset($vals['UserNumbers'])) {
                $this->UserNumbers = $vals['UserNumbers'];
            }
            if (isset($vals['UserCatalogs'])) {
                $this->UserCatalogs = $vals['UserCatalogs'];
            }
            if (isset($vals['UserCatalogsView'])) {
                $this->UserCatalogsView = $vals['UserCatalogsView'];
            }
            if (isset($vals['StateCustomer'])) {
                $this->StateCustomer = $vals['StateCustomer'];
            }
            if (isset($vals['MIPartnersSlave'])) {
                $this->MIPartnersSlave = $vals['MIPartnersSlave'];
            }
        }
    }

    public function getName()
    {
        return 'CustomerNaturalPerson';
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
                        $xfer += $input->readString($this->Birthday);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->CanGetAdditionalInfo);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->RefreshDate);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->LastMovementDate);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::DOUBLE) {
                        $xfer += $input->readDouble($this->AmountAccount);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 8:
                    if ($ftype == TType::DOUBLE) {
                        $xfer += $input->readDouble($this->SumLastMove);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 9:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->InformationMessage);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 10:
                    if ($ftype == TType::LST) {
                        $this->HistoryMIPartner = array();
                        $_size546 = 0;
                        $_etype549 = 0;
                        $xfer += $input->readListBegin($_etype549, $_size546);
                        for ($_i550 = 0; $_i550 < $_size546; ++$_i550) {
                            $elem551 = null;
                            $elem551 = new \Workabox\API\HistoryMIPartnerLine();
                            $xfer += $elem551->read($input);
                            $this->HistoryMIPartner []= $elem551;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 11:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->P425);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 12:
                    if ($ftype == TType::LST) {
                        $this->OuterCodes = array();
                        $_size552 = 0;
                        $_etype555 = 0;
                        $xfer += $input->readListBegin($_etype555, $_size552);
                        for ($_i556 = 0; $_i556 < $_size552; ++$_i556) {
                            $elem557 = null;
                            $elem557 = new \Workabox\API\OuterCodesLine();
                            $xfer += $elem557->read($input);
                            $this->OuterCodes []= $elem557;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 13:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->Additional);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 14:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->EMail);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 15:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->MobilePhone);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 16:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->HomePhone);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 17:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->SecondName);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 18:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->FirstName);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 19:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->MiddleName);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 20:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->BirthDay_Day);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 21:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->BirthDay_Month);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 22:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->BirthDay_Year);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 23:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->Sex);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 24:
                    if ($ftype == TType::LST) {
                        $this->UserStrings = array();
                        $_size558 = 0;
                        $_etype561 = 0;
                        $xfer += $input->readListBegin($_etype561, $_size558);
                        for ($_i562 = 0; $_i562 < $_size558; ++$_i562) {
                            $elem563 = null;
                            $elem563 = new \Workabox\API\UserStringsLine();
                            $xfer += $elem563->read($input);
                            $this->UserStrings []= $elem563;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 25:
                    if ($ftype == TType::LST) {
                        $this->UserLongStrings = array();
                        $_size564 = 0;
                        $_etype567 = 0;
                        $xfer += $input->readListBegin($_etype567, $_size564);
                        for ($_i568 = 0; $_i568 < $_size564; ++$_i568) {
                            $elem569 = null;
                            $elem569 = new \Workabox\API\UserLongStringsLine();
                            $xfer += $elem569->read($input);
                            $this->UserLongStrings []= $elem569;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 26:
                    if ($ftype == TType::LST) {
                        $this->UserDates = array();
                        $_size570 = 0;
                        $_etype573 = 0;
                        $xfer += $input->readListBegin($_etype573, $_size570);
                        for ($_i574 = 0; $_i574 < $_size570; ++$_i574) {
                            $elem575 = null;
                            $elem575 = new \Workabox\API\UserDatesLine();
                            $xfer += $elem575->read($input);
                            $this->UserDates []= $elem575;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 27:
                    if ($ftype == TType::LST) {
                        $this->UserNumbers = array();
                        $_size576 = 0;
                        $_etype579 = 0;
                        $xfer += $input->readListBegin($_etype579, $_size576);
                        for ($_i580 = 0; $_i580 < $_size576; ++$_i580) {
                            $elem581 = null;
                            $elem581 = new \Workabox\API\UserNumbersLine();
                            $xfer += $elem581->read($input);
                            $this->UserNumbers []= $elem581;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 28:
                    if ($ftype == TType::LST) {
                        $this->UserCatalogs = array();
                        $_size582 = 0;
                        $_etype585 = 0;
                        $xfer += $input->readListBegin($_etype585, $_size582);
                        for ($_i586 = 0; $_i586 < $_size582; ++$_i586) {
                            $elem587 = null;
                            $elem587 = new \Workabox\API\UserCatalogsLine();
                            $xfer += $elem587->read($input);
                            $this->UserCatalogs []= $elem587;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 29:
                    if ($ftype == TType::LST) {
                        $this->UserCatalogsView = array();
                        $_size588 = 0;
                        $_etype591 = 0;
                        $xfer += $input->readListBegin($_etype591, $_size588);
                        for ($_i592 = 0; $_i592 < $_size588; ++$_i592) {
                            $elem593 = null;
                            $elem593 = new \Workabox\API\UserCatalogsViewLine();
                            $xfer += $elem593->read($input);
                            $this->UserCatalogsView []= $elem593;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 30:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->StateCustomer);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 31:
                    if ($ftype == TType::LST) {
                        $this->MIPartnersSlave = array();
                        $_size594 = 0;
                        $_etype597 = 0;
                        $xfer += $input->readListBegin($_etype597, $_size594);
                        for ($_i598 = 0; $_i598 < $_size594; ++$_i598) {
                            $elem599 = null;
                            $elem599 = new \Workabox\API\ObjectID();
                            $xfer += $elem599->read($input);
                            $this->MIPartnersSlave []= $elem599;
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
        $xfer += $output->writeStructBegin('CustomerNaturalPerson');
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
        if ($this->Birthday !== null) {
            $xfer += $output->writeFieldBegin('Birthday', TType::STRING, 3);
            $xfer += $output->writeString($this->Birthday);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->CanGetAdditionalInfo !== null) {
            $xfer += $output->writeFieldBegin('CanGetAdditionalInfo', TType::STRING, 4);
            $xfer += $output->writeString($this->CanGetAdditionalInfo);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->RefreshDate !== null) {
            $xfer += $output->writeFieldBegin('RefreshDate', TType::STRING, 5);
            $xfer += $output->writeString($this->RefreshDate);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->LastMovementDate !== null) {
            $xfer += $output->writeFieldBegin('LastMovementDate', TType::STRING, 6);
            $xfer += $output->writeString($this->LastMovementDate);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->AmountAccount !== null) {
            $xfer += $output->writeFieldBegin('AmountAccount', TType::DOUBLE, 7);
            $xfer += $output->writeDouble($this->AmountAccount);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->SumLastMove !== null) {
            $xfer += $output->writeFieldBegin('SumLastMove', TType::DOUBLE, 8);
            $xfer += $output->writeDouble($this->SumLastMove);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->InformationMessage !== null) {
            $xfer += $output->writeFieldBegin('InformationMessage', TType::STRING, 9);
            $xfer += $output->writeString($this->InformationMessage);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->HistoryMIPartner !== null) {
            if (!is_array($this->HistoryMIPartner)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('HistoryMIPartner', TType::LST, 10);
            $output->writeListBegin(TType::STRUCT, count($this->HistoryMIPartner));
            foreach ($this->HistoryMIPartner as $iter600) {
                $xfer += $iter600->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->P425 !== null) {
            $xfer += $output->writeFieldBegin('P425', TType::STRING, 11);
            $xfer += $output->writeString($this->P425);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->OuterCodes !== null) {
            if (!is_array($this->OuterCodes)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('OuterCodes', TType::LST, 12);
            $output->writeListBegin(TType::STRUCT, count($this->OuterCodes));
            foreach ($this->OuterCodes as $iter601) {
                $xfer += $iter601->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->Additional !== null) {
            $xfer += $output->writeFieldBegin('Additional', TType::STRING, 13);
            $xfer += $output->writeString($this->Additional);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->EMail !== null) {
            $xfer += $output->writeFieldBegin('EMail', TType::STRING, 14);
            $xfer += $output->writeString($this->EMail);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->MobilePhone !== null) {
            $xfer += $output->writeFieldBegin('MobilePhone', TType::STRING, 15);
            $xfer += $output->writeString($this->MobilePhone);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->HomePhone !== null) {
            $xfer += $output->writeFieldBegin('HomePhone', TType::STRING, 16);
            $xfer += $output->writeString($this->HomePhone);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->SecondName !== null) {
            $xfer += $output->writeFieldBegin('SecondName', TType::STRING, 17);
            $xfer += $output->writeString($this->SecondName);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->FirstName !== null) {
            $xfer += $output->writeFieldBegin('FirstName', TType::STRING, 18);
            $xfer += $output->writeString($this->FirstName);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->MiddleName !== null) {
            $xfer += $output->writeFieldBegin('MiddleName', TType::STRING, 19);
            $xfer += $output->writeString($this->MiddleName);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->BirthDay_Day !== null) {
            $xfer += $output->writeFieldBegin('BirthDay_Day', TType::I32, 20);
            $xfer += $output->writeI32($this->BirthDay_Day);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->BirthDay_Month !== null) {
            $xfer += $output->writeFieldBegin('BirthDay_Month', TType::STRING, 21);
            $xfer += $output->writeString($this->BirthDay_Month);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->BirthDay_Year !== null) {
            $xfer += $output->writeFieldBegin('BirthDay_Year', TType::I32, 22);
            $xfer += $output->writeI32($this->BirthDay_Year);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->Sex !== null) {
            $xfer += $output->writeFieldBegin('Sex', TType::STRING, 23);
            $xfer += $output->writeString($this->Sex);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->UserStrings !== null) {
            if (!is_array($this->UserStrings)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('UserStrings', TType::LST, 24);
            $output->writeListBegin(TType::STRUCT, count($this->UserStrings));
            foreach ($this->UserStrings as $iter602) {
                $xfer += $iter602->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->UserLongStrings !== null) {
            if (!is_array($this->UserLongStrings)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('UserLongStrings', TType::LST, 25);
            $output->writeListBegin(TType::STRUCT, count($this->UserLongStrings));
            foreach ($this->UserLongStrings as $iter603) {
                $xfer += $iter603->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->UserDates !== null) {
            if (!is_array($this->UserDates)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('UserDates', TType::LST, 26);
            $output->writeListBegin(TType::STRUCT, count($this->UserDates));
            foreach ($this->UserDates as $iter604) {
                $xfer += $iter604->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->UserNumbers !== null) {
            if (!is_array($this->UserNumbers)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('UserNumbers', TType::LST, 27);
            $output->writeListBegin(TType::STRUCT, count($this->UserNumbers));
            foreach ($this->UserNumbers as $iter605) {
                $xfer += $iter605->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->UserCatalogs !== null) {
            if (!is_array($this->UserCatalogs)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('UserCatalogs', TType::LST, 28);
            $output->writeListBegin(TType::STRUCT, count($this->UserCatalogs));
            foreach ($this->UserCatalogs as $iter606) {
                $xfer += $iter606->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->UserCatalogsView !== null) {
            if (!is_array($this->UserCatalogsView)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('UserCatalogsView', TType::LST, 29);
            $output->writeListBegin(TType::STRUCT, count($this->UserCatalogsView));
            foreach ($this->UserCatalogsView as $iter607) {
                $xfer += $iter607->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->StateCustomer !== null) {
            $xfer += $output->writeFieldBegin('StateCustomer', TType::STRING, 30);
            $xfer += $output->writeString($this->StateCustomer);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->MIPartnersSlave !== null) {
            if (!is_array($this->MIPartnersSlave)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('MIPartnersSlave', TType::LST, 31);
            $output->writeListBegin(TType::STRUCT, count($this->MIPartnersSlave));
            foreach ($this->MIPartnersSlave as $iter608) {
                $xfer += $iter608->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
