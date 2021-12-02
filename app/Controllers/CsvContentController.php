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
        return VIEW_PATH . '/csv_content.php';
    }
}