<?php
use Infobip\Configuration;
use Infobip\Api\SmsAPi;
use Infobip\Model\SmsDestination;
use Infobip\Model\SmsTextualMessage;
use Infobip\Model\SmsAdvancedTextualRequest;




function msg($num,$msgtype)
{

require __DIR__ . "/vendor/autoload.php";


if($msgtype==0)
{
$message="You have recieved a proposal from a driver for your trip request on Lanka Lift.  Login and check !";
} else if($msgtype==1)
{
$message="You have recieved a trip request from a rider on Lanka Lift. Login and check !";
} else if($msgtype==2)
{
$message="Congratulations! Your trip proposal has been accepted on Lanka Lift. Login and check !";
}




$phoneNumber=$num;

$apiUrl="5ymrkj.api.infobip.com";
$apiKey="eab3e2f926515a0b45ce650c3ffd97f8-201af0f6-c79d-46a0-a5cf-b4395174aab0";

$configuration = new Configuration(host: $apiUrl, apiKey:$apiKey);
$api = new SmsApi(config: $configuration);

$destination = new SmsDestination(to: $phoneNumber);

$theMessage = new SmsTextualMessage(
    destinations:[$destination],
    text: $message,
    from: "ClickSMS"

);

$request= new SmsAdvancedTextualRequest(messages: [$theMessage]);
$response = $api->sendSmsMessage($request);

echo"Message Sent";
}
?>