<!--conn.php file-->
<?php

$dbServername = "localhost"; //xampp
$dbUsername = "root";
$dsPassword = "";
$dbName = "databasename";

$conn = mysqli_connect($dbServername, $dbUsername,$dsPassword, $dbName );

?>

<!--index file-->

<?php
    include_once 'includes/conn.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>


<?php
    $sql = "SELECT * FROM MENU;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)){
        echo $row['Day'];
        }
    }


?>

</body>
</html>