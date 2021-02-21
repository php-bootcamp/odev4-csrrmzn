<?php

trait SQLCrud {
  public function create(SQLQuery $query) {
    echo ' * SQLCrud > create * ' . PHP_EOL;
  }
  public function update(SQLQuery $query) {
    echo ' * SQLCrud > update * ' . PHP_EOL;
  }
  public function delete(SQLQuery $query) {
    echo ' * SQLCrud > delete * ' . PHP_EOL;
  }
  public function get(SQLQuery $query) {
    echo ' * SQLCrud > get * ' . PHP_EOL;
  }
  public function first(SQLQuery $query) {
    echo ' * SQLCrud > first * ' . PHP_EOL;
  }
}
