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
        // Aight, let's set some vars
        $colors = array('red', 'green', 'blue');

        // Let's play arround to show random value from the array
        $random_key = array_rand($colors);

        // Print it out mate
        echo "Firts color is " . $colors[0] . "<br>";
        echo "Second color is " . $colors[2] . "<br>";
        echo "Third color is " . $colors[1] . "<br>";

        echo "<br>";

        // print the corresponding element
        echo "<h3>Let's do some Random colors</h3>";
        echo "Your random color is " . $colors[$random_key] . "\n";
    ?>
</body>
</html>