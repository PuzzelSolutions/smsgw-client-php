<?php

class request
{

    /**
     * @var int $serviceId
     * @access public
     */
    public $serviceId = null;

    /**
     * @var string $username
     * @access public
     */
    public $username = null;

    /**
     * @var string $password
     * @access public
     */
    public $password = null;

    /**
     * @var string $batchReference
     * @access public
     */
    public $batchReference = null;

    /**
     * @var message $message
     * @access public
     */
    public $message = null;

    /**
     * @param int $serviceId
     * @param string $username
     * @param string $password
     * @param string $batchReference
     * @param message $message
     * @access public
     */
    public function __construct($serviceId, $username, $password, $batchReference, $message)
    {
      $this->serviceId = $serviceId;
      $this->username = $username;
      $this->password = $password;
      $this->batchReference = $batchReference;
      $this->message = $message;
    }

}
