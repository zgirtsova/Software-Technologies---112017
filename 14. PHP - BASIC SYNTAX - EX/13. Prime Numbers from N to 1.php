<form>
    N: <input type="text" name="num"/>
    <input type="submit"/>
</form>

<?php

function isPrime($number): bool
{
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

if (isset($_GET['num'])) {
    $num = intval($_GET['num']);
    for ($i = $num; $i > 1; $i--) {
        if (isPrime($i)) {
            echo "$i ";
        }
    }
}