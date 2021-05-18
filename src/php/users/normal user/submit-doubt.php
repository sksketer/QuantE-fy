<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .back-btn {
            color: white;
            text-align: center;
        }
        .back-btn a {
            padding: 12px;
            color: white;
            background-color: green;
            text-decoration: none;
        }
    </style>
    <title>Doubt</title>
</head>
<body>
    <br><br><br>
<!-- INSERT INTO `doubt` (`topic`, `question`, `description`, `solution`) VALUES ('number system', 'how to check a number is divisible by 3 or not', ':-)', ''); -->
    <?php
        $servername = "localhost";
        $username = "root";
        $connection_password = "";
        $database = "quante-fy";

        // Create connection
        $conn = mysqli_connect($servername, $username, $connection_password, $database);

        $topic = $_POST['topic'];
        $question = $_POST['question'];
        $descriptyion = $_POST['description'];
        
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }
              else{
                  echo " ";
              }
            
            //   Insert Query
            if($question != "")
            {
                echo "";
                $query="INSERT INTO `doubt` (`topic`, `question`, `description`) 
                        VALUES ('$topic','$question','$descriptyion')";
                $result= mysqli_query($conn, $query);
                
                    if($result) {
                        echo '<div style="color:green; text-align:center;"> Doubt Submitted sucessfully.</div>';
                    } else
                        echo "<div style='color:red; text-align: center; margin: 20px; font-size: larger;'>Error in submission. </div>";
                
            }
            else
            {
                echo "<div style='color:red; text-align: center; margin: 20px; font-size: larger;'>Question is mandatory.</div>";
            }      

    ?>
    <br><br><br>
    <div class="back-btn"><a href="http://localhost/QuantE-FY/src/php/users/ask2.php">Go Back</a></div>
</body>
</html>