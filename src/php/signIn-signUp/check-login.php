<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuantE-FY</title>
    <style>
        .userNotFound {
            width: 30%;
            margin: 200px auto;
            padding: 20px 22px;
            color: red;
            background-color: white;
            text-align: center;
            box-shadow: 0px 0px 15px black;
        }
        .userNotFound p {
            font-weight: bolder;
            font-size: 40px;
        }
        .userNotFound a {
            padding: 10px 0px;
            font-size: 20px;
        }
    </style>
</head>
<body style="background: rgb(177, 177, 177);">
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
            $_SESSION['user-type'] = $user;

            if($user == "Admin")
            {
                echo "You Are Admin"."<br>";
                header("Location: http://localhost/QuantE-FY/src/php/users/admin/admin.php");
            }
            else
            {
                if($checkemailis > 0 && $checkpasswordis > 0)
                {
                    echo "You are normal user";
                    header("Location: http://localhost/QuantE-FY/src/php/users/ask2.php");
                }
                else if($checkemailis > 0 && $checkpasswordis == 0)
                {
                    echo "Password Not Matched";
                }
                else{
                    echo "<div class='userNotFound'><p>user not found</p>"."<a href='signup.php'>create new account</a></div>";
                }
            }
        }
    ?>
    
</body>
</html>