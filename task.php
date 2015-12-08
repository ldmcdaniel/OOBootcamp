<?php

class Task {
  public $description;

  public $completed = false;

  public $title;

  public function __construct($title, $description)
  {
    $this->title = $title;
    $this->description = $description;
  }

  public function complete()
  {
    $this->completed = true;
  }
}

$task = new Task('Lean OOP', 'The teacher has another job to do!');

$task->complete();

var_dump($task);