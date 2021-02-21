<?php

trait PDOConnector {
  public function connect(){
		echo ' * PDOConnector > connect * ' . PHP_EOL;
  }
  public function disconnect(){
		echo ' * PDOConnector > disconnect * ' . PHP_EOL;
  }
  protected function setParams(array $params) {
    echo ' * PDOConnector > setParams * ' . PHP_EOL;
  }
}
