<!DOCTYPE html>
<html>
<head>
    <title>Data Insert</title>
</head>
<body>

 <h1 style="  text-align:center; ;font-size : 20px;">
     <?php 

    $hostname = "localhost";
    $username = "farhan611";
    $password = "123";
    $dbname = "task";
    // Mysqli Procedural
    $conn = mysqli_connect($hostname, $username, $password, $dbname);
    if(mysqli_connect_error()) {
        echo " Failed  Connection";
        echo "<br>";
        echo mysqli_connect_error();
    }
    else {
        echo "Connection Successful <br>";
 
 
         $stmt = mysqli_prepare($conn, "insert into user (name,email,dob,gender,username,password) values (?, ?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "ssssss", $name,  $email , $dob , $gender ,$username, $password);
        $name= $_POST['name'];
       $email= $_POST['email'];
         $dob = $_POST['dob'];
       $gender = $_POST['gender'];
       $username = $_POST['username'];
       $password = $_POST['pass'];
        $result = mysqli_stmt_execute($stmt);

        if($result) {
            echo "Data Insert Successful";


        }
        else {
            echo " Data Insert Failed";
            echo "<br>";
            echo $conn->error;
        }
    }

    mysqli_close($conn);
    ?>
</h1>
</body>
</html>