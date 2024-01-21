<?php
// function validateImageSize($width, $height)
// {
//     $requiredWidth = 100;
//     $requiredHeight = 70;
//     return $width == $requiredWidth && $height == $requiredHeight;
// }

function validateExtension($extension)
{
    $ekstensi = ['png', 'jpg', 'jpeg'];
    return in_array($extension, $ekstensi);
}

// Fungsi untuk memvalidasi ukuran file
function validateSize($size)
{
    $maxSize = 1048576; // 1MB
    return $size <= $maxSize;
}

?>