<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

// $score = readline("enter the score");
$score = 90;
if($score>=90) {
    echo"Grade A";
} elseif( $score>= 80) {
    echo "Grade B";
} elseif( $score>= 70) {
    echo "Grade C";
} elseif($score >= 60){
    echo "Grade D";
} elseif( $score<60) {
    echo "Grade F";
}
    ?>
</body>
</html>