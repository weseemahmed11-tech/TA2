<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            ['username' => 'jdelacruz', 'full_name' => 'Jamie Dela Cruz', 'role' => 'Cashier'],
            ['username' => 'rlopez', 'full_name' => 'Rina Lopez', 'role' => 'Manager'],
            ['username' => 'mrivera', 'full_name' => 'Miguel Rivera', 'role' => 'Cashier'],
            ['username' => 'tlim', 'full_name' => 'Tessa Lim', 'role' => 'Staff'],
            ['username' => 'aperez', 'full_name' => 'Alex Perez', 'role' => 'Staff'],
        ];

        return view('partials/header', ['title' => 'User Accounts'])
            . view('users/index', ['users' => $users])
            . view('partials/footer');
    }
}
