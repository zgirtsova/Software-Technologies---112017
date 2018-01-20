<?php
if (isset($_GET['num'])) {
    $num = intval($_GET['num']);

    for ($i = 1; $i <= $num; $i++) {
        echo "<button>$i <br></button>";
    }
} else {
    ?>
    <form>
        N: <input type="text" name="num"/>
        <input type="submit"/>
    </form>
<?php } ?>