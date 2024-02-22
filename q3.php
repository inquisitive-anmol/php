<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$steps = 4999;
// $steps = readline("enter the number of steps per day");
if($steps < 5000) {
    echo"Fitness level is Beginner";
} else if ( $steps >= 5000 && $steps <= 10000) {
    echo "Intermediate level";
} else if ( $steps > 10000) {
    echo "level is Advanced";
}

?>
</body>
</html>