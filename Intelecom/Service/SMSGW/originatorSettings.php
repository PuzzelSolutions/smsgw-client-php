<?php

class originatorSettings
{

    /**
     * @var string $originator
     * @access public
     */
    public $originator = null;

    /**
     * @var originatorTypeEnum $originatorType
     * @access public
     */
    public $originatorType = null;

    /**
     * @param string $originator
     * @param originatorTypeEnum $originatorType
     * @access public
     */
    public function __construct($originator, $originatorType)
    {
      $this->originator = $originator;
      $this->originatorType = $originatorType;
    }

}
