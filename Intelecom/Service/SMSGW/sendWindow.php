<?php

class sendWindow
{

    /**
     * @var date $startDate
     * @access public
     */
    public $startDate = null;

    /**
     * @var date $stopDate
     * @access public
     */
    public $stopDate = null;

    /**
     * @var time $startTime
     * @access public
     */
    public $startTime = null;

    /**
     * @var time $stopTime
     * @access public
     */
    public $stopTime = null;

    /**
     * @param date $startDate
     * @param date $stopDate
     * @param time $startTime
     * @param time $stopTime
     * @access public
     */
    public function __construct($startDate, $stopDate, $startTime, $stopTime)
    {
      $this->startDate = $startDate;
      $this->stopDate = $stopDate;
      $this->startTime = $startTime;
      $this->stopTime = $stopTime;
    }

}
