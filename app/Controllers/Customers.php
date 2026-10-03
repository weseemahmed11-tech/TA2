<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            ['full_name' => 'Ana Reyes', 'email' => 'ana.reyes@example.com', 'phone' => '09170000001'],
            ['full_name' => 'Marco Santos', 'email' => 'marco.santos@example.com', 'phone' => '09170000002'],
            ['full_name' => 'Liza Cruz', 'email' => 'liza.cruz@example.com', 'phone' => '09170000003'],
            ['full_name' => 'Paolo Garcia', 'email' => 'paolo.garcia@example.com', 'phone' => '09170000004'],
            ['full_name' => 'Mina Flores', 'email' => 'mina.flores@example.com', 'phone' => '09170000005'],
        ];

        return view('partials/header', ['title' => 'Customer Accounts'])
            . view('customers/index', ['customers' => $customers])
            . view('partials/footer');
    }
}
