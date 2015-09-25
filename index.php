<?php

function displayGreeting($hourofday) {
    print ($hourofday);
    $hourofday = 11;
    if ($hourofday > 6 and $hourofday < 12)
        print"<p>Good morning";
    if ($hourofday > 12 and $hourofday < 17)
        print"<p>Good afternoon";
    if ($hourofday > 17 and $hourofday < 24)
        print"<p>Good night";
}
print displayGreeting($hourofday);
?>