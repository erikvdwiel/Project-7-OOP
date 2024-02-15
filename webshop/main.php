<?php

// auteur Van der Wiel
// functie startpagina

require_once "User.php";

$User1 = new User();

$User1->registerUser('erikvdwiel', '1234', 'admin');

echo "<pre>";
var_dump($User1);
echo "</pre>";



