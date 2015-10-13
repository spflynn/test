<?php 
//now print out each record
    $queryfile = fopen("q01.sql","r");
    $query = fread($queryfile,  filesize($queryfile));
    $info2 = $thisDatabaseReader->select($query, "", 0, 0, 0, 0, false, false);

    print '<article>';
    print '<aside>';
    print '<table>';
    
    $highlight = 0; // used to highlight alternate rows
    foreach ($info2 as $rec) {
        $highlight++;
        if ($highlight % 2 != 0) {
            $style = ' odd ';
        } else {
            $style = ' even ';
        }
        print '<tr class="' . $style . '">';
        for ($i = 0; $i < $columns; $i++) {
            print '<td>' . $rec[$i] . '</td>';
        }
        print '</tr>';
    }

    // all done
    print '</table>';
    print '</aside>';

print '</article>';
include "footer.php";
?>