<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// $pr1 = readline("enter the price of product");
// $pr2 = readline("enter the price of pruduct");
$pr1 = 4000;
$pr2 = 4000;
$totalPrice = $pr1 + $pr2;
if($totalPrice>5000){
    $discPrice = $totalPrice - ($totalPrice*(10/100));
    echo "The total price to be paid is = ".$discPrice."Rs";
} else {
    echo "The total price to be paid is = ".$totalPrice."Rs";
}

?>
</body>
</html>
