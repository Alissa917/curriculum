<?php

function getCuboidVolume ($vertical, $horizontal, $height) {
    $volume = $vertical * $horizontal * $height;
    print $volume . "cm";
}

getCuboidVolume (5, 10, 8);

?>