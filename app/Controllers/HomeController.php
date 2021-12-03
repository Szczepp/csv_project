<?php

declare(strict_types=1);

namespace App\Controllers;


use App\Controllers\View;

class HomeController
{
    /**
     * @return string
     */
    public function index(): string
    {
        //return (new View('index', []))->render();
        return View::make('index', ['first'=>'first parameter', 'second'=>'another'])->render();
    }

}