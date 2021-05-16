<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add-Data</title>
    <style>
    .container .bact-btn {
        text-align: center;
        margin: 22px auto;
    }
    .container .back-btn a {
        color: red;
        display: inline;
        text-align: center;
        padding: 10px 18px;
        border-radius: 20px;
        font-weight: bolder;
        border: 3px solid red;
        text-decoration: none;
        background-color: transparent;
    }
    .container .back-btn a:hover {
        cursor: pointer;
        color: white;
        background-color: red;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="back-btn"> <a href="http://localhost/QuantE-FY/src/php/users/admin/admin.php">Go Back</a> </div>
        <?php
            $servername = "localhost";
            $username = "root";
            $connection_password = "";
            $database = "quante-fy";
    
            $conn = mysqli_connect($servername, $username, $connection_password, $database);   
            
            $select = "SELECT sno FROM `quiz-question`";
            $selectResult=mysqli_query($conn,$select); 

            $sno = mysqli_num_rows ( $selectResult ) + 1;
            
            $question = $_POST['question'];
            $option1 = $_POST['option1'];
            $option2 = $_POST['option2'];
            $option3 = $_POST['option3'];
            $option4 = $_POST['option4'];
            $correctAnswer = $_POST['answer'];
            $difficulty = $_POST['difficulty'];
            $topic = $_POST['topic'];

            if($difficulty == "") $difficulty = "Medium";
            if($topic == "") $topic = "unknown";

            echo $question." ".$option1." ".$option2." ".$option3." ".$option4." ".$correctAnswer." ".$difficulty." ".$topic." ";

            if($question != "" && $option1 != "" && $correctAnswer != "")
            {
                echo "";
                $query = "INSERT INTO `quiz-question` (`sno`,`question`, `option1`, `option2`, `option3`, `option4`, `answer`, `difficulty`, `topic`) 
                            VALUES ('$sno','$question', '$option1', '$option2', '$option3', '$option4', '$correctAnswer', '$difficulty', '$topic')";

                $result= mysqli_query($conn, $query);

                if($result)
                    header("Location: http://localhost/QuantE-FY/src/php/users/admin/admin.php");
                else
                    echo "<div style='color:red; text-align: center; margin: 20px; font-size: larger;'>Error in Subbmission. </div>";
                
            }
            else {
                echo "<div style='color:red; text-align: center;'>
                        <p>Question can't be null.</p>
                        <p>There should be atleas on option.</p>
                        <p>You must provide correct Answer for this question.</p>
                      </div>";
            }
        ?>

    </div>
</body>
</html>