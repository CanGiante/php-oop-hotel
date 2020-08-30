<?php
require_once(__DIR__ . '/Room.php');
require_once(__DIR__ . '/db.php');

?> <ul class="data" style="display:flex;flex-wrap:wrap;"> <?php
  foreach ($stanze as $stanza) {

    $room = new Room(intval($stanza["id"]), intval($stanza["room_number"]), intval($stanza["floor"]), intval($stanza["beds"]));

    $data = $room->getData();

    ?>
      <ul class="data_room" style="list-style-type:none;border:1px solid black;padding:10px;">
        <li> ID: <?php echo $data["id"]; ?> </li>
        <li> NUMERO: <?php echo $data["roomNumber"]; ?> </li>
        <li> PIANO: <?php echo $data["floor"]; ?> </li>
        <li> LETTI: <?php echo $data["beds"]; ?> </li>
      </ul>
    <?php

  }
?> </ul> <?php


?>
