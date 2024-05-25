<?php
class UserModel {
    private $users = [
        ['name' => 'jono', 'email' => 'jono@gmail.com'],
        ['name' => 'jamal', 'email' => 'jamal@gmail.com']
    ];
    public function getUsers() {
        return $this->users;
    }
    public function getUser($index) {
        if (isset($this->users[$index])) {
            return $this->users[$index];
        } else {
            return null;
        }
    }
}