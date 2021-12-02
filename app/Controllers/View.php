<?php
declare(strict_types=1);

namespace App\Controllers;
use App\Exceptions;

class View
{
    public function __construct(
        protected string $view,
        protected array $params
        )
    {

    }

    /**
     * @return string
     * @throws Exceptions\ViewNotFoundException
     */
    public static function make(string $view, array $params): View
    {
        return new static($view, $params);
    }

    /**
     * @return string
     * @throws Exceptions\ViewNotFoundException
     */
    public function render(): string
    {
            ob_start();

            $view_path =  VIEW_PATH . '/' . $this->view . '.php';
            if(! file_exists($view_path)) {
                throw new Exceptions\ViewNotFoundException();
            }
            foreach ($this->params as $key => $value) {
                $$key = $value;
            }

            include $view_path;

            return ob_get_clean();
    }


    public function __get(string $name)
    {
        // TODO: Implement __get() method.
        return $this->params[$name];
    }


}