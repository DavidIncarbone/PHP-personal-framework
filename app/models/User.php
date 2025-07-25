<?php

namespace App\Models;

class User
{
    protected $id;
    protected $username;
    protected $email;
    protected $password_hash;
    protected $full_name;
    protected $created_at;

    // GET METHODS
    public function getId()
    {
        return $this->id;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password_hash;
    }
    public function getName()
    {
        return $this->full_name;
    }
    public function getCreated()
    {
        return $this->created_at;
    }
    // SET METHODS

    public function setUsername(string $username)
    {
        $this->username = $username;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function setPassword(string $password)
    {
        $this->password_hash = $password;
    }

    // CRUD OPERATIONS

    public function create(array $data) {}
    public function read(int $id)
    {
        $this->username = 'lucio_ticali';
        $this->email = 'ticalilucio@gmail.com';
        $this->full_name = 'Luciano Ticali';
        return $this;
    }
    public function update(int $id, array $data) {}
    public function delete(int $id) {}
}
