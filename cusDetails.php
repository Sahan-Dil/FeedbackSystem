<?php 

include 'config.php';

error_reporting(0);

session_start();



if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $Phone = $_POST['Phone'];
    $de1 = $_POST['de1'];
    $de2 = $_POST['de2'];
    $de3 = $_POST['de3'];
  
  
    
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO cusDetails (email, username, Phone, de1, de2, de3)
                    VALUES ('$email', '$username', '$username','$de1' , '$de2', '$de3')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Wow! Details added.')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Something Wrong Went.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Already Exists.')</script>";
        }
        
}


?>



<html>

<head>
    <meta charset="UTF-8">
    <title>customer details</title>
    <meta name="description" content="Login - Register Template">
    <meta name="author" content="Lorenzo Angelino aka MrLolok">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body {
            background-color: #303641;
        }
    </style>
</head>

<body>
    <div id="container-register">
        <div id="title">
            <i class="material-icons lock">lock</i> Enter Your details...<br>We will contact you soon...
        </div>

        <form>
            <div class="input">


                <div class="input-addon">
                    <i class="material-icons">email</i>
                </div>
                <input id="email" name="email" placeholder="Email" type="email" required class="validate" autocomplete="off">
            </div>


            <div class="clearfix"></div>
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
                <input id="username" name="username" placeholder="Fullname" type="text" required class="validate" autocomplete="off">
            </div>




            <div class="clearfix"></div>
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons"></i>
                </div>
                <input id="Phone" name="Phone" placeholder="   Phone" type="text" required class="validate" autocomplete="off">
            </div>

             <div class="clearfix"></div>
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons"></i>
                </div>
                <input id="de1" name="de1" placeholder="   Are you satisfied with our service" type="text" required class="validate" autocomplete="off">
            </div>

             <div class="clearfix"></div>
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons"></i>
                </div>
                <input id="de2" name="de2" placeholder="   Enter your problem" type="text" required class="validate" autocomplete="off">
            </div>

            <div class="clearfix"></div>
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons"></i>
                </div>
                <input id="de3" name="de3" placeholder="   Enter your Feedback" type="text" required class="validate" autocomplete="off">
            </div>


           


            <div class="remember-me">
                <input type="checkbox">
                <span style="color: #DDD">I accept Terms of Service</span>
            </div>

            <input type="submit" name="submit" value="submit" />
        </form>

    </div>
</body>

</html>