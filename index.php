<?php
require_once(__DIR__ . '/Room.php');
require_once(__DIR__ . '/db.php');

foreach ($stanze as $stanza) {

  $iStanza = new Room($stanza["id"], $stanza["room_number"], $stanza["floor"], $stanza["beds"]);

  var_dump($iStanza);

}

?>
