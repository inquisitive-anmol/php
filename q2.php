<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$light = "red";

if($light == "green") {
    echo"GO!!";
}  elseif ($light == "yellow") {
    echo "Slow down";
} elseif($light == "red") {
    echo "Stop!!";
}

?>
</body>
</html>