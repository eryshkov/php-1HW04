<?php
$isSuccess = false;

if (isset($_FILES['image'])) {
    $savedImage = $_FILES['image'];

    if (0 === $savedImage['error']) {
        $savedImagePath = $savedImage['tmp_name'];
        $userImageName = $savedImage['name'];
        $isSuccess = move_uploaded_file($savedImagePath, __DIR__ . '/img/' . $userImageName);
        var_dump($savedImage);
    }
}

if ($isSuccess) {
    header('Location:' . '/02/');
    http_response_code(302);
    exit;
} else {
    echo 'Что-то пошло не так';
}