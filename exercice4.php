<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ExerciceXP4</title>
    </head>
    <body>
        <h1>Show Day Of The Week</h1>
    <!-- Write a program to show day of the week (for example: Monday) based on numbers using switch/case statements. -->
        <?php 
            $role = 'Day';

            switch ($role) 
            {
                case '1':
                    echo  $role= 'Monday';
                break;
                    
                case '2':
                    echo $role = 'Tuesday';
                break;
                case '3':
                    echo $role= 'Wednesday';
                break;
                case '4':
                    echo $role= 'Thursday';
                break;
                case '5':
                    echo $role= 'Friday';
                break;
                case '6':
                    echo $role= 'Saturday';
                break;
                case '7':
                    echo $role= 'Sunday';
                break;
                default: 
                    echo $role= ' invalid number in default';
                break;
                        
            }
        ?>
        
    </body>
</html>