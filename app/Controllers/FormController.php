<?php
declare(strict_types=1);

namespace App\Controllers;
use App\Exceptions\FileNotFoundException;

class FormController
{
    private string $filePath;

    /**
     * @param string $formName
     */
    public function __construct(
        private string $formName,
    )
    {
        $this->moveFile($this->formName);
    }

    /**
     * @return $this
     */
    public function moveFile(): self
    {
        if (! isset($_FILES[$this->formName]['name'])) {
            echo '$_FILE is not set';
        }

        $this->filePath =STORAGE_PATH . '/' . $_FILES[$this->formName]['name'];
        move_uploaded_file($_FILES[$this->formName]['tmp_name'], $this->filePath);
        unset($_FILES[$this->formName]['name']);
        return $this;
    }

    /**
     * @return array
     * @throws FileNotFoundException
     */
    public function getArray(): array
    {
        $outputArray = [];
        if (! file_exists($this->filePath)){
            throw new FileNotFoundException();
        }
        $file = fopen($this->filePath, 'r');
        $i = 0;

        while (($line = fgetcsv($file, 1000, ',')) !== false) {
            $outputArray[$i]['date'] = $line[0];
            $outputArray[$i]['check'] = $line[1];
            $outputArray[$i]['description'] = $line[2];
            $outputArray[$i]['amount'] = $line[3];
            $i++;
        }
        fclose($file);
        return $outputArray;

    }
}