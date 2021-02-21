<?php

abstract class SQL {
      public $connectionStatus = false;

      public function isConnected() {
        echo ' * SQL > isConnected * ' . PHP_EOL;
      }

			public abstract function create(SQLQuery $query);

			public abstract function update(SQLQuery $query);

			public abstract function delete(SQLQuery $query);

      public function setParamas(array $params) {
         echo ' * SQL > setParamas * ' . PHP_EOL;
      }
}
