<?php
namespace Probe\Support\Auth\Contracts;

use Probe\Support\Auth\Contracts\Authenticable;


interface UserRepositoryInterface{
    public function findByEmail(string $email): ?Authenticable;
}