<?php
include 'common.php';

// Display the header with a custom title
displayHeader("Home Page");
?>

<a href="./signup.php">
	<img src="./images/notepad.png"height="30px" style="vertical-align: middle;"> 
	<p style="display: inline; margin: 0;">Sign up for a new account</p>
</a>
<br>
<a href="./matches.php">
	<img src="./images/heart.png"height="30px" style="vertical-align: middle;"> 
	<p style="display: inline; margin: 0;">Check your matches</p>
</a>

<?php
// Display the footer
displayFooter2();
?>