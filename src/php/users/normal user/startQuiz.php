<?php
    session_start();

    $topic = ($_POST['topic']) ? $_POST['topic'] : "All";
    $difficulty = ($_POST['difficulty']) ? $_POST['difficulty'] : "Mixed Question";

    $_SESSION['topic'] = $topic;
    $_SESSION['difficulty'] = $difficulty;

    header("Location: http://localhost/QuantE-FY/src/php/users/normal%20user/quiz.php");
?>