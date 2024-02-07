<?php 

class house {
   public $floor;
   public $rooms;
   public $width;
   public $height;
   public $depth;
   public $volume;

   
   function __construct($floor, $rooms, $width, $height, $depth, $volume)
   {
       $this->floor = $floor;
       $this->rooms = $rooms;
       $this->width = $width;
       $this->height = $height;
       $this->depth = $depth;
       $this->volume = $volume;
   }

}


$house1 = new house('', '', '', '', '', '');
$house2 = new house('', '', '', '', '', '');
$house3 = new house('', '', '', '', '', '');

echo '<pre>';
print_r($house1);
echo '</pre>';

echo '<pre>';
print_r($house2);
echo '</pre>';

echo '<pre>';
print_r($house3);
echo '</pre>';

