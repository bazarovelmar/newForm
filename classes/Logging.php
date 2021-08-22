<?php


class Logging
{

    public function logInfo($name, $surname, $email, $response)
    {
        $logArray = [
            "data" => date('Y-m-d H:i:s'),
            "name" => $name,
            "surname" => $surname,
            "email" => $email,
            "response" => json_encode($response['status']),
        ];
        $logStyle = date('Y-m-d H:i:s') . ' ' . print_r($logArray, true);
        file_put_contents(__DIR__ . '/../log.txt', $logStyle . PHP_EOL, FILE_APPEND);
    }

}