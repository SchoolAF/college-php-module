<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>It's PHP Time booooyyyy</title>
</head>
<body>
    <h1>PHP Objects</h1>
    <?php
    class test
    {
            var $str = "Yo man!";
            function set_yoman($str)
            {
                $this->str=$str;
            }
    }
    $class=new test;
    echo $class->str;
    $class->set_yoman("ACUMALAKA");
    echo "<br>";
    echo $class->str;
    ?>
</body>
</html>