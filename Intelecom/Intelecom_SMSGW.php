<?php

/*
 * Author:   Intelecom Group AS <support.interactive@intele.com>
 * License:  http://creativecommons.org/licenses/MIT/ MIT
 * Link:     https://intele.com/smsgw
 */

include_once ('Service/SMSGW/SMSGatewayV10EndpointService.php');

function Intelecom_Service_SMSGW_autoload($className) {
    if (substr($className, 0, 23) != 'Intelecom_Service_SMSGW') {
        return false;
    }

    $file = str_replace('_', '/', $className);
    $file = str_replace('Intelecom/', '', $file);

    return include dirname(__FILE__) . "/$file.php";
}

spl_autoload_register('Intelecom_Service_SMSGW_autoload');

class Intelecom_Service_SMSGW {
  const USER_AGENT = 'itc-smsgw-php/1.0.0';

  /**
   * Constructor
   *
   * @param string $smsgwUri SMSGW URI endpoint
   * @param string $serviceId Intelecom Service identifier
   * @param string $username Intelecom service username
   * @param string $password Intelecom service password
   */
  public function __construct($smsgwUri, $serviceId, $username, $password) {
    $this->smsgwUri = $smsgwUri;
    $this->serviceId = $serviceId;
    $this->username = $username;
    $this->password = $password;
  }

  /**
   * Send content to one or more recivers.
   *
   * @param string $content Message content. Keep in mind that it should consist
   *                        of only characters supported by the SMS character set.
   *                        In addition, keep the content within the maximum length
   *                        limit
   * @param string[] $recipients One or more recipients for the message content
   * @param settings Optional message settings
   * @param string batchReference Optional batch reference.
   */
  public function sendSameMessageToRecipients($content, $recipients,
      $price = null, $settings = null, $batchReference = null)
  {
    $recipientMessage = array();

    if (is_array($recipients)) {
      foreach($recipients as $r) {
        $recipientMessage[$r] = $content;
      }
    } else {
      $recipientMessage[$recipients] = $content;
    }

    return $this->sendMessagesToRecipients($recipientMessage, $price, $settings,
        $batchReference);
  }

  /**
   * Send content to one or more recivers.
   *
   * @param array $recipientMessage Array mapping recipients to message content.
   * @param settings Optional message settings. Used as base settings for
   *                                         all messages. For example to
   * @param string batchReference Optional batch reference.
   */
  public function sendMessagesToRecipients($recipientMessage, $price = null, $settings = null,
                               $batchReference = null)
  {
    //
    // Create message array based on $recipientMessage and $settings
    $messages = array();

    foreach (array_keys($recipientMessage) as $recipient) {
      $msg = new message($recipient, $recipientMessage[$recipient],
             $price, null, $settings);

      array_push($messages, $msg);
    }

    $req = new request($this->serviceId, $this->username,
           $this->password, $batchReference, $messages);

    return $this->sendMessageRequest($req);
  }

  /**
   * Send message request
   *
   * Base method to send request to the SMS Gateway.
   *
   * @param request $req request object
   */
  public function sendMessageRequest($req) {
    $api = new RestClient();
    $api->register_decoder('xml', "Intelecom_Service_SMSGW::xml_decoder");

    $jsonReq = json_encode($req);

    $result = $api->post(
                $this->smsgwUri,
                $jsonReq,
                array('Content-Type' => 'application/json'));

    if($result->info->http_code == 200) {
        return $result->decode_response();
    } else {
      die('request failed' . $result);
          // throw new exception
    }
  }

  public static function xml_decoder($data){
      return new SimpleXMLElement($data);
  }

}
