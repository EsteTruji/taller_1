<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CustomUser extends Model
{    
    protected $fillable = ['name', 'email', 'password', 'address', 'balance', 'role'];
    

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName($name): void
    {
        $this->attributes['name'] = $name;
    }

    public function getEmail(): string
    {
        return $this->attributes['email'];
    }

    public function setEmail($email): void
    {
        $this->attributes['email'] = $email;
    }

    public function getPassword(): string
    {
        return $this->attributes['password'];
    }

    public function setPassword($password): void
    {
        $this->attributes['password'] = $password;
    }

    public function getAddress(): string
    {
        return $this->attributes['address'];
    }

    public function setAddress($address): void
    {
        $this->attributes['address'] = $address;
    }

    public function getBalance(): int
    {
        return $this->attributes['balance'];
    }

    public function setBalance($balance): void
    {
        $this->attributes['balance'] = $balance;
    }

    public function getRole(): string
    {
        return $this->attributes['role'];
    }

    public function setRole($role): void
    {
        $this->attributes['role'] = $role;
    }
}
