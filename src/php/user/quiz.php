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

                $sql = "SELECT sno, question, option1, option2, option3, option4 FROM `quiz-question`";
                $result=mysqli_query($conn,$sql); 

                if (mysqli_num_rows ( $result ) > 0) {
                // output data of each row
                    while($row=mysqli_fetch_assoc($result)) {
                        $i = 1;
                        echo '<div class="q">';
                        echo '<label for="">Q- '. $row["question"] .'</label> <br><br>';
                        echo '<input type="radio" name="q1" id="">'. $row["option1"] .'<br>';
                        echo '<input type="radio" name="q1" id="">'. $row["option2"] .'<br>';
                        echo '<input type="radio" name="q1" id="">'. $row["option3"] .'<br>';
                        echo '<input type="radio" name="q1" id="">'. $row["option4"] .'<br>';
                        // $correctAnswer = $row["answer"];
                        echo"</div>"."<br>";
                        $i++;
                    }
                } else {
                echo "0 results";
                }
                $conn->close();
            ?> 
            <!-- <div class="q">
                <label for="">Q1- Factorial of 5 is</label> <br>
                <input type="radio" name="q1" id=""> 120 <br>
                <input type="radio" name="q1" id=""> 150 <br>
                <input type="radio" name="q1" id=""> 25 <br>
                <input type="radio" name="q1" id=""> none of above <br>
            </div> <br> -->
        </form>
        <div class="detail">
            <img src="../../img/photo.jpg" alt="Image Not Found" width="100px" height="100px">
            <p>Name</p>
        </div>
    </div>
</body>
</html>