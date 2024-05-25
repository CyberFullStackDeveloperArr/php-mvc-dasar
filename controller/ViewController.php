<?php
class ViewController {
    public function show($view) {
        $userModel = new UserModel();
        $users = $userModel->getUsers();
        require_once 'view/' . $view . '.php';
    }
}
