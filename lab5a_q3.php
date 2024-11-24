<?php
// Define the calculateArea function
function calculateArea($width, $height) {
    return $width * $height;
}

// Call the function with chosen values
$width = 4;
$height = 2;
$area = calculateArea($width, $height);

// Display the result with bold text
echo "<strong>The area of a rectangle with a width of $width and $height is $area</strong>";
?>

