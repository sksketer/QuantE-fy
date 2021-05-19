<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user-data.css">
    <title>User-data</title>
    <style>
        body {
            background-color: rgb(214, 248, 214);
        }
        .container {
            text-align: center;
        }
        .container .no_of_row {
            font-weight: bolder;
            text-decoration: underline;
        }
        #back-btn {
            margin-top: 12px;
            padding: 12px 20px;
            border: 2px solid green;
            background: transparent;
            color: green;
            font-weight: bolder;
            border-radius: 12px;
        }
        #back-btn:hover {
            cursor: pointer;
            background: green;
            color: white;
        }
        .table {
            margin: 25px auto;
            box-shadow: 0px 0px 15px green, 0px 0px 3px black;
        }
        .table th{
            background: darkgreen;
            color: white;
            padding: 8px 12px;
        }
        .table td {
            padding: 0px 15px;
            background-color: lightgreen;
        }
        #del-btn {
            outline: none;
            border: none;
            text-align: center;
            background: transparent;
            color: darkgreen;
            font-weight: bold;
            padding: 5px 12px;
        }
        #del-btn:hover {
            cursor: pointer;
            color: white;
            background: darkgreen;
        }
        #del-td {
            font-weight: bolder;
            background: lightgreen;
            padding: 0px;
        }
        #del-td:hover {
            color: white;
            background: white;
            box-shadow: inset 0px 0px 8px darkblue;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "quante-fy";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql1 = "SELECT * FROM `form-data`";
        $result1 = mysqli_query($conn,$sql1);

        
        echo '
            <form action="admin.php" method="post">
                <input type="submit" value="Back to Admin page" id="back-btn">
            </form>
                ';

        echo '<br><br><div class="no_of_row">Total users are : ';
        $cnt = mysqli_num_rows ( $result1 );
        echo $cnt."<div><br>";

        echo "
            <table class='table'>
                <tr>
                    <th>Sno.</th>
                    <th>First Name</th>
                    <th>Last NAME</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>User Type</th>
                    <th></th>
                </tr>
            ";

        while($row1 = mysqli_fetch_assoc($result1) ) {
            echo '<tr><form action="delete-data.php" method="post">';
            echo '<th>'.$row1['sno'].'</th>';
            echo '<td>'.$row1['fname'].'</td>';
            echo '<td>'.$row1['lname'].'</td>';
            echo '<td>'.$row1['email'].'</td>';
            echo '<td>'.$row1['password'].'</td>';
            echo '<td>'.$row1['dob'].'</td>';
            echo '<td>'.$row1['gender'].'</td>';
            echo '<td>'.$row1['userType'].'</td>';
            // echo '<td><input type=text name=id value= '.$row['name'].'></td>';
            // echo '<td><input type=text name=lname value= '.$row['lname'].'></td>';
            // echo '<td><input type=text name=email value= '.$row['email'].'></td>';
            // echo '<td><input type=text name=password value= '.$row['password'].'></td>';
            // echo '<td><input type=text name=dob value= '.$row['dob'].'></td>';
            // echo '<td><input type=text name=gender value= '.$row['gender'].'></td>';
            echo '<input type="hidden" value='.$row1['sno'].' name="sno">';
            echo '<td id="del-td"><input type="submit" name="delete" value="Delete" id="del-btn"></td>';
            echo '</form></tr>';
        }
    ?>
    </div>
</body>
</html>