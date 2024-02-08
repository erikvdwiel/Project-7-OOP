<?php 

class house {
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

   public function setVolume(){
     $this->volume = $this->width * $this->height * $this->depth;
   }

   public function getHouse(){

    return "Dit huis heeft {$this->floor} verdiepingen, {$this->rooms} kamers en heeft een volume van {$this->volume} m3";

   }
   

   public function getPrice(){

   return "De prijs van het huis is " . ($this->volume * $this->pricePerCubi);
    
   }

}   
    

$house1 = new house(2, 4, 15, 15, 20);
$house2 = new house(3, 5, 15, 15, 15);
$house3 = new house(2, 3, 15, 15, 12);

echo $house1->getHouse() . "</br>";
echo $house1->getPrice() . "</br>";

echo $house2->getHouse() . "</br>";
echo $house2->getPrice() . "</br>";

echo $house3->getHouse() . "</br>";
echo $house3->getPrice() . "</br>";