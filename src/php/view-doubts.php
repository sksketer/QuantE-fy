<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/view-doubt.css">
    <title>Users Doubs</title>
    <style>
        body{
            background-color: rgb(204, 203, 203);
            width: 80%;
            margin: auto;
        }
        #back-btn a button{
            margin-top: 12px;
            padding: 12px 20px;
            border: 2px solid red;
            background: transparent;
            color: red;
            font-weight: bolder;
            border-radius: 12px;
        }
        #back-btn a button:hover {
            cursor: pointer;
            background: rgb(250, 120, 120);
            color: white;
        }
        .heading {
            text-align: center;
        }
        /* .tdiv {
            display: flex;
            justify-content: center;
        } */
        table tr th, table tr td{
            padding: 10px;
            text-align: left;
            min-width: 200px;
            background: rgb(250, 120, 120);
            box-shadow: inset 0px 0px 8px red;
        }
        #edit-btn {
            outline: none;
            border: none;
            text-align: center;
            background: transparent;
            color: darkblue;
            padding: 5px 12px;
        }
        #edit-btn:hover {
            cursor: pointer;
        }
        #edit-td {
            font-weight: bolder;
            background: white;
        }
        #edit-td:hover {
            color: white;
            background: skyblue;
            box-shadow: inset 0px 0px 8px darkblue;
        }
    </style>
</head>
<body>
    <div id="back-btn"><a href="http://localhost:3000/"><button>Back</button></a></div>
    <h1 class="heading">Welcome to doubt section</h1>
    <?php
        $servername = "localhost"; $username = "root"; $connection_password = ""; $database = "quante-fy";

        $conn = mysqli_connect($servername, $username, $connection_password, $database);
        $sql= 'SELECT * FROM `doubt` WHERE solution != ""';
        $result=mysqli_query($conn,$sql);

        if (mysqli_num_rows ( $result ) > 0) {
            // output data of each row
                $i = 1;
                echo '<div class=""tdiv style="text-align: center;">
                <table style="text-align: center;">
                    <tr>
                        <th style="text-align: center; background: rgb(39, 39, 39); color: white;">Topics &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th style="text-align: center; background: rgb(39, 39, 39); color: white;">Question &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th style="text-align: center; background: rgb(39, 39, 39); color: white;">Description &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th style="text-align: center; background: rgb(39, 39, 39); color: white;">Solution &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th style="text-align: center; background: rgb(39, 39, 39); color: white; min-width: 8px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    </tr>
                ';
                
                while($row=mysqli_fetch_assoc($result)) {
                    // $sol = "";
                    // if($row['solution'] != "") $sol = "V"; else $sol = "X";
                    
                    echo '<td>'.$row['topic'].'</td>';
                    echo '<td>'.$row['question'].'</td>';
                    echo '<td>'.$row['description'].'</td>';
                    echo '<td>'.$row['solution'].'</td>';
                    if($row['solution'] != "") echo '<td style="min-width: 8px; color: green;"> &#10004;</td>'; else echo '<td style="min-width: 8px; color: red;"> &#10008;</td>';
                    echo '</tr>';
                }
                echo '</table> </div>';
            } else {
                echo "0 results";
            }
    ?>
</body>
</html>