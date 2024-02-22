<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// $score = readline("enter the score of the students")
$score = 59;

if($score<60) {
    echo"The Grade is F";
} elseif($score >=60&& $score<=70) {
    echo "The Grade is D";
} elseif($score >= 71&& $score<= 80) {
    echo "The Grade is C";
} elseif( $score >= 81&& $score<= 90) {
    echo "The Grade is B";
} elseif($score > 90) {
echo "The grade is A";
}

?>
</body>
</html>