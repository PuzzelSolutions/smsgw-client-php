<?php

class response
{

    /**
     * @var string $batchReference
     * @access public
     */
    public $batchReference = null;

    /**
     * @var messageStatus $messageStatus
     * @access public
     */
    public $messageStatus = null;

    /**
     * @param string $batchReference
     * @param messageStatus $messageStatus
     * @access public
     */
    public function __construct($batchReference, $messageStatus)
    {
      $this->batchReference = $batchReference;
      $this->messageStatus = $messageStatus;
    }

}
