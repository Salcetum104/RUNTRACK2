<?php
for ($num = 0 ; $num <= 100 ; $num++) {
    if ($num <= 20) {
        echo "<i> $num </i>" ."<br />";
    } 
    elseif ($num == 42) {
        echo "<u> La Plateforme </u>" ."<br />";
    }
    elseif ($num >= 25 && $num <= 50) {
        echo "<u> $num </u>" ."<br />";
    }
    
    else {
        echo $num ."<br />";
    }
}
?>