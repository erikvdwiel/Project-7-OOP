<?php

class House {
private $rooms = [];

public function addRoom($room) {
$this->rooms[] = $room;
}

public function getRooms() {
return $this->rooms;
}

public function getTotalVolume() {
$totalVolume = 0;
foreach ($this->rooms as $room) {
$totalVolume += $room->calculateVolume();
}
return $totalVolume;
}

public function calculatePrice() {
$totalVolume = $this->getTotalVolume();
$pricePerCubicMeter = 3000; // Aangepaste prijsfactor per kubieke meter
return $totalVolume * $pricePerCubicMeter;
}
}