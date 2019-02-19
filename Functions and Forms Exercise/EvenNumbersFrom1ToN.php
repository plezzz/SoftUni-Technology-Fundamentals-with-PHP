<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 16/02/2019
 * Time: 23:20
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Form</title>

</head>
<body>
<form>
    N: <input type="text" name="num"/>
    <input type="submit"/>
</form>
<?php
if (isset($_GET['num'])){
for ($i = 1; $i <= $_GET['num']; $i++) {
    if ($i % 2 == 0) {
        echo "$i ";
    }
}}
?>
</body>
</html>