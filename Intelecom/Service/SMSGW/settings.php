<?php

class settings
{

    /**
     * @var originatorSettings $originatorSettings
     * @access public
     */
    public $originatorSettings = null;

    /**
     * @var int $priority
     * @access public
     */
    public $priority = null;

    /**
     * @var int $validity
     * @access public
     */
    public $validity = null;

    /**
     * @var string $differentiator
     * @access public
     */
    public $differentiator = null;

    /**
     * @var int $age
     * @access public
     */
    public $age = null;

    /**
     * @var gasSettings $gasSettings
     * @access public
     */
    public $gasSettings = null;

    /**
     * @var boolean $newSession
     * @access public
     */
    public $newSession = null;

    /**
     * @var string $sessionId
     * @access public
     */
    public $sessionId = null;

    /**
     * @var string $invoiceNode
     * @access public
     */
    public $invoiceNode = null;

    /**
     * @var sendWindow $sendWindow
     * @access public
     */
    public $sendWindow = null;

    /**
     * @var boolean $autoDetectEncoding
     * @access public
     */
    public $autoDetectEncoding = null;

    /**
     * @var boolean $safeRemoveNonGsmCharacters
     * @access public
     */
    public $safeRemoveNonGsmCharacters = null;

    /**
     * @var parameter[] $parameter
     * @access public
     */
    public $parameter = null;

    /**
     * @param originatorSettings $originatorSettings
     * @param int $priority
     * @param int $validity
     * @param string $differentiator
     * @param int $age
     * @param gasSettings $gasSettings
     * @param boolean $newSession
     * @param string $sessionId
     * @param string $invoiceNode
     * @param sendWindow $sendWindow
     * @param boolean $autoDetectEncoding
     * @param boolean $safeRemoveNonGsmCharacters
     * @access public
     */
    public function __construct($originatorSettings, $priority, $validity, $differentiator, $age, $gasSettings, $newSession, $sessionId, $invoiceNode, $sendWindow, $autoDetectEncoding, $safeRemoveNonGsmCharacters)
    {
      $this->originatorSettings = $originatorSettings;
      $this->priority = $priority;
      $this->validity = $validity;
      $this->differentiator = $differentiator;
      $this->age = $age;
      $this->gasSettings = $gasSettings;
      $this->newSession = $newSession;
      $this->sessionId = $sessionId;
      $this->invoiceNode = $invoiceNode;
      $this->sendWindow = $sendWindow;
      $this->autoDetectEncoding = $autoDetectEncoding;
      $this->safeRemoveNonGsmCharacters = $safeRemoveNonGsmCharacters;
    }

}
