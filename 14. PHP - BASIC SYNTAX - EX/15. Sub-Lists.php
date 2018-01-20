<form>
    N: <input type="text" name="num1"/>
    N: <input type="text" name="num2"/>
    <input type="submit"/>
</form>

<?php
if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = intval($_GET['num1']);
    $num2 = intval($_GET['num2']);
}
?>
<ul>
<?php
for ($i = 1; $i <= $num1; $i++) {
    echo "<li>List $i";
        echo "<ul>";
            for ($j = 1; $j <= $num2; $j++) {
                echo "<li>";
                echo "Element $i.$j";
                echo "</li>";
            }
        echo "</ul>";
    echo "</li>";
}
?>
</ul>

