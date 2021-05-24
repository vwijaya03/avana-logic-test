<?php
    function getPosition($str, $pos) {
        $returnedPosition = 0;
        $leftCounter = 0;
        $rightCounter = 0;

        for ($i = $pos; $i < strlen($str); $i++) { 
            if ($str[$i] == "(") {
                $leftCounter += 1;
            }

            if ($str[$i] == ")") {
                $rightCounter += 1;
            }

            if ($leftCounter == $rightCounter) {
                $returnedPosition = $i;
                break;
            }
        }

        return $returnedPosition;
    }

    echo getPosition("a (b c (d e (f) g) h) i (j k)", 7);
    //                01234567890123456789012345678
?>