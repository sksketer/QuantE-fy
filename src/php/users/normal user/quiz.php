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
        #save-btn {
            text-align: center;
            padding: 5px 18px;
        }
    </style>
</head>
<body>
<?php
    // if($_isset['startQuiz']) {
        // $_SESSION['topic'] = $_POST['topic'];
        // $_SESSION['difficulty'] = $_POST['difficulty'];
    // }
?>
    <div class="main-container">
        
        <div class="container">
            <form action="" method="post">
                
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
                    echo mysqli_num_rows ( $result );
                    if (mysqli_num_rows ( $result ) > 0) {
                        // output data of each row
                        
                        $i = 1;
                        while($row=mysqli_fetch_assoc($result)) {
                            $questionumber = "q".$i;
        
                            echo '<div class="q">';
                            echo '<label for="">Q-'.$i++.' '. $row["question"] .'</label> <br><br>';
                            echo '<input type="radio" name="'.$questionumber.'" id="" value="option1"> '. $row["option1"] .'<br>';
                            echo '<input type="radio" name="'.$questionumber.'" id="" value="option2"> '. $row["option2"] .'<br>';
                            echo '<input type="radio" name="'.$questionumber.'" id="" value="option3"> '. $row["option3"] .'<br>';
                            echo '<input type="radio" name="'.$questionumber.'" id="" value="option4"> '. $row["option4"] .'<br>';
                            $correctAnswer[$row["sno"]] = $row["answer"];
                            echo"</div>"."<br>";
                            echo '<hr>'.'<br>';
                        }
                        echo '<input type="submit" value="save" name="save" id="save-btn">';
                    } else {
                        echo "<div style='text-align: center;'>There is no Question in DataBase for Quiz.</div>";
                        echo '<div><p><a href="http://localhost/QuantE-FY/src/php/users/normal%20user/selectTopic.html">Try Again</a></p></div>';
                    }
                ?> 
            </form>

            <div class="detail">
                <img src="../../../img/photo.jpg" alt="Image Not Found" width="100px" height="100px">
                <p><?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></p>
            </div>
        </div>
        <div class="result">
            <?php
                if(isset($_POST['save'])) {
                    echo "Calculating score"."<br>";                
                    $score = 0;
                    $numberOfRows = mysqli_num_rows($result);
                    for($i = 1; $i <= $numberOfRows; $i++) {
                        $q = 'q'.$i;
                        $useranswer[$i] = $_POST[$q];
                        if($useranswer[$i] == $correctAnswer[$i])
                            $score++;
                    }
                    echo "Correct ".$score ." out of ".$numberOfRows;
                    $_SESSION['correctAnswer'] = $correctAnswer;
                    $_SESSION['userAnswer'] = $useranswer;
                    echo '
                        <form action="showAnswer.php" method="post">
                            <input type="hidden" name="userAnswer" value="<?php $useranswer ?>">
                            <input type="submit" value="Check your Answer">
                            </form>
                            ';
                        }
                        var_dump($correctAnswer);
                        var_dump($_SESSION['correctAnswer']);
            ?>
            
        </div>
    </div>
</body>
</html>