<?php

echo "Welke operatie wil je uitvoeren? (+, %, -)\n";
$plusminus = readline();
if ($plusminus == "*")
    echo "* is geen geldige optie", exit();

echo "Eerste getal?\n";
$eerste = readline();
if (is_numeric($eerste)) {

    echo "Tweede getal?\n";
    $tweede = readline();
        if (is_numeric($tweede)) {

            echo $eerste, $plusminus, $tweede, " = ";

            if ($plusminus == "-")
                echo($eerste - $tweede);
            if ($plusminus == "+")
                echo($eerste + $tweede);
            if ($plusminus == "%")
                echo($eerste % $tweede);
        }
        else
        {
            echo "$tweede is geen geldig getal", exit() ;
        }
}
else
{
    echo "$eerste is geen geldig getal", exit() ;
}
