<?php
class UserController {
    public function login() {
        include "views/home/login.php";
    }

    public function register() {
        include "views/home/register.php";
    }

    public function profile() {
        include "views/home/profile.php";
    }
}
