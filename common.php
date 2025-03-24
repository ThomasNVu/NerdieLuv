<?php

function displayHeader($pageTitle = "My Website") {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo htmlspecialchars($pageTitle); ?></title>
        <link href="./css/style.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <img src="./images/Logo.png" height="100px" width="auto">
        </header>
    <?php
}
function displayFooter() {
    ?>
        <footer>
            <p>This page is for single people to meet and date each other! Type in <br>
            your personal information and wait for the dating site to match you up!<br>
            Thank you for using our site.</p>

            <p>Results and page (C) Copyright DatingSite Logo Inc.</p>
            <a href="./index.php">
                <img src="./images/back-arrow.png" height="20px" style="vertical-align: middle;"> 
                <p style="display: inline; margin: 0;">Back to front page</p>
            </a>
            <br><br>
            <img src="./images/valid-html.png">
            <img src="./images/valid-css.png">
        </footer>
    </body>
    </html>
    <?php
}

function displayFooter2() {
    ?>
        <footer>
            <p>This page is for single people to meet and date each other! Type in <br>
            your personal information and wait for the dating site to match you up!<br>
            Thank you for using our site.</p>

            <p>Results and page (C) Copyright DatingSite Logo Inc.</p>
            <br>
            <img src="./images/valid-html.png">
            <img src="./images/valid-css.png">
        </footer>
    </body>
    </html>
    <?php
}
?>