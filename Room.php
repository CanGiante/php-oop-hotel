<?php


  class Room {

    private $id;
    protected $room_number;
    protected $floor;
    protected $beds;
    public $created_at;
    public $updated_at;

    public function __construct($_id, $_room_number, $_floor, $_beds) {
      $this->id = $_id;
      $this->room_number = $_room_number;
      $this->floor = $_floor;
      $this->beds = $_beds;
    }

    public function getData() {
      return [
        "id" => $this->id,
        "roomNumber" => $this->room_number,
        "floor" => $this->floor,
        "beds" => $this->beds
      ];
    }

  }


?>
