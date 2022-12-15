<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>It's PHP Time booooyyyy</title>
</head>
<body>
    <h1>PHP Arithmetics</h1>
    <?php
        // Just basic if else
        $grade = 97;
        if($grade < 35)
        {
            echo "Your grade is D, now pray for yourself";
        } elseif( $grade < 50) {
            echo "Your grade is C, you still have to pray for yourself";
        } elseif( $grade < 75) {
            echo "Your grade is B, you still have to pray for yourself if you are an Asian";
        } elseif( $grade < 100) {
            echo "Your grade is A, congrats mate your parent proud of ya";
        }
    ?>
</body>
</html>