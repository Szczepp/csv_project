<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../static/base_header.php'; ?>
    <title>Home Page</title>
</head>
<body>
    <header>
         <h1> Home </h1>

    </header>
    <main>
        <div class="input_form">
            <form action="/content" method="POST" enctype="multipart/form-data">
                <label for="file"><h3> Insert a .csv file: </h3></label>
                <input type="file" name="file">
                <button> Send you file </button>
            </form>
        </div>
    </main>
    <footer>
        <?php include '../static/base_footer.php' ?>
    </footer>
</body>
</html>