<?php
// common.php

/**
 * Outputs the HTML header, including the <head> section and opening <body> tag.
 * You can customize this function to include CSS, JavaScript, and other meta tags.
 */
function displayHeader($pageTitle = "My Website") {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo htmlspecialchars($pageTitle); ?></title>
        <!-- Link your CSS and other resources here -->
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
            <p>Results and page (C) Copyright DatingSite Logo Inc.</p>
            <a href="./login.php">
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