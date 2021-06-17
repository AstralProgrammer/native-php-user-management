<?php
namespace Application\Controllers;

class Application
{
  protected function __construct () {

  }

  public static function getInstance() : Application
  {
    return new Application();
  }

  public function getMethod()
  {
    return strtolower($_SERVER["REQUEST_METHOD"]);
  }
}
