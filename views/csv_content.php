<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../static/base_header.php'; ?>
    <title>CSV page</title>
    <link rel="stylesheet" href="../static/main.css" type="text/css">
</head>
<body>
<header>
    <h1> Content file </h1>
</header>
<article>
    <?php $columnNames = array_shift($fileArray); ?>
    <table>
        <tr>
            <th> <?= $columnNames['date'] ?> </th>
            <th> <?= $columnNames['check'] ?> </th>
            <th> <?= $columnNames['description'] ?> </th>
            <th> <?= $columnNames['amount'] ?> </th>
        </tr>
        <?php foreach ($fileArray as $transaction) { ?>
        <tr>
            <?php foreach ($transaction as $key => $value) {
                $$key = $value;
                // $Date $Check  $Description  $Amount
            } ?>
                <td> <?= $date ?> </td>
                <td> <?= $check ?> </td>
                <td> <?= $description ?> </td>
                <?php if (floatval(str_replace('$', '', $amount)) > 0) { ?>
                    <td id="green"> <?= $amount ?> </td>
                <?php } else { ?>
                    <td id="red"> <?= $amount ?> </td>
                <?php } ?>

            <?php } ?>
        </tr>
    </table>
</article>
<footer>
    <?php include '../static/base_footer.php' ?>
</footer>
</body>
</html>