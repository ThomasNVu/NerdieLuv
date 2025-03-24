<?php
include 'common.php';
displayHeader("View Your Matches");
?>

<form action="matches-submit.php" method="get">
    <fieldset>
        <legend>Returning User:</legend>
        <p>
            <strong>Name:</strong>
            <input type="text" name="name" size="16" required>
        </p>
        <p>
            <input type="submit" value="View My Matches">
        </p>
    </fieldset>
</form>

<?php
displayFooter();
?>