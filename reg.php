<!DOCTYPE html>
<html>
<head>
    <title>Registration form</title>
</head>
<body>

    <h1>Registration form</h1>
    <hr>
    <br>

 
    
    <form action="connection.php"   method="POST">

        
        <label for="name">Enter Your Name:</label>
        <input type="text" name="name" id="name" required>

        <br>
        <br>

          <label for="email">Email Address:</label>
          <input type="email" id="email" name="email" required>
        <br>
        <br>
        <label for="dob">Date of Birth: </label>
       <input type="date" id="dob" name="dob"
       value="2021-03-03">

      <br>
      <br>

        <label for="gender">Gender</label>
        <input type="radio" name="gender" id="male" value="male" required>
        <label for="male">Male</label>

        <input type="radio" name="gender" id="female" value="female" required>
        <label for="female">Female</label>

        <br>
        <br>
        <label for="username">User Name:</label>
        <input type="text" name="username" id="username" required>

        <br>
        <br>

        <label for="pass">Password</label>
        <input type="password" id="pass" name="pass" required>
        <br>
        <br>

         <input type="submit" value="Submit">

 </form>

 </body>
</html>