<?php

class gasSettings
{

    /**
     * @var string $serviceCode
     * @access public
     */
    public $serviceCode = null;

    /**
     * @var string $description
     * @access public
     */
    public $description = null;

    /**
     * @param string $serviceCode
     * @param string $description
     * @access public
     */
    public function __construct($serviceCode, $description)
    {
      $this->serviceCode = $serviceCode;
      $this->description = $description;
    }

}
