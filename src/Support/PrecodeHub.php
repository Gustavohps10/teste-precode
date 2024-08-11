<?php

namespace App\Support;

abstract class PrecodeHub
{
    protected $apiUrl;
    protected $apiAuthToken;
    protected $endpoint;
    protected $build;
    protected $callback;

    public function __construct()
    {
        $this->apiUrl = $_ENV["PRECODE_API_URI"] . "/api/v3";
        $this->apiAuthToken = $_ENV["PRECODE_API_TOKEN"];
    }

    public function callback()
    {
        return $this->callback;
    }

    public function post()
    {
        $headers = array(
            'Content-Type: application/json; charset=UTF-8',
            'Authorization: Basic ' . $this->apiAuthToken
        );

        $url = $this->apiUrl . $this->endpoint;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($this->build));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $output = curl_exec($ch);
        $result = iconv('UTF-8', 'ISO-8859-1//TRANSLIT', $output);
        $this->callback = json_decode($result, true);
        curl_close($ch);
    }
}