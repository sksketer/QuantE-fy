<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    /* MAIN START */
    .info{
            text-align: center;
            align-items: center;
            margin: 10px auto;
        }
        .info label{
            color: red;
        }
        .table {
            margin: auto;
            border: 2px solid black;
            padding: 5px;
            /* background-color: gray; */
        }

        .table tr,
        .table td {
            border: 1px solid black;
            padding: 8px;
        }

        form .table tr td label {
            float: right;
            color: black;
            font-size: 300;
            font-weight: bolder;
        }

        form .table tr input{
            padding: 3px;
            color:black;
            border: none;
            border-bottom: 1px solid black;

        }
        form .table tr input:active {
            box-shadow: 0px 0px 5px skyblue;
            border: none;
        }
        form .table tr td input .radio
        {
            color: black;
            font-size: 300;
            font-weight: bolder;
        }
        form .table tr input:hover{
            background-color: white;
            box-shadow: 0px 0px 5px skyblue;
        }

        .c-red {
            color: red;
        }
        form table tr td .r-sr{
            padding: 8px;
            color: red;
            font-size: 300;
            border-radius: 5px;
            margin: 0px 20px;
        }
        
/* MAIN END */
    </style>
</head>
<body>
<div class="_containt" id="_containt">
    <!-- MAIN START -->
    <?php
        $fname=$lname=$email=$password=$cpassword=$dob=$gender="";
        $fname_err=$lname_err=$email_err=$password_err=$cpassword_err=$dob_err=$gender_err="";
        $cpassword_status="";
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            if(empty($_POST['fname']))
		    {
		    	$fname_err="Required Field";
		    }
		    else
		    {
		    	$fname=$_POST['fname'];
            }
            if(empty($_POST['lname']))
		    {
		    	$lname_err=" I SK";
		    }
		    else
		    {
		    	$lname=$_POST['lname'];
            }
            if(empty($_POST['email']))
		    {
		    	$email_err="valid Email is Required";
		    }
		    else
		    {
		    	$email=$_POST['email'];
            }
            if(empty($_POST['password']))
		    {
		    	$password_err="Password Required";
		    }
		    else
		    {
                $password=$_POST['password'];
            }
            if(empty($_POST['cpassword']))
		    {
		    	$cpassword_err="Password Not Matched";
		    }
		    else
		    {
		    	$cpassword=$_POST['cpassword'];
            }
            if(empty($_POST['dob']))
		    {
		    	$dob_err="Required Field";
		    }
		    else
		    {
		    	$dob=$_POST['dob'];
            }
            if(empty($_POST['gender']))
		    {
		    	$gender_err="Choose Gender";
		    }
		    else
		    {
		    	$gender=$_POST['gender'];
            }
            
        }
    ?>
    <div class="main2" id="main2">
        <div class="info"><label>* means compulsary</label></div>
        <form action="" method="post" class="form">
            <table class="table">
                <tr>
                    <td><label for="">First Name<span class="c-red">*</span></label></td>
                    <td> <input type="text" name="fname" id=""><span class="c-red"> <?php echo "$fname_err";?></span> </td>
                </tr>
                <tr>
                    <td> <label for="">Last Name</label> </td>
                    <td> <input type="text" name="lname" id=""> <span class="c-red"> <?php echo " ";?></span></td>
                </tr>
                <tr>
                    <td> <label for="">Email<span class="c-red">*</span></label></td>
                    <td> <input type="email" name="email" id=""><span class="c-red"> <?php echo "$email_err";?></span></td>
                </tr>
                <tr>
                    <td> <label for="">Password<span class="c-red">*</span></label></td>
                    <td> <input type="password" name="password" id=""> <span class="c-red"> <?php echo "$password_err";?></span></td>
                </tr>
                <tr>
                    <td> <label for="">Confirm Password<span class="c-red">*</span></label></td>
                    <td> <input type="password" name="cpassword" id="">
                    <?php
                        if(empty($_POST['cpassword']))
                        {
                            echo '<span style="color:red;">'.$cpassword_err.'</span>';
                        }
                        else
                        {
                            if($_POST['cpassword'] == $_POST['password'])
                            {
                                echo '<span style="color:green;">&#10004;</span>';
                            }
                            else
                            {
                                echo '<span style="color:red;">&#10006;</span>';
                            }
                        }
                    ?></td>
                </tr>
                <tr>
                    <td> <label for="">Date of Birth<span class="c-red">*</span></label></td>
                    <td> <input type="date" name="dob" id=""><span class="c-red"> <?php echo "$dob_err";?></span></td>
                </tr>
                <tr>
                    <td> <label for="">Gender<span class="c-red">*</span></label></td>
                    <td><input type="radio" name="gender" value="Male" class="radio"><span style="color: black;">Male</span>
                        <input type="radio" name="gender" value="Female" class="radio"><span style="color: black;">Female</span>
                        <input type="radio" name="gender" value="other" class="radio"><span style="color: black;">other</span><span class="c-red"> <?php echo "$gender_err";?></span></td>
                </tr>
                <!-- <tr>
                    <td> <label for="">Images<span class="c-red">&nbsp;</span></label></td>
                    <td> <input type="file" name="img" id=""></td>
                </tr> -->
                <tr>
                    <td><input type="submit" name="submit" value="Submit" class="r-sr" style="float: right;" onclick="hide()"></td>
                    <td>
                        <input type="reset" name="reset" value="Reset" class="r-sr"></td>
                </tr>
                <tr>
                    <td style="border:none; margin: auto;" >
                        <a href='login.html'>Already have an Account?</a>
                    </td>
                </tr>
            </table>

        </form>
    </div>

    <?php 
        $servername = "localhost";
        $username = "root";
        $connection_password = "";
        $database = "quante-fy";

        // Create connection
        $conn = mysqli_connect($servername, $username, $connection_password, $database);

        // Check connection
        if(isset($_POST['submit']))
        {
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }
              else{
                  echo " ";
              }
            
            //   Insert Query
            if($fname != "" && $email != "" && $password != "" && $dob != "" && $gender !="")
            {
                echo "";
                $query="INSERT INTO `form-data` (`fname`, `lname`, `email`, `password`, `dob`, `gender`) 
                        VALUES ('$fname','$lname','$email','$password','$dob','$gender')";
                $result= mysqli_query($conn, $query);
                if(isset($_POST['submit']))
                {
                    if($result) {
                        // <script> document.getElementByID('main2').style.display= 'none'</script>
                        echo "Regestration completed"."&nbsp;";
                        echo "You Need To sign-IN";
                        echo '<a href="login.html">Sign IN</a>';
                    } else
                        echo "Error in Regestration. ";
                }
            }
            else
            {
                echo "Error";
            }
        }
    ?>

</body>
</html>

