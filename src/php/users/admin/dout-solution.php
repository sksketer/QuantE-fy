<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/solve-doubt.css">
    <title>solution</title>
</head>
<body>
    <h1 id="main-heading"> Solve Doubt </h1>
    <?php
        $servername = "localhost"; $username = "root"; $connection_password = ""; $database = "quante-fy";

        $conn = mysqli_connect($servername, $username, $connection_password, $database);

        $sno = $_POST['sno'];
        $sql= "SELECT * FROM `doubt` WHERE sno = $sno";
        $result=mysqli_query($conn,$sql);
        
        while($row=mysqli_fetch_assoc($result)) {
            echo '
                <div class="form">
                    <form action="submit-solution.php" method="post" id="form">
                        <p class="topic">'.$row['topic'].'</p>
                        <p class="question">'.$row['question'].'</p>
                        <textarea name="solution" id="solution" cols="30" rows="10"></textarea> <br>
                        <input type="hidden" name="sno" value="'.$sno.'">
                        <input type="submit" name="save" value="save" id="save-btn">
                    </form>
                </div>
            ';
        }
    ?>
    
</body>
</html>