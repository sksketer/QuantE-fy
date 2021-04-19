<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuantE-FY</title>
    <style>
        .body{
           background-color: rgb(35,36,41);
        }
        .logout{
            position: relative;
        }
        .logout-btn{
            background: transparent; border: none; margin-left:8px; cursor: pointer; color: red;
        }
        .logout-content{
            display: none;
            padding: 5px;
            height: auto;
            margin: 3px auto;
            background: transparent;
            position: absolute;
            top: 18px; 
        }
        .logout-content a{
            background-color: red;
            border-radius: 20px;
            padding:  3px 10px;
        }
        .logout-content .mail{
            position: absolute;
            padding-top: 8px;
            left: -60px;
            color: red;
            font-weight: bold;
        }
        .show{
            display: block;
        }
    </style>
</head>
<body>
    <!-- <?php
   echo '
       <form action="../index.html" method="post">
           <input type="submit" value="Back to Registration Form">
       </form>
           ';
   ?> -->
    <!-- For check login email and password -->
    <?php
        $servername = "localhost";
        $username = "root";
        $connection_password = "";
        $database = "quante-fy";

        // Create connection
        $conn = mysqli_connect($servername, $username, $connection_password, $database);

        $sql= "SELECT fname,lname,email,password,userType FROM `form-data`";
        $result=mysqli_query($conn,$sql); 

        // $admin_email="ksamrit121@gmail.com";
        // $admin_pasword="IamAdmin";

        // for check number of row in table
        // echo "<br>"."Number of Row in Table are : ";
        // $cnt = mysqli_num_rows ( $result );
        // echo $cnt."<br>";

        $email = $_POST["email"]; 
        $password = $_POST["password"]; 
        $checkemailis=$checkpasswordis=0;
        $display_name=$display_surname=$user="";
        
        if(isset($_POST["email"], $_POST["password"])) 
        {
            while($row=mysqli_fetch_assoc($result))
            {
                if($row['email'] == $email)
                {
                    $checkemailis++;
                    if($row['password'] == $password)
                    {
                        $checkpasswordis++;
                        $display_name=$row['fname'];
                        $display_surname=$row['lname'];
                        $user = $row['userType'];
                    }
                    // else{
                    //     echo "Password is wrong";
                    // }
                }
            }
            session_start();
            $_SESSION['fname'] = $display_name;
            $_SESSION['lname'] = $display_surname;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;

            // if($email == $admin_email && $password == $admin_pasword )
            if($user == "Admin")
            {
                // header("Location: http://localhost/online%20meal/php/admin.php");
                echo "You Are Admin"."<br>";
                echo $user;
            }
            else
            {
                if($checkemailis > 0 && $checkpasswordis > 0)
                {
                    echo "You are normal user";
                    header("Location: http://localhost/QuantE-FY/src/php/ask2.php");
                }
                else if($checkemailis > 0 && $checkpasswordis == 0)
                {
                    echo "Password Not Matched";
                }
                else{
                    echo "user not found"."<br>"; echo "<a href='signup.php'>create new account</a>";
                }
            }
        }
    ?>
    
</body>
</html>