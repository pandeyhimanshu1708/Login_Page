<style>

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;

}

/* for header styling */

a {
    text-decoration: none;
    color: white;
}

body {
    background-color: #f5f5e8;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

header {
    background-color: #8787e7;
    display: flex;
    justify-content: center;
    align-items: center;
    align-items: center;

}

header div {
    padding: 20px;
}

</style>


<header>

    <div><a href="index.php">Home</a></div>

    <div><a href="profile.php">Profile</a></div>
<?php 
if(empty($_SESSION['info'])) :?>
    <div><a href="login.php">LogIn</a></div>
    <div><a href="signup.php">SignUp</a></div>
    <?php else:?>
    <div><a href="logout.php">Logout</a></div>
<?php endif; ?>

</header>