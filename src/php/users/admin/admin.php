<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/admin.css">
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
            header("Location: http://localhost/QuantE-FY/src/php/signIn-signUp/login.html");
        }
    ?>
    
    <div class="nav">
        <div class="logo"> <img src="../../../img/logo.png" alt="Image not found" width="100px"></div>
        <div class="mid">User: <u><?php echo $fname." ".$lname;?> </u><span id="adminText">(Admin)</span></div>
        <div class="links">
            <a href="http://localhost/QuantE-FY/src/php/sessionout.php">Log-out</a>
        </div>
    </div>
    <div class="main">
        <div class="left">
            <div class="content">
                <p class="login">
                    <a href="http://localhost/QuantE-FY/src/php/users/admin/display-userdata.php">View LogIN's</a>
                </p>
                <p class="doubt">
                    <a href="http://localhost/QuantE-FY/src/php/users/admin/view-doubts.php">View Doubts</a>
                </p>
            </div>
        </div>
        <div class="right">
            <p>Add Question to Quiz</p>
            <form action="add-data.php" method="post">
                <input type="text" name="topic" class="data" placeholder="Topic"> <br>
                <input list="listItems" name="difficulty" class="data" placeholder="Difficulty" autocomplete="off"> 
                <datalist id="listItems">
                    <option value="Easy">
                    <option value="Medium">
                    <option value="Hard">
                </datalist> <br>
                <!-- <div class="radio">
                    <label id="mid-text">Difficulty level</label>
                    <input type="radio" name="difficulty" class="data" id="radio" value="Easy">Easy 
                    <input type="radio" name="difficulty" class="data" id="radio" value="Medium">Medium 
                    <input type="radio" name="difficulty" class="data" id="radio" value="Hard">Hard 
                </div> <br> -->
                <textarea name="question" class="data1" cols="65" rows="10" placeholder="Question" required required autocomplete="off"></textarea> <br>
                <input type="text" name="option1" class="data" placeholder="option1" required autocomplete="off" required> <br>
                <input type="text" name="option2" class="data" placeholder="option2" required autocomplete="off"> <br>
                <input type="text" name="option3" class="data" placeholder="option3" required autocomplete="off"> <br>
                <input type="text" name="option4" class="data" placeholder="option4" required autocomplete="off"> <br>
                <input list="listOption" name="answer" class="data" placeholder="Correct Option" required autocomplete="off">
                <datalist id="listOption">
                    <option value="option1">
                    <option value="option2">
                    <option value="option3">
                    <option value="option4">
                </datalist> <br>
                <!-- <input type="text" name="answer" class="data" placeholder="Correct Option" required> <br> -->
                <input type="submit" value="ADD" class="data7">
            </form>
        </div>
    </div>
    
</body>
</html>