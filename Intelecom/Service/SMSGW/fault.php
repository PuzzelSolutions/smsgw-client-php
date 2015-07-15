<?php

class fault
{

    /**
     * @var int $code
     * @access public
     */
    public $code = null;

    /**
     * @var string $reason
     * @access public
     */
    public $reason = null;

    /**
     * @param int $code
     * @param string $reason
     * @access public
     */
    public function __construct($code, $reason)
    {
      $this->code = $code;
      $this->reason = $reason;
    }

}
