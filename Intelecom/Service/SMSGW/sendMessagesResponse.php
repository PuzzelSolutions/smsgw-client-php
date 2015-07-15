<?php

class sendMessagesResponse
{

    /**
     * @var response $response
     * @access public
     */
    public $response = null;

    /**
     * @param response $response
     * @access public
     */
    public function __construct($response)
    {
      $this->response = $response;
    }

}
