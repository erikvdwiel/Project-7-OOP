<?php 

    // Auteur: Van der Wiel


require_once "house.php";
require_once "room.php";


$house = new house(2, 4, 15, 15, 20);

$room1 = new room(2, 4, 15, 15, 20);
$room2 = new room(3, 5, 15, 15, 15);
$room3 = new room(2, 3, 15, 15, 12);    