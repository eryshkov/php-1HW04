<?php

include __DIR__ . '/functions.php';
$filePath = __DIR__ . '/guestBook.txt';

$newRecord = [];

if (isset($_POST['message'])) {
    $newRecord[] = $_POST['message'];
}

$prevRecords = readGuestBook($filePath);

$resultArray = array_merge($newRecord, $prevRecords);

$res = fopen($filePath, 'w');
fwrite($res, implode(PHP_EOL, $resultArray));
fclose($res);

header('Location:' . '/01/');
http_response_code(302);
exit;