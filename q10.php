<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    $title = "lasdkhfosdifjljlflkdfhlasdfkhdslfkskijasodjfiekofasldifodsjf";
    if(strlen($title) > 50){
        echo "your title exceeding character limit<br>";
        $title = substr($title,0, 50);
        echo "your truncated title is => ", $title;
    } else {
        echo"title limit ok!!";
    }

    ?>
</body>
</html>