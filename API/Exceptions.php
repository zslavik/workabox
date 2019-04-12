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

final class Exceptions
{
    const AuthenticationFail = 0;

    const ApplicationException = 1;

    const Permissions = 2;

    const Protocol = 3;

    const RequiredData = 4;

    static public $__names = array(
        0 => 'AuthenticationFail',
        1 => 'ApplicationException',
        2 => 'Permissions',
        3 => 'Protocol',
        4 => 'RequiredData',
    );
}

