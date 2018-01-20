<?php
function line()
{
    for ($i = 1; $i <= 5; $i++) {
        echo "<button style=\"background-color: blue\">1</button>";
    }
    echo "\n<br>";
}

function firstThree()
{
    echo "<button style=\"background-color: blue\">1</button>";
    for ($i = 0; $i < 4; $i++) {
        echo "<button>0</button>";
    }
    echo "\n<br>";
}

function lastThree()
{
    for ($i = 0; $i < 4; $i++) {
        echo "<button>0</button>";
    }
    echo "<button style=\"background-color: blue\">1</button>";
    echo "\n<br>";
}


line();
firstThree();
firstThree();
firstThree();
line();
lastThree();
lastThree();
lastThree();
line();