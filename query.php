<!DOCTYPE html>
<html>
<head>
    <title>Database Select</title>
</head>
<body>

 

    <h1>Database Select</h1>
    <?php 

 

    $hostname = "localhost";
    $username = "farhan611";
    $password = "123";
    $dbname = "task";
    
    $conn1 = new mysqli($hostname, $username, $password, $dbname);
    if($conn1->connect_errno) {
        echo "1. Database Connection Failed!...";
        echo "<br>";
        echo $conn1->connect_error;
    }
    else {
        echo "1. Database Connection Successful!";
      echo "<br>";

        $stmt = $conn1->prepare("select name, username, password from user where username = ? && password = ?");
        $stmt->bind_param("ss", $username , $password);
        $username = $_POST['user'];
        $password = $_POST['pass'];
        
        $stmt->execute();
        $result = $stmt->get_result();
        $details = $result->fetch_assoc();

 

        echo "<br>";
        echo "<br>";

                echo "name: " .$details['name'];
                echo "<br>";
                echo "username: " .$details['username'];
                echo "<br>";
                echo "<br>";

 

 }
    $conn1->close();
    ?>

 

</body>
</html>