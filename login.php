<?php
// session_start();
$servername = "localhost";
$username = "root";
$password = "123456";
$db = "ginger";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
"</br>";

//submission   

if(isset($_POST['submit'])){
    $mail = $_POST['email'];
    $password = $_POST['password'];

    $email_search = " select * from form where email= '$mail' ";
    $query = mysqli_query($conn,$email_search);

   $email_count = mysqli_num_rows($query);
    
    if($email_count>0){
        $email_pass = mysqli_fetch_assoc($query);

        $dbpass = $email_pass["password"];

        // $pass_decode = password_verify($password,$dbpass);

        if($dbpass == $password){
                // header('location:home.php');
                echo "login successful";
                ?>
                <script>
                    location.replace("home.php");
                </script>

                <?php

                // header('location:home.php');
        }
        else{
            echo "password incorrect";
           
        }
    } else{
        echo "Invalid Email";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        h1{
            /* background-color:; */
            color: coral;
            width: 30%;
            margin: auto;
            margin: right 1px;
          
        }
        img{
            width: 200px;
            height: 200px;
            margin-top: auto;
          
           
        }fieldset{
            border:black
            width= 400px;
            margin:auto;
        }
        body{
            background-image: url(https://i0.wp.com/academiamag.com/wp-content/uploads/2022/05/shutterstock_1664708983.jpg?fit=860%2C573&ssl=1);
        }
        .id{
            background-color: rgb(189, 218, 183);
            width: 50%;
            margin: auto;
            
        }

        
    </style>
</head>
<body>
        <form class="id" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST"> 
    <fieldset style="width: 100;">
    <!-- <img src="https://i0.wp.com/academiamag.com/wp-content/uploads/2022/05/shutterstock_1664708983.jpg?fit=860%2C573&ssl=1" alt="exam" -->
    <!-- style="width: 100%;height: 100;"> -->
    <!-- <fieldset style="width: 50%;"> -->
        

    <h1>Login Page</h1>
    <div style="text-align: center;">
    <img src="https://images.yourstory.com/cs/images/companies/ginger-webs-assessment-solution-logo-1647005129611.jpg" alt="gingerwebs">
    
    <p><strong>CANDIDATE LOGIN</strong></p>   

</div>
<div style="text-align: center;">

   


<label class for="email"><strong>Email:</strong></label>
<input id="email" placeholder="Enter your email: " type="email" name="email"> <br/>
<br>
<br>
<label for="pass"><strong>Password:</strong></label>
<input type ="password" id="pass" placeholder="Please enter your password" name="password">
<br/>
<br/>
<input type="submit" value="Submit" name="submit">
</div>


</fieldset>
</form>
</body>
</html>

