<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testez si un nombre est pair, ou impair.</title>
    <style type="text/css">
table,
td {
    border: 1px solid #333;
}

thead,
tfoot {
    background-color: #333;
    color: #fff;
}
</style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th colspan="2">Testez si un nombre est pair, ou impair.</th>
            </tr>
        </thead>
    <form method="GET" action="index.php">
        <tbody>
            <tr>
        <td><label>Nombre :</label></td>
        <td><input type="text" name="nombre"><br></td>
        <td><input type="submit" value="Submit"></td>
    </tr>
        </tbody>
        </form>
    </table>
    </body>
</html>

<?php
$number = $_GET['nombre'];
if ($number % 2 == 0)
{
    echo "$number est pair.";
}
else
{
    echo "$number est impair.";
}
?>
