<?php
namespace Application\Models;

class Model
{
  protected $table;
  protected $editable = [];

  protected function __construct()
  {
  }

  public function createOrUpdate(array $data)
  {
    $this->checkFields($data);
  }

  public function checkFields(array $data)
  {
    $fields = array_keys($data);
    var_dump($fields);
  }

}
