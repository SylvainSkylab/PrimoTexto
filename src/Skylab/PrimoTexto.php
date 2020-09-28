<?php

  namespace Skylab;

  use Skylab\baseManager;
  use Skylab\authenticationManager;

  class PrimoTexto {

    public $apiKey;
    public $number;
    public $message;
    public $sender;

    public function __construct($number, $message, $sender = null ){
        $this->apiKey = env('PRIMOTEXTO_API_KEY');
        $this->number = $number;
        $this->message = $message;
        $this->sender = $sender;
        authenticationManager::setApiKey($this->apiKey);
        authenticationManager::ensureLogin();
    }

  }
