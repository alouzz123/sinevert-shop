<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
class Swift_AddressEncoderException extends Swift_RfcComplianceException
{
 protected $address;
 public function __construct(string $message, string $address)
 {
 parent::__construct($message);
 $this->address = $address;
 }
 public function getAddress() : string
 {
 return $this->address;
 }
}
