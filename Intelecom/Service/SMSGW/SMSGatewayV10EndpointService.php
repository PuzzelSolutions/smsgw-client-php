<?php

include_once('response.php');
include_once('messageStatus.php');
include_once('request.php');
include_once('message.php');
include_once('settings.php');
include_once('originatorSettings.php');
include_once('gasSettings.php');
include_once('sendWindow.php');
include_once('parameter.php');
include_once('originatorTypeEnum.php');
include_once('fault.php');
include_once('sendMessages.php');
include_once('sendMessagesResponse.php');

class SMSGatewayV10EndpointService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
      'response' => '\response',
      'messageStatus' => '\messageStatus',
      'request' => '\request',
      'message' => '\message',
      'settings' => '\settings',
      'originatorSettings' => '\originatorSettings',
      'gasSettings' => '\gasSettings',
      'sendWindow' => '\sendWindow',
      'parameter' => '\parameter',
      'fault' => '\fault',
      'sendMessages' => '\sendMessages',
      'sendMessagesResponse' => '\sendMessagesResponse');

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct(array $options = array(), $wsdl = 'SMSGatewayV10.wsdl')
    {
      foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }

  parent::__construct($wsdl, $options);
    }

    /**
     * @param sendMessages $parameters
     * @access public
     * @return sendMessagesResponse
     */
    public function sendMessages(sendMessages $parameters)
    {
      return $this->__soapCall('sendMessages', array($parameters));
    }

}
