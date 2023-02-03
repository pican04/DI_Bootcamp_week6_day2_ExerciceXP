<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ExerciceXP3</title>
    </head>
    <body>
        <h1>Check Student Grade</h1>
        <!-- Write a program to check student grade based on the marks using if-else statement.  -->      
        <?php 
            $noteOne = 12;
            $noteTwo = 20;
            $sumNote = $noteOne  + $noteTwo;
            
            if ( $sumNote >= 0.06) 
            {
                echo "grade will be First Division"; 
            }
            elseif ($sumNote >= 0.45 && $sumNote < 0.59)
            {
                echo "grade will be Second Division";
            }
            elseif($numNote >= 0.33 && $numNote < 0.44)
            {
                echo "grade will be Third Division";
            }
            elseif($numNote < 0.33)
            {
                echo"student will be Fail.";
            }
        ?>
    </body>
</html>