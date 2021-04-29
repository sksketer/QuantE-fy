<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <title>Admin QuantE-FY</title>
</head>
<body>
<!-- 
    --  update query  --
    UPDATE `form-data` SET `userType` = 'Admin' WHERE `form-data`.`fname` = 'user name' ;
 -->
    <?php
        session_start();
        $fname = $_SESSION['fname'];
        $lname = $_SESSION['lname'];
        $email = $_SESSION['email'];
        if($fname == "" && $lname == "") {
            echo '<div style="text-align: center; font-size: 40px; color: red;">You Need to login first</div>';
            sleep(3);
            header("Location: http://localhost/QuantE-FY/src/php/login.html");
        }
    ?>
    
    <div class="nav">
        <div class="logo">L7L7L7L7L7L7L7</div>
        <div class="mid">Admin Module</div>
        <div class="links">
            <ul class="log">
                <li style="list-style: none; color:red;"><?php echo $fname."-".$lname;?></li>
                <li style="list-style: none;"><a href="http://localhost/QuantE-FY/src/php/sessionout.php">Log-out</a></li>
            </ul>
        </div>
    </div>
    <div class="main">
        <div class="left">
            <div class="content">
                <p class="login">
                    <a href="http://localhost/QuantE-FY/src/php/display-userdata.php">View LogIN's</a>
                </p>
                <p class="doubt">
                    <a href="">View Doubts</a>
                </p>
            </div>
        </div>
        <div class="right">
            <p>Add Question to Quiz</p>
            <form action="">
                <textarea name="question" class="data1" cols=65" rows="10" placeholder="Question"></textarea> <br>
                <input type="text" name="option1" class="data" placeholder="option"> <br>
                <input type="text" name="option2" class="data" placeholder="option"> <br>
                <input type="text" name="option3" class="data" placeholder="option"> <br>
                <input type="text" name="option4" class="data" placeholder="option"> <br>
                <input type="text" name="answer" class="data" placeholder="Correct Answer"> <br>
                <input type="submit" value="ADD" class="data7">
            </form>
        </div>
    </div>
    
</body>
</html>