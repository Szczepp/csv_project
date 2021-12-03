<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <header>
         <h1> <?= $first; ?> </h1>

    </header>
    <main>
        <div class="input_form">
            <form action="#" method="POST" enctype="multipart/form-data">
                <label for="file"><h3> Insert a .csv file: </h3></label>
                <input type="file" name="file">
                <button> Send you file </button>
            </form>
        </div>
    </main>
    <footer>
        Made by Me
    </footer>
</body>
</html>