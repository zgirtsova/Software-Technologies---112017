<?php $month = intval(date("m")); ?>
<?php if ($month >= 6 && $month <= 8) { ?>
    <p>It is <?=date("M")?>, a summer time!</p>
<?php } else { ?>
    <p>Sorry, not summer.</p>
<?php } ?>

<?php
$count = 1;
while ($count <= 10) {
echo "<p>$count</p>";
$count++;
}

$i = 10;
do {
    echo $i . "<br>\n";
    $i--;
} while ($i > 0);

for ($i=0; $i<11; $i++) {
    echo "<div>$i</div>";
}

$nums = array(1, 2, 3);
foreach ($nums as $x)
    echo $x . "<br>";

// Arrays example:

$ages = ["Nakov" => 25, "Maria" => 22, "George" => 12];
echo $ages['Nakov'] . "<br>\n"; // 25
$ages['Kiro'] = 15; // Add new key-value pair
$ages['Nakov'] = 26; // Change existing value for given key
unset($ages['George']); // Delete existing key
$ages['Maria'] = 'no age'; // Mixing types is allowed
foreach ($ages as $name => $age) {
    echo "Name: $name, age: $age<br>\n";
}

// String Example

$lang = 'PHP';
$str = "I love $lang<br>\n";
echo $str; // I love PHP<br>
$broken = 'I love $lang<br>\n';
echo $broken; // I love $lang<br>\n
$tokens = explode(',', 'PHP,,,, SQL, HTML, Java');
$tokens = array_filter(array_map('trim', $tokens));
echo strtolower(implode(' - ', $tokens));
// php - sql - html - java
?>