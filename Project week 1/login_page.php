<?php
session_start();

// define variables and set to empty values
$emailErr = $passwordErr = "";
$email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    
    if (empty($_POST["email"])) 
    {
        $emailErr = "Email is required";
    } 
    else 
    {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["password"])) 
    {
        $passwordErr = "password is required";
    } 
    else 
    {
        $password = test_input($_POST["password"]);
        // check if password syntax is valid
        if (!preg_match("/^[a-zA-Z0-9]*$/",$password)) 
        {
            $passwordErr = "Invalid password";
        }
    }     
    
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;

    if (!empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["password-repeat"]))
    {
        header("location: DB\signup.php");
        exit();
    }
  
}

function test_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="CSS/signup.css">

    <title>Eindopdracht</title>
</head>
<body>
  
    <div class="content">
    
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="container">
                <h1>Login</h1>

                <label for="email">Email</label>
                <input type="email" placeholder="Enter Email" name="email" required>

                <label for="psw">Password</label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <button type="submit" class="registerbtn">Login</button>
            </div>

               
            <div class="container login">
                <p>Don't have an account? <a href="signup_page.php">Sign up</a>.</p>
            </div>

        </form>

    </div>

</body>
</html>