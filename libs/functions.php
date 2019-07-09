<?php
function get_pets() {
    $pets = file_get_contents('resources/pets.json');
    $pets = json_decode($pets, true);
    return $pets;
}