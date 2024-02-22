<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$credentials = array("anmol","#star@gla");
// $user = readline("enter the user name");
// $pass = readline("enter password");
$user = "anmol";
$pass = "#star@gla";

if ($user == $credentials[0]){
    if($pass == $credentials[1]){
        echo"verified, Good to go!!";
    } else {
        echo "you entered wrong password";
    }
}elseif($pass != $credentials[1]) {
    echo "you entered wrong username and password";
}
else {
    echo "You entered wrong username";
}

    ?>
</body>
</html>