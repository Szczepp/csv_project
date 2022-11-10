## General info
This is an educational project that uses basic MVC pattern. <br>
It has custom routing and view rendering.
You send a .csv file in a form and it returns a table with column names and values. 
(no file validation yet)

## Technologies
* PHP 8
* HTML / CSS

## Setup
Step 1: Download the repository <br>
Step 2: Open your terminal and in project directory run `composer update` to install dependencies (used for class autoloading) <br>
Step 3: go to `csv_project/docker/` and run `docker-compose up -d` (-d so it runs in the background) and then type `localhost:8000` in your web browser. <br>
