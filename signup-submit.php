<?php
    include 'common.php';
    displayHeader("Signup finished");

    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $personality = $_POST["personality"];
    $os = $_POST["os"];
    $min = $_POST["min"];
    $max = $_POST["max"];

    $userData = "\n$name,$gender,$age,$personality,$os,$min,$max";

    file_put_contents("singles.txt", $userData, FILE_APPEND);
?>

<h2>Thank You!</h2>
<p>Welcome to Dating Site, <?php echo $name;?>!</p>
<p>Now <a href="matches.php">log in to see your matches</a></p>
<br>

<?php
displayFooter2();
?>