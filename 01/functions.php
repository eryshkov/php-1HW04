<?php

function readGuestBook($fileName)
{
    $res = fopen($fileName, 'rb');
    $resultArray = [];

    while (false !== $str = fgets($res)) {
        $resultArray[] = trim($str);
    }

    fclose($res);

    return $resultArray;
}