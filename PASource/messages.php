<meta http-equiv="refresh" content="5">
<?php

require_once('inc/chat.inc.php');
$oSimpleChat = new SimpleChat();
//$oSimpleChat->deleteMessage();
echo $oSimpleChat->getMessages();

?>
