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
            'Content-Type:application/json',
            'Authorization: Basic ' . $this->apiAuthToken
        );

        $url = $this->apiUrl . $this->endpoint;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($this->build));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $this->callback = json_decode(curl_exec($ch), true);
        curl_close($ch);
    }
}