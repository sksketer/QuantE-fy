<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show quiz Answer</title>
</head>
<body>
    <?php

    $topic = $_SESSION['topic'];
    $difficulty = $_SESSION['difficulty'];
    $correctAnswer = $_SESSION['correctAnswer'];
    $userAnswer = $_SESSION['userAnswer'];
    
    echo $topic."<br>";
    echo $difficulty."<br>";
    var_dump($userAnswer);
    echo "<br>";
    var_dump($correctAnswer);
    ?>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "quante-fy";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
        
        $topic = $_SESSION['topic'];
        $difficulty = $_SESSION['difficulty'];
    
        $sql = "SELECT sno, question, option1, option2, option3, option4, answer FROM `quiz-question`";
        
        if(($topic == "" || $topic == "All") && ($difficulty == "Mixed Question" || $difficulty == "Mixed Question")) {
            $sql = "SELECT sno, question, option1, option2, option3, option4, answer FROM `quiz-question`";
        } else if($topic != "All" && $difficulty != "Mixed Question") {
            $sql = "SELECT sno, question, option1, option2, option3, option4, answer FROM `quiz-question` WHERE topic = '$topic' AND difficulty = '$difficulty'";
        } else if($topic != "All" && $difficulty == "Mixed Question") {
            $sql = "SELECT sno, question, option1, option2, option3, option4, answer FROM `quiz-question` WHERE topic = '$topic'";
        }
        $result=mysqli_query($conn,$sql);
        
        echo '<h2><span>Quiz</span></h2>';
        if (mysqli_num_rows ( $result ) > 0) {
            $i = 1;
            while($row=mysqli_fetch_assoc($result)) {
                $questionumber = "q".$i;

                echo '<div class="q">';
                echo '<label for="">Q-'.$i.' '. $row["question"] .'</label> <br><br>';
                echo '<input type="radio" name="'.$questionumber.'" id="" value="option1"> '. $row["option1"] .'<br>';
                echo '<input type="radio" name="'.$questionumber.'" id="" value="option2"> '. $row["option2"] .'<br>';
                echo '<input type="radio" name="'.$questionumber.'" id="" value="option3"> '. $row["option3"] .'<br>';
                echo '<input type="radio" name="'.$questionumber.'" id="" value="option4"> '. $row["option4"] .'<br>';
                echo 'Correct Answer is- ';
                echo '<input type="" name="'.$correctAnswer[$i].'" id="" value="'. $row[$correctAnswer[$i]].'"><br>';
                echo 'Your Answer is-';
                echo '<input type="" name="'.$userAnswer[$i].'" id="" value="'. $row[$userAnswer[$i]] .'"><br>';
                echo"</div>"."<br>";
                echo '<hr>'.'<br>';
                $i++;
            }
            echo '<a href="http://localhost/QuantE-FY/src/php/users/normal%20user/quiz.php">Back</a>';
        } 
    ?>
</body>
</html>