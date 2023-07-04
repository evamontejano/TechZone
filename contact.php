<?php
// Start the session
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'register_db');

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $plan = $_POST['plan'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    $insert = "INSERT INTO `contact_db`.`contact_form` (`name`, `email`, `number`, `plan`, `address`, `message`) VALUES ('$name','$email','$number','$plan','$address','$message')";

    mysqli_query($conn, $insert);

    header('location:contact.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container">
        <?php @include 'header.php'; ?>

        <section class="contact">
            <h1 class="heading"> Pay a course</h1>

            <form action="" method="post">

                <div class="flex">
                    <div class="inputBox">
                        <span>your name:</span>
                        <input type="text" placeholder="enter your name" name="name" required>
                    </div>
                    <div class="inputBox">
                        <span>your email:</span>
                        <input type="email" placeholder="enter your email" name="email" required>
                    </div>
                    <div class="inputBox">
                        <span>your number:</span>
                        <input type="number" placeholder="enter your number" name="number" required>
                    </div>
                    <div class="inputBox">
                        <span>choose plan: </span>
                        <select name="plan">
                            <option value="basic">basic plan</option>
                            <option value="standard">standard plan</option>
                            <option value="premium">premium plan</option>
                        </select>
                    </div>
                    <div class="inputBox">
                        <span>your address:</span>
                        <textarea name="address" placeholder="enter your address:" required cols="30"
                            rows="10"></textarea>
                    </div>
                    <div class="inputBox">
                        <span>your message:</span>
                        <textarea name="message" placeholder="enter your message:" required cols="30"
                            rows="10"></textarea>
                    </div>
                </div>

                <input type="submit" value="pay" name="send" class="btn">
            </form>
        </section>


        <?php @include 'footer.php'; ?>
    </div>


    <!--swiper js link--->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- Custom JS file link -->
    <script src="script.js"></script>

    <?php
    // Retrieve username and email from the session variables
    $username = $_SESSION['username'] ?? '';
    $email = $_SESSION['email'] ?? '';

    // Unset the session variables and destroy the session
 
    session_destroy();
    ?>

    <script>
        // Populate the form fields with the retrieved username and email
        document.querySelector('input[name="name"]').value = "<?php echo $username; ?>";
        document.querySelector('input[name="email"]').value = "<?php echo $email; ?>";
    </script>

</body>

</html>
