<?php
namespace MailPoetVendor\Egulias\EmailValidator\Warning;
if (!defined('ABSPATH')) exit;
class Comment extends Warning
{
 const CODE = 17;
 public function __construct()
 {
 $this->message = "Comments found in this email";
 }
}
