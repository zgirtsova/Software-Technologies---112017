<?php

if (isset($_GET['text'])) {
    $text = $_GET['text'];
    preg_match_all('/\w+/', $text, $matches);
    // $matches is an Array of RegEx groups, so $matches[0] is group 0's matches
    $matches = $matches[0];

    $upperWords = array_filter($matches, function($x) {return strtoupper($x) == $x;
    });
    echo implode(", ", $upperWords);
}


?>
<form>
    <textarea rows="10" name="text"></textarea><br>
    <input type="submit" value="Extract">
</form>

