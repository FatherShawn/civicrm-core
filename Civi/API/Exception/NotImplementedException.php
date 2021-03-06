<?php
namespace Civi\API\Exception;

require_once 'api/Exception.php';
class NotImplementedException extends \API_Exception {
  public function __construct($message, $extraParams = array(), Exception $previous = NULL) {
    parent::__construct($message, \API_Exception::NOT_IMPLEMENTED, $extraParams, $previous);
  }
}