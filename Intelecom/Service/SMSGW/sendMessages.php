<?php

class sendMessages
{

    /**
     * @var request $request
     * @access public
     */
    public $request = null;

    /**
     * @param request $request
     * @access public
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

}
