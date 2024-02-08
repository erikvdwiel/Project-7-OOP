<?php 

class house {
   private $floor;
   private $rooms;
   private $width;
   private $height;
   private $depth;
   private $volume;
   private $price;
   private $pricePerCubi = 800;
   
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

//    public function getHouse(){

//     return "Dit huis heeft {$this->floor} verdiepingen, {$this->rooms} kamers en heeft een volume van {$this->volume} m3";

//    }

   public function getHeight(){

      return " Hoogte: {$this->height}m";

   }

   public function getWidth(){

      return " Breedte: {$this->width}m";

   }
   
   public function getLength(){

      return " Lengte: {$this->depth}m";
   }
   
   public function getvolume(){

    return "Dit huis heeft {$this->floor} verdiepingen, {$this->rooms} kamers en heeft een volume van {$this->volume} m3";

   }

   public function getPrice(){

   return "Prijs van het huis is = " . ($this->volume * $this->pricePerCubi) . ' Euro';
    
   }

}   
    

$house1 = new house(2, 4, 15, 15, 20);
$house2 = new house(3, 5, 15, 15, 15);
$house3 = new house(2, 3, 15, 15, 12);


echo 'Inhoud Kamers:' . '<br><br>';

echo $house1->getLength() . $house1->getWidth() . $house1->getHeight() . '<br>';
echo $house2->getLength() . $house2->getWidth() . $house2->getHeight() . '<br>';
echo $house3->getLength() . $house3->getWidth() . $house3->getHeight();