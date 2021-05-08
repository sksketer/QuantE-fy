<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/doubt.css">
    <title>Doubt section</title>
</head>
<body>
    <?php
        session_start();
        $fname = $_SESSION['fname'];
        $lname = $_SESSION['lname'];
    ?>
    <div class="container">
       <div class="nav">
            <a href="http://localhost/QuantE-FY/src/php/ask2.php"><span id="back-btn">go back</span></a>
            <span id="text">Welcome to Doubt section</span>
            <a>
                <span id="logout-btn" class="myDiv"><?php echo $fname."-".$lname; ?></span> <br>
                <!-- <span id="logout" class="hide">name</span> -->
            </a>
       </div>
       <div class="main">
            <form action="user/submit-doubt.php" method="post">
                <label for="">Topic Name</label> <br> <br>
                <input type="topic" name="topic" id="area" placeholder="Topic name"> <br> <br>
                <label for="">Question</label> <br> <br>
                <textarea name="question" id="area" cols="80" rows="10" placeholder="Question"></textarea> <br> <br>
                <label for="">Description</label> <br> <br>
                <textarea name="description" id="area" cols="80" rows="5" placeholder="Description"></textarea> <br> <br>
                <input type="submit" value="submit" id="save-btn">
            </form>
       </div>
    </div>
    
</body>
</html>