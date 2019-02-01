<?php

function readGuestBook($fileName)
{
    $file = fopen($fileName, 'r');
    $resultArray = [];

    while (false !== $str = fgets($file)) {
        $resultArray[] = trim($str);
    }

    fclose($file);

    return $resultArray;
}