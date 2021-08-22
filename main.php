<?php


require 'classes/AuthCheck.php';
require 'classes/Validation.php';
require 'classes/Logging.php';

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordRepeat = $_POST['passwordRepeat'];


if($_SERVER['REQUEST_METHOD'] == 'POST') {

    //проводим валидацию email

    $valid = new Validation($email);
    $resultValid = $valid->checkValidation();

    //Выполняем проверку данных по заданному массиву и соответствие введенных паролей

    if ($resultValid) {
        $result = new AuthCheck($email, $password, $passwordRepeat);
        $resultCheck = $result->checkAuthInfo();

        //Получаем  и возвращаем результат

        if ($resultCheck) {
            $status = true;
            $error = "";
        } else {
            $status = false;
            $error = "Invalid check";
        }
    } else {
        $status = false;
        $error = "Invalid Email";
    }

    $response = [
        "status" => $status,
        "error" => $error
    ];

    echo json_encode($response);

    //Логируем результаты выполнения кода в файл

    $logInDoc = new Logging();
    $logInDoc->logInfo($name, $surname, $email, $response);

}
