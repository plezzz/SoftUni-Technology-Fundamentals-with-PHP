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
function isPrime($n)
{
    for ($i = 2; $i <= sqrt($n); $i++)
        if ($n % $i == 0)
            return false;
    return true;
}
if (isset($_GET["num"])) {
    $num = intval($_GET["num"]);
    for ($i = $num; $i > 1; $i--)
        if (isPrime($i))
            echo $i . " ";
}
?>
</body>
</html>