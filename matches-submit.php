<?php
include 'common.php';
displayHeader("Your Matches");

$userName = trim($_GET['name']);
$file = "singles.txt";
$data = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$singles = array();

foreach ($data as $line) {
    $fields = explode(",", $line);
    if (count($fields) >= 7) {
        $singles[] = array(
            'name' => trim($fields[0]),
            'gender' => trim($fields[1]),
            'age' => (int)trim($fields[2]),
            'personality' => strtoupper(trim($fields[3])),
            'os' => trim($fields[4]),
            'min' => (int)trim($fields[5]),
            'max' => (int)trim($fields[6])
        );
    }
}

$currentUser = null;
foreach ($singles as $single) {
    if (strcasecmp($single['name'], $userName) === 0) {
        $currentUser = $single;
        break;
    }
}

if (!$currentUser) {
    echo "<p>User does not exist</p>";
    displayFooter();
    exit();
}

echo "<h2>Matches for {$currentUser['name']}</h2>";

foreach ($singles as $single) {
    if (strcasecmp($single['name'], $currentUser['name']) === 0) {
        continue;
    }
    
    if ($single['gender'] === $currentUser['gender']) {
        continue;
    }

    if ($single['age'] < $currentUser['min'] || $single['age'] > $currentUser['max']) {
        continue;
    }
    if ($currentUser['age'] < $single['min'] || $currentUser['age'] > $single['max']) {
        continue;
    }
    
    if ($single['os'] !== $currentUser['os']) {
        continue;
    }
    
    $matchPersonality = false;
    for ($i = 0; $i < min(strlen($single['personality']), strlen($currentUser['personality'])); $i++) {
        if ($single['personality'][$i] === $currentUser['personality'][$i]) {
            $matchPersonality = true;
            break;
        }
    }
    if (!$matchPersonality) {
        continue;
    }
    
    echo <<<HTML
    <div class="match">
        <p>
            {$single['name']}
            <img src="./images/user.jpg">
        </p>
        <ul>
            <li>Gender: {$single['gender']}</li>
            <li>Age: {$single['age']}</li>
            <li>Personality: {$single['personality']}</li>
            <li>OS: {$single['os']}</li>
        </ul>
    </div>
    HTML;
}

displayFooter();
?>
