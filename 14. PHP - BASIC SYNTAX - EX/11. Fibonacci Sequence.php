<form>
    N: <input type="text" name="num"/>
    <input type="submit"/>
</form>

<?php
if (isset($_GET['num'])) {
    $num = intval($_GET['num']);
    $a = 0;
    $b = 1;
    $sum = 1;
    for ($i = 0; $i < $num; $i++) {
        echo "$sum ";
        $sum = $a + $b;
        $a = $b;
        $b = $sum;
    }

}