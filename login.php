<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
   <!-- custom css file link -->
   <link rel="stylesheet" href="style2.css">
</head>
<body>
   <div class="box">
      <span class="borderLine"></span>
      <form method="post" action="login.php"> <!-- Updated: Added action attribute -->
         <h2>Sign in</h2>
         <div class="inputBox">
            <input type="text" name="username" required="required">
            <span>Username</span>
            <i></i>
         </div>
         <div class="inputBox">
            <input type="password" name="password" required="required">
            <span>Password</span>
            <i></i>
         </div>
         <div class="link">
            <a href="register.php">Register here</a>
         </div>
         <br>
         <input type="submit" value="Login">
      </form>
   </div> 
   <?php

   
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // Retrieve form data
   $username = $_POST['username'];
   $password = $_POST['password'];

   // Create a connection to the MySQL database
   $servername = "localhost";  // Replace with your MySQL server name
   $username_db = "root";  // Replace with your MySQL username
   $password_db = "";  // Replace with your MySQL password
   $dbname = "register_db";  // Replace with your database name


   $conn = new mysqli($servername, $username_db, $password_db, $dbname);
   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
   }

   // Prepare and execute the SQL statement to retrieve user data
   $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
   $stmt->bind_param("s", $username);
   $stmt->execute();

   // Get the result of the query
   $result = $stmt->get_result();

   // Check if a matching user is found
   if ($result->num_rows == 1) {
      // User found, perform further actions as needed
      $row = $result->fetch_assoc();
      $storedPassword = $row['password'];


      // Verify the password
      if ($password === $storedPassword) {
        $email = $row['email'];
        
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
    

         // Password is correct, login successful
         // Perform further actions or redirect to a dashboard page
         header("Location: home.php");
         exit;
      } else {
         // Password is incorrect
         echo "Invalid password.";
      }
   } else {
      // No matching user found
      echo "Invalid username.";
   }

   // Close the statement and database connection
   $stmt->close();
   $conn->close();
}
?>

</body>
</html>
