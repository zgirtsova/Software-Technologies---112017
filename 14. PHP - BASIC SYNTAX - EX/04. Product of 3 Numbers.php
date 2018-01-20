<form>
    X: <input type="text" name="num1"/>
    Y: <input type="text" name="num2"/>
    Z: <input type="text" name="num3"/>
    <input type="submit"/>
</form>

<?php
if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])) {
    if (array_search('0', $_GET)) {
        echo 'Positive';
    } else {
        $Negatives = array_filter($_GET, function ($x) {
            return $x < 0;
        });
        $countNeg = count($Negatives);
        if ($countNeg == 1 || $countNeg == 3) {
            echo "Negative";
        } else {
            echo "Positive";
        }
    }
}