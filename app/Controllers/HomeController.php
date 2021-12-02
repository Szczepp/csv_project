<?php

declare(strict_types=1);

namespace App\Controllers;


class HomeController
{
    /**
     * @return string
     */
    public function index(): string
    {
        return VIEW_PATH . '/index.php';
    }
}