<?php

class message
{

    /**
     * @var string $recipient
     * @access public
     */
    public $recipient = null;

    /**
     * @var string $content
     * @access public
     */
    public $content = null;

    /**
     * @var int $price
     * @access public
     */
    public $price = null;

    /**
     * @var string $clientReference
     * @access public
     */
    public $clientReference = null;

    /**
     * @var settings $settings
     * @access public
     */
    public $settings = null;

    /**
     * @param string $recipient
     * @param string $content
     * @param int $price
     * @param string $clientReference
     * @param settings $settings
     * @access public
     */
    public function __construct($recipient, $content, $price, $clientReference, $settings)
    {
      $this->recipient = $recipient;
      $this->content = $content;
      $this->price = $price;
      $this->clientReference = $clientReference;
      $this->settings = $settings;
    }

}
