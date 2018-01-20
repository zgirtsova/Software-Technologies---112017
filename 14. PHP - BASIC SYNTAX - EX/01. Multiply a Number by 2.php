<?php
if (isset($_GET['num'])) {
    $num = intval($_GET['num']);
    echo $num * 2;
}
?>

<form>
    Number: <input type="number" name="num" value="<?= $num ?>"/>
    <input type="submit" value="Submit"/>
</form>
