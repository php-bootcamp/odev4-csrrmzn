<?php


class SQLQuery implements IQuery {
  private $table;
  private $bindings;
  private $offset;
  private $limit;
  private $wheres;
  private $action;

  public function setTable(string $table) {
        echo ' * SQLQuery > setTable * ' . PHP_EOL;
        return $this;
  }
  public function addBinding(string $key, string $value) {
        echo ' * SQLQuery > addBinding * ' . PHP_EOL;
        return $this;
  }
  public function removeBinding(string $key) {
        echo ' * SQLQuery > removeBinding * ' . PHP_EOL;
        return $this;
  }
  public function setPaginate(int $limit, int $offset) {
        echo ' * SQLQuery > setPaginate * ' . PHP_EOL;
        return $this;
  }
  public function addWhere(string $column, string $operator, string $value) {
        echo ' * SQLQuery > addWhere * ' . PHP_EOL;
        return $this;
  }
  public function update() {
        echo ' * SQLQuery > select * ' . PHP_EOL;
        return $this;
  }
  public function delete() {
        echo ' * SQLQuery > select * ' . PHP_EOL;
        return $this;
  }
  public function select() {
        echo ' * SQLQuery > select * ' . PHP_EOL;
        return $this;
  }
  public function compile() {
        echo ' * SQLQuery > compile * ' . PHP_EOL;
  }
}
