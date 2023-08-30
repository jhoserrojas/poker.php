<?php
function FierroAlv() {
    for ($i = 1; $i <= 100; $i++) {
        $output = "";

        if ($i % 3 === 0) {
            $output .= "Peso";
        }
        
        if ($i % 5 === 0) {
            $output .= "Pluma";
        }

        echo ($output !== "") ? $output : $i;
        echo "\n";
    }
}

FierroAlv();
?>
