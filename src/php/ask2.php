<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ask.css">
    <title>QuantE-FY</title>
    <style>        
        .ask .logout {
            position: absolute;
            right: 15px;
            top: 10px;
            display: inline;
        }
        .ask .logout:hover {
            border-bottom: 1px solid red;
        }
        .ask .logout a {
            color: red;
            text-decoration: none;
        }
        .ask{
            position: relative;
        }
    </style>
</head>
<body>
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
    <div class="ask">
        <div class="logout"><a href="http://localhost/QuantE-FY/src/php/sessionout.php">Log-out</a></div>
        <h2>Hello, <?php echo $fname; ?></h2>
        <p>
            <a href="http://localhost/QuantE-FY/src/php/user/quiz.php">Attemp Quiz</a>
        </p> 
        <p>
            <a href="http://localhost/QuantE-FY/src/php/doubt.php">Query in any topics.</a>
        </p>
    </div>
</body>
</html>