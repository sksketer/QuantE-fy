<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/quiz.css">
    <title>Quiz</title>
    <style>
        body {
            /* overflow: hidden; */
        }
        #head {
            text-align: center;
            font-size: 35px;
        }
        #save-btn {
            margin: 0px 45%;
            text-align: center;
            padding: 5px 18px;
            border: 1px solid black;
            border-radius: 12px;
            font-weight: bolder;
            margin-bottom: 12px;
        }
        #save-btn:hover {
            border: 1px solid white;
            box-shadow: 0px 0px 3px black;
        }
        #check-answer-btn {
            padding: 8px;
            border-radius: 12px;
            font-weight: bold;
            border: none;
            outline: none;
            background: white;
        }
        #check-answer-btn:hover {
            text-decoration: underline;
        }

        .main-container {
            width: 100%;
            height: fit-content;
        }
        .container {
            width: 100%;
            background-color: gray;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            padding: 8px;
        }
        #head {
            text-align: center;
            padding-bottom: 6px;
        }
        .container .form {
            width: 78%;
            float: left;
            background-color: white;
            box-shadow: 0px 0px 5px black;
            padding:  2px 12px 8px;
            border: 2px solid black;
            padding: 22px;
            background-color: lightgray;
        }
        #form {
            height: 85vh;
            width: 100%;
            overflow-y: scroll;
            overflow-x: hidden;
            padding: 15px;
        }
        .result {
            font-size: large;
            font-weight: bold;
            text-align: center;
        }
        #save-btn {
            text-align: center;
            padding: 5px 18px;
        }
        .container .detail {
            text-align: center;
            float: inline-end;
            width: 20%;
            background-color: white;
            box-shadow: 0px 0px 5px black;
            padding: 12px;
        }
        .container .detail img {
            padding: 3px;
            background-color: gray;
            border-radius: 20%;
        }
        #ans-form {
            width: 100%;
            margin: 8px 0px;
        }
    </style>
</head>
<body>

    <div class="main-container">
        
        <div class="container">

            <div class="form">

                <h2 id="head">Quiz</h2>

                <form action="" method="post" id="form">
                    
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
                            // output data of each row
                            $i = 1;
                            while($row=mysqli_fetch_assoc($result)) {
                                $questionumber = "q".$i;
            
                                echo '<div class="q">';
                                    echo '<label style="font-weight: bold;">Q-'.$i++.' '. $row["question"] .'</label> <br><br>';
                                        echo '<div style="margin-left: 12px;">';
                                        echo '<input type="radio" name="'.$questionumber.'" id="" value="option1"> '. $row["option1"] .'<br>';
                                        echo '<input type="radio" name="'.$questionumber.'" id="" value="option2"> '. $row["option2"] .'<br>';
                                        echo '<input type="radio" name="'.$questionumber.'" id="" value="option3"> '. $row["option3"] .'<br>';
                                        echo '<input type="radio" name="'.$questionumber.'" id="" value="option4"> '. $row["option4"] .'<br>';
                                        echo '</div>';
                                        // $index[$i] = $row["sno"];
                                        $correctAnswer[$row["sno"]] = $row["answer"];
                                        $index = array_keys($correctAnswer);
                                    echo"</div>"."<br>";
                                echo '<hr>'.'<br>';
                            }
                            echo '<input type="submit" value="submit" name="save" id="save-btn">';
                        } else {
                            echo "<div style='text-align: center;'>There is no Question in DataBase for Quiz.</div>";
                            echo '<div><p><a href="http://localhost/QuantE-FY/src/php/users/normal%20user/selectTopic.html">Try Again</a></p></div>';
                        }
                        ?> 
                </form> 

                <div class="result">
                    <?php
                        if(isset($_POST['save'])) {           
                            $score = 0;
                            $j = 0;
                            $numberOfRows = mysqli_num_rows($result);
                            for($i = 1; $i <= $numberOfRows; $i++) {
                                $q = 'q'.$i;
                                $k = $index[$j++];
                                $useranswer[$k] = $_POST[$q];
                                if($useranswer[$k] == $correctAnswer[$k])
                                    $score++;
                                }
                            $color = "";
                            if($score == 0) $color="red"; elseif($score == $numberOfRows) $color = "green"; else $color="rgb(29, 238, 29)";
                            
                            echo '
                            <form action="showAnswer.php" method="post" id="ans-form">
                                <div style="word-spacing: 6px; letter-spacing: 3px; margin: 8px;">Calculating score</div>
                                <div style="color: '.$color.'; margin-bottom: 8px;">Correct '.$score .' out of '.$numberOfRows.'</div>
                                <input type="hidden" name="userAnswer" value="<?php $useranswer ?>">
                                <input type="submit" value="Check your Answer"style="border: 2px solid '.$color.'; color:'.$color.';" id="check-answer-btn">
                            </form>
                            ';
                            $_SESSION['correctAnswer'] = $correctAnswer;
                            $_SESSION['userAnswer'] = $useranswer;
                        }
                    ?>
                    
                </div>

            </div>


            <div class="detail">
                <img src="../../../img/photo.jpg" alt="Image Not Found" width="100px" height="100px">
                <p><?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></p>
            </div>
        </div>
        
    </div>
</body>
</html>