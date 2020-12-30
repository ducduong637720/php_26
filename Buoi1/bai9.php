<?php 
for ($i = 1; $i <= 10; $i++) {
        for ($j = 0; $j <= 10; $j++) {
            if ($j <= 10 - $i) {
                echo "&nbsp&nbsp";
            } else {
                echo "*";
            }
        }
        echo "<br>";
    }

?>
