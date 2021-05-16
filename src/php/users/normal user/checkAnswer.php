<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="result">
        <?php
            $conn = mysqli_connect("localhost", "root", "", "quante-fy");
            
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT sno, question, option1, option2, option3, option4, answer FROM `quiz-question`";
            $result=mysqli_query($conn,$sql);

            while($row=mysqli_fetch_assoc($result)) {
                $correctAnswer[$row["sno"]] = $row["answer"];
            }

            $score = 0;
            $numberOfRows = mysqli_num_rows($result);
            for($i = 1; $i <= $numberOfRows; $i++) {
                $q = 'q'.$i;
                $useranswer[$i] = $_POST[$q];
            }

            // foreach ($useranswer as $x => $x_value) {
            //     echo "Key=" . $x . ", Value=" . $x_value;
            //     echo "<br>";
            // }

            // foreach ($correctAnswer as $y => $y_value) {
            //     echo "Key=" . $y . ", Value=" . $y_value;
            //     echo "<br>";
            // }

            for($i = 1; $i <= $numberOfRows; $i++) {
                if($useranswer[$i] == $correctAnswer[$i]) {
                    $score++;
                }
            }
            echo "Correct ".$score ." out of ".$numberOfRows;
        ?>
    </div>
</body>
</html>