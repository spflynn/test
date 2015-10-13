<?php

function displayGreeting($hourofday) {
    print ($hourofday);
    $hourofday = 11;
    if ($hourofday > 6 and $hourofday < 12)
        print"Good morning";
    if ($hourofday > 12 and $hourofday < 17)
        print"Good afternoon";
    if ($hourofday > 17 and $hourofday < 24)
        print"Good night";
}
print displayGreeting("<p".$hourofday."<p>");
print ("Did this work? Yes!");

?>