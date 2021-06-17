<?php
namespace Application\Models;

class User extends Model
{
  protected $table = 'users';
  protected $editable = [
    'username',
    'first_name',
    'last_name',
    'user_type',
    'password'
  ];

  protected function __construct($id = null)
  {
    parent::__construct();
  }

  public static function getInstance($id = null): User
  {
    return new User($id);
  }

  public function create(array $data)
  {
    if (!empty($data['password'])) {
      $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
    }

    $this->createOrUpdate($data);
  }

}
