<?php
require_once '../giveAccess.php';

$xml = new DOMDocument();
$xml->load("../../chatMessagesXML/" . $_SESSION["SESSION_EMAIL"] . ".php");

$documentElement = $xml->documentElement;
$messageElement = $xml->createElement("message", $_POST["message"]);

$messageAttribute = $xml->createAttribute("sender");
$messageAttribute->value = $_SESSION["SESSION_EMAIL"];

$messageElement->appendChild($messageAttribute);
$documentElement->appendChild($messageElement);

if($xml->save("../../chatMessagesXML/" . $_SESSION["SESSION_EMAIL"] . ".php")){
    echo "Message sent Successfully";
} else {
    echo "Message not sent";
}