<?php

class MySQL extends SQL {
      use SQLCrud;
      private $host;
      private $port;
      private $username;
      private $password;
      private $database;

      public function __construct($host, $username, $password, $database)
      {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        echo ' * MySQL > __construct * ' . PHP_EOL;
      }

      public function __destruct()
      {
        echo ' * MySQL > __destruct * ' . PHP_EOL;
      }
}
