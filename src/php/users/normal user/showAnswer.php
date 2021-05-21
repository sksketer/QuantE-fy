<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show quiz Answer</title>
    <style>
        body {
            width: 85%;
            margin: auto;
        }
        #head {
            text-align: center;
            font-size: 35px;
        }
        #info {
            width: 45%;
            margin: auto;
            display: flex;
            justify-content: space-around;
        }
        #topic {
            font-weight: bold;
        }
        #difficulty {
            font-weight: bold;
        }
        #border {
            border: 2px solid black;
            padding: 20px;
            margin-bottom: 22px;
        }
        #back-btn {
            margin: 0px 45%;
            text-align: center;
            padding: 5px 15px;
            border: 2px solid green;
            background: white;
            border-radius: 20px;
            text-decoration: none;
            color: green;
            font-weight: bolder;
        }
        #back-btn:hover {
            color: white;
            background: green;
        }
        #c-ans, #w-ans {
            margin: 10px;
            padding: 5px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php

    $topic = $_SESSION['topic'];
    $difficulty = $_SESSION['difficulty'];
    $correctAnswer = $_SESSION['correctAnswer'];
    $userAnswer = $_SESSION['userAnswer'];
    // var_dump($userAnswer); echo "<br>";
    // var_dump($correctAnswer);
    ?>
    <h2 id="head">Quiz Answers</h2>
    <div id="info">
        <p id="topic">Topic: <?php echo $topic;?></p>
        <p id="difficulty">Difficulty: <?php echo $difficulty;?></p>
    </div>
    <div id="border">  

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
        
        if (mysqli_num_rows ( $result ) > 0) {
            $i = 1;
            $j = 0;
            $allKeys = array_keys($userAnswer);
            while($row=mysqli_fetch_assoc($result)) {
                $questionumber = "q".$i;
                $color = "";
                if($row[$correctAnswer[$allKeys[$j]]] == $row[$userAnswer[$allKeys[$j]]]) $color="rgb(126, 243, 126)"; else $color = "rgb(243, 126, 126)";

                echo '<div style="background:'.$color.' ; padding: 12px;">'.'<br>';
                    echo '<label >Q-'.$i.' '. $row["question"] .'</label> <br><br>';
                    echo '<div style="display: flex;">';
                        echo '<div style="margin-left: 22px;">';
                        echo '1- '. $row["option1"] .'<br>';
                        echo '2- '. $row["option2"] .'<br>';
                        echo '3- '. $row["option3"] .'<br>';
                        echo '4- '. $row["option4"] .'<br>';
                        echo '</div>';

                        // echo '<div>';
                        // if($row[$correctAnswer[$i]] == $row[$userAnswer[$i]]) {
                        //     echo '<span style="color: green; font-size: 45px; margin-left: 60px;">&#10004;</span>';
                        // } else {
                        //     echo '<span style="color: red; font-size: 45px; margin-left: 60px;">&#10008;</span>';
                        // }
                        // echo '</div>';
                    echo '</div>';

                    echo '<div style="margin-left: 25px;">';
                        echo '<span id="c-ans">Correct Answer is- ';
                        echo $row[$correctAnswer[$allKeys[$j]]].'</span>';
                        
                        echo '<span id="w-ans">Your Answer is- ';
                        echo $row[$userAnswer[$allKeys[$j]]].'</span>';
                    echo '</div>';
                echo"</div>"."<br>";
                echo '<hr>';
                $i++;
                $j++;
            }
        } 
        ?>
        <a href="http://localhost/QuantE-FY/src/php/users/normal%20user/quiz.php" id="back-btn">Back</a>
    </div>
</body>
</html>