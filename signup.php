<?php
include 'common.php';
displayHeader("New User Signup");
?>

<form action="signup-submit.php" method="post">
    <fieldset>
        <legend>New User Signup:</legend>

        <p>
            <strong>Name:</strong>
            <input type="text" name="name" size="16" required>
        </p>

        <p>
            <strong>Gender:</strong>
            <input type="radio" name="gender" value="M" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" value="F" id="female">
            <label for="female">Female</label>
        </p>

        <p>
            <strong>Age:</strong>
            <input type="text" name="age" size="6" maxlength="2" required>
        </p>

        <p>
            <strong>Personality Type:</strong>
            <input type="text" name="personality" size="6" maxlength="4" required>
            <a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">Don't know your type?</a>
        </p>

        <p>
            <strong>Favorite OS:</strong>
            <select name="os">
                <option value="Windows">Windows</option>
                <option value="Mac">Mac OS X</option>
                <option value="Linux">Linux</option>
            </select>
        </p>

        <p>
            <strong>Seeking age:</strong>
            <input type="text" name="min" size="6" maxlength="2" placeholder="min" required>
            to
            <input type="text" name="max" size="6" maxlength="2" placeholder="max" required>
        </p>

        <p>
            <input type="submit" value="Sign Up">
        </p>
    </fieldset>
</form>

<?php
displayFooter();
?>