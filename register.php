<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>
   <!-- custom css file link -->
   <link rel="stylesheet" href="style2.css">
</head>
<body>
   <div class="box">
      <span class="borderLine"></span>
      <form method="post" action="register.php"> <!-- Updated: Added method and action attributes -->
         <h2>Register</h2>
         <div class="inputBox">
            <input type="text" name="username" required="required"> <!-- Added name attribute for form data -->
            <span>Username</span>
            <i></i>
         </div>
         <div class="inputBox">
            <input type="text" name="email" required="required"> <!-- Added name attribute for form data -->
            <span>Email</span>
            <i></i>
         </div>
         <div class="inputBox">
            <input type="password" name="password" required="required"> <!-- Added name attribute for form data -->
            <span>Password</span>
            <i></i>
         </div>
         <div class="link">
            <a href="login.php">Sign In</a>
         </div>
         <br>
         <input type="submit" value="Register">
      </form>
   </div> 
   <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // Retrieve form data
   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = $_POST['password'];

   // Validate that the username is not empty
   if (empty($username)) {
      echo "Error: Username is required.";
      exit;
   }

   // Create a connection to the MySQL database
   $servername = "localhost";  // Replace with your MySQL server name
   $username_db = "root";  // Replace with your MySQL username
   $password_db = "";  // Replace with your MySQL password
   $dbname = "register_db";  // Replace with your database name

   $conn = new mysqli($servername, $username_db, $password_db, $dbname);
   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
   }

   session_start();
$_SESSION['username'] = $username;
$_SESSION['email'] = $email ;

   // Prepare and execute the SQL statement to insert the user data
   $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
   $stmt->bind_param("sss", $username, $email, $password);
   $stmt->execute();

   // Close the statement and database connection
   $stmt->close();
   $conn->close();
}
?>


</body>
</html>
