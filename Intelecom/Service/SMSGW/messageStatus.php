<?php

class messageStatus
{

    /**
     * @var int $statusCode
     * @access public
     */
    public $statusCode = null;

    /**
     * @var string $statusMessage
     * @access public
     */
    public $statusMessage = null;

    /**
     * @var string $clientReference
     * @access public
     */
    public $clientReference = null;

    /**
     * @var string $recipient
     * @access public
     */
    public $recipient = null;

    /**
     * @var string $messageId
     * @access public
     */
    public $messageId = null;

    /**
     * @var string $sessionId
     * @access public
     */
    public $sessionId = null;

    /**
     * @var int $sequenceIndex
     * @access public
     */
    public $sequenceIndex = null;

    /**
     * @param int $statusCode
     * @param string $statusMessage
     * @param string $clientReference
     * @param string $recipient
     * @param string $messageId
     * @param string $sessionId
     * @param int $sequenceIndex
     * @access public
     */
    public function __construct($statusCode, $statusMessage, $clientReference, $recipient, $messageId, $sessionId, $sequenceIndex)
    {
      $this->statusCode = $statusCode;
      $this->statusMessage = $statusMessage;
      $this->clientReference = $clientReference;
      $this->recipient = $recipient;
      $this->messageId = $messageId;
      $this->sessionId = $sessionId;
      $this->sequenceIndex = $sequenceIndex;
    }

}
