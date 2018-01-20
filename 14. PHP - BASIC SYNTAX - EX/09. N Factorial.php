<form>
    N: <input type="text" name="num"/>
    <input type="submit"/>
</form>

<?php
if (isset($_GET['num'])) {
    $num = intval($_GET['num']);
    $result = 1;
    for ($i = 1; $i <= $num; $i++) {
        $result *= $i;
    }
    echo $result;
}