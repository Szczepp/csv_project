<?php

declare(strict_types=1);

namespace App\Controllers;



class CsvContentController
{
    /**
     * @return string
     */
    public function csvContent(): string
    {
        return (new View('csv_content', ['fileArray' => (new FormController('file'))->getArray()]))->render();
    }
}