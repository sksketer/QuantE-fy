<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/quiz.css">
    <title>Quiz</title>
</head>
<body>
    <div class="main-container">

        <div class="container">
            <form action="" method="post">
                <h2><span>Quiz</span></h2>
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "quante-fy";
    
                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }
    
                    $sql = "SELECT sno, question, option1, option2, option3, option4, answer FROM `quiz-question`";
                    $result=mysqli_query($conn,$sql); 
    
                    if (mysqli_num_rows ( $result ) > 0) {
                    // output data of each row
                        $i = 1;
                        while($row=mysqli_fetch_assoc($result)) {
                            $questionumber = "q".$i;
    
                            echo '<div class="q">';
                            echo '<label for="">Q-'.$i++.' '. $row["question"] .'</label> <br><br>';
                            echo '<input type="radio" name="'.$questionumber.'" id="" value="1"> '. $row["option1"] .'<br>';
                            echo '<input type="radio" name="'.$questionumber.'" id="" value="2"> '. $row["option2"] .'<br>';
                            echo '<input type="radio" name="'.$questionumber.'" id="" value="3"> '. $row["option3"] .'<br>';
                            echo '<input type="radio" name="'.$questionumber.'" id="" value="4"> '. $row["option4"] .'<br>';
                            $correctAnswer[$row["sno"]] = $row["answer"];
                            echo"</div>"."<br>";
                        }
                    } else {
                        echo "0 results";
                    }
                ?> 
                <input type="hidden" name="btn" value="1" id="">
                <input type="submit" value="save">
            </form>
            <div class="detail">
                <img src="../../img/photo.jpg" alt="Image Not Found" width="100px" height="100px">
                <p><?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></p>
            </div>
        </div>
        <div class="result">
            <?php
                echo "Calculating score"."<br>";
            ?>
            <?php
                // sleep(5);
                $btn = "";
                $btn = $_POST['btn'];
                if($btn != "") {
                    $score = 0;
                    $numberOfRows = mysqli_num_rows($result);
                    for($i = 1; $i <= $numberOfRows; $i++) {
                        $q = 'q'.$i;
                        $useranswer[$i] = $_POST[$q];
                        if($useranswer[$i] == $correctAnswer[$i])
                            $score++;
                    }
                    echo "Correct ".$score ." out of ".$numberOfRows;
                }
            ?>
        </div>
    </div>
</body>
</html>