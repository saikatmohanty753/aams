<?php
namespace App\Interfaces;

interface LoginInterface{
    public function socialLogin($user);
    public function clearSessionLogin();
}
