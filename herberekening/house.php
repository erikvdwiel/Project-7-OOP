<?php

class room {
   private $floor;
   private $rooms;
   private $width;
   private $height;
   private $depth;
   private $volume;
   public $price;
   public $pricePerCubi = 800;
   
   public function __construct($floor, $rooms, $width, $height, $depth)
   {
       $this->floor = $floor;
       $this->rooms = $rooms;
       $this->width = $width;
       $this->height = $height;
       $this->depth = $depth;
       $this->setVolume();
       
   }
   public function addRoom(){

   }

   public function getRooms(){

      return "Lengte: {$this->depth}m Breedte: {$this->width}m Hoogte: {$this->height}m";

   }  

   public function setVolume(){
      $this->volume = $this->width * $this->height * $this->depth;
    }
   
}



$room1 = new room(2, 4, 15, 15, 20);
$room2 = new room(3, 5, 15, 15, 15);
$room3 = new room(2, 3, 15, 15, 12);


echo $room1->getLength() . $room1->getWidth() . $room1->getHeight() . '<br>';
echo $room2->getLength() . $room2->getWidth() . $room2->getHeight() . '<br>';
echo $room3->getLength() . $room3->getWidth() . $room3->getHeight();