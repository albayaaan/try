<?php
    function grade($nilai) {
        if ($nilai <= 100 && $nilai > 80){
            echo "Grade anda adalah A <br>";
        } elseif($nilai <= 80 && $nilai > 60){
            echo "Grade anda adalah B <br>";
        } elseif ($nilai <= 60 && $nilai > 40){
            echo "Grade anda adalah C <br>";
        } else {
            echo "Grade anda adalah D <br>";
        }
    }

    grade(99);
    grade(70);
    grade(20);
?>