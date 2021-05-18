<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete-Data</title>
</head>
<body>
    <?php

        $conn = mysqli_connect('localhost','root','','quante-fy');
        if(!$conn)
        {
            echo "you are not connected with server";
        }
        $sql= "DELETE from `form-data` WHERE `form-data`.sno='$_POST[sno]' ";
        if(mysqli_query($conn,$sql))
        {
            echo "Data Delete Sucessfully...";
        } 
        else
        {
            echo "Data Not Deleted";
        }
        echo '
            <form action="display-userdata.php" method="post">
                <input type="submit" value="Back to Form Data">
            </form>
            ';            
    ?>
</body>
</html>