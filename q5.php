<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// $pro1Price = readline("enter the price of product 1");
// $pro2Price = readline("enter the price of product 2");
// $pro3Price = readline("enter the price of product 3");
$pro1Price = 500;
$pro2Price = 100;
$pro3Price = 100;

$totalOrderAmt = $pro1Price + $pro2Price + $pro3Price;

if($totalOrderAmt >= 1000) {
    echo"Congrats!! you are eligible for offer";
} else {
    echo "sorry! you are not eligible for offer";
}

?>
</body>
</html>