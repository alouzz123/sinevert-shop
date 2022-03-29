<?php
namespace MailPoetVendor\Twig\Sandbox;
if (!defined('ABSPATH')) exit;
class SecurityNotAllowedPropertyError extends SecurityError
{
 private $className;
 private $propertyName;
 public function __construct(string $message, string $className, string $propertyName, int $lineno = -1, string $filename = null, \Exception $previous = null)
 {
 if (-1 !== $lineno) {
 @\trigger_error(\sprintf('Passing $lineno as a 3th argument of the %s constructor is deprecated since Twig 2.8.1.', __CLASS__), \E_USER_DEPRECATED);
 }
 if (null !== $filename) {
 @\trigger_error(\sprintf('Passing $filename as a 4th argument of the %s constructor is deprecated since Twig 2.8.1.', __CLASS__), \E_USER_DEPRECATED);
 }
 if (null !== $previous) {
 @\trigger_error(\sprintf('Passing $previous as a 5th argument of the %s constructor is deprecated since Twig 2.8.1.', __CLASS__), \E_USER_DEPRECATED);
 }
 parent::__construct($message, $lineno, $filename, $previous);
 $this->className = $className;
 $this->propertyName = $propertyName;
 }
 public function getClassName()
 {
 return $this->className;
 }
 public function getPropertyName()
 {
 return $this->propertyName;
 }
}
\class_alias('MailPoetVendor\\Twig\\Sandbox\\SecurityNotAllowedPropertyError', 'MailPoetVendor\\Twig_Sandbox_SecurityNotAllowedPropertyError');
