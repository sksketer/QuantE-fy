<?php
    $servername = "localhost"; $username = "root"; $connection_password = ""; $database = "quante-fy";

    $conn = mysqli_connect($servername, $username, $connection_password, $database);

    $sno = $_POST['sno'];
    $solution = $_POST['solution'];
    if($solution != "") {
        $solQuery="UPDATE `doubt` SET `solution` = '$solution' WHERE `doubt`.`sno` = '$sno'";
        $solResult= mysqli_query($conn, $solQuery);
        
            if($solResult) {
                header("Location: http://localhost/QuantE-FY/src/php/users/admin/view-doubts.php");
                echo '<div style="color:green; text-align:center;"> solution Submitted sucessfully.</div>';
            } else
                echo "<div style='color:red; text-align: center; margin: 20px; font-size: larger;'>Error in submission. </div>";
    }
    else
    {
        echo "<div style='color:red; text-align: center; margin: 20px; font-size: larger;'>Solution is mandatory.</div>";
    }

?>