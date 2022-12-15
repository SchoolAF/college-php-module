<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>It's PHP Time booooyyyy</title>
</head>
<body>
    <h1>IT'S ARRAYS BOIZZZZZZ</h1>
    <?php
    $days = array("Mon","Tue","Wed","Thu","Fri","sat","Sun");
    $i=0;
    while ($i<count($days))
    {
        echo("Day ".($i+1)." is ".$days[$i]."<br>");
        $i++;
    }
    ?>
</body>
</html>
