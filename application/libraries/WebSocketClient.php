<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use WebSocket\Client;
use WebSocket\ConnectionException;

class WebSocketClient
{
    private $client;
    private $url;
    private $isConnected = false; // Track connection status

    public function __construct()
    {
        $this->url = 'ws://localhost:5000'; // Default URL (you can modify this if needed)

        try {
            $this->client = new Client($this->url);
            $this->isConnected = true;
        } catch (ConnectionException $e) {
            $this->isConnected = false; // Connection failed
            // log_message('error', 'WebSocket connection failed: ' . $e->getMessage());
        }
    }

    public function setUrl($url)
    {
        $this->url = $url;
        try {
            $this->client = new Client($url);
            $this->isConnected = true;
        } catch (ConnectionException $e) {
            $this->isConnected = false; // Connection failed
            // log_message('error', 'WebSocket connection failed: ' . $e->getMessage());
        }
    }

    public function sendMessage($message)
    {
        if ($this->isConnected) {
            $this->client->send($message);
        } 
    }

    public function receiveMessage()
    {
        if ($this->isConnected) {
            return $this->client->receive();
        } 
    }

    public function close()
    {
        if ($this->isConnected) {
            $this->client->close();
            $this->isConnected = false;
        } 
    }
}
