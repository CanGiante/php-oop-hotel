<?php

class Room {

  public $id;
  public $room_number;
  public $floor;
  public $beds;
  public $created_at;
  public $updated_at;

  public function __construct($_id, $_room_number, $_floor, $_beds) {
    $this->id = $_id;
    $this->room_number = $_room_number;
    $this->floor = $_floor;
    $this->beds = $_beds;
  }

}


?>
