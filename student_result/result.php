<?php

function calculateResult($bangla, $english, $math, $physics, $chemistry) {
    //  mark range (0 to 100)
    $marks = [$bangla, $english, $math, $physics, $chemistry];
    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Mark range is invalid. <br>";
            return;
        }
    }

    // Marks for below 33
    foreach ($marks as $mark) {
        if ($mark < 33) {
            echo "Failed in one or more subjects. Grade F <br>";
            return; 
        }
    }

    //  total marks, average
    $totalMarks = $bangla + $english + $math + $physics + $chemistry;
    $averageMarks = $totalMarks / 5;

    // Grade Calculating
    switch (true) {
        case ($averageMarks >= 80 && $averageMarks <= 100):
            $grade = "A+";
            break;
        case ($averageMarks >= 70 && $averageMarks < 80):
            $grade = "A";
            break;
        case ($averageMarks >= 60 && $averageMarks < 70):
            $grade = "A-";
            break;
        case ($averageMarks >= 50 && $averageMarks < 60):
            $grade = "B";
            break;
        case ($averageMarks >= 40 && $averageMarks < 50):
            $grade = "C";
            break;
        case ($averageMarks >= 33 && $averageMarks < 40):
            $grade = "D";
            break;
        default:
            $grade = "F";
    }

    
    echo "Total Marks: $totalMarks<br>";
    echo "Average Marks: $averageMarks<br>";
    echo "Grade: $grade<br>";
}





calculateResult(52,46,44,50,40);

?>
