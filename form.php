<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
<div class="c2">
    <?php
    if(isset($_POST['submit'])){
        echo " Your form submitted successfully ";
        echo "<br>";
        
        $username=$_POST['username'];
        $password=$_POST['password'];
        $name=['devika','shubham','mrutyunjaya','shivance','hendry'];
        echo " Hello " . $username . " welcome to this site ";
        echo "<br>";
        if(!in_array($username,$name)){
            echo " Username not found ";
        }
        else{
            echo " User name founded ";
        }
        echo "<br>";


        if(strlen($username)<5){
            echo " user name is too short ";
        }
        elseif(strlen($username)>32){
            echo " user name is too large ";
        }
        else{
            echo "continue with the form ";
        }
    }
    ?>
    </div>
  <div class="c1">
    <form action="form.php" method="post">
        <h1>enter your username</h1>
        <input type="text" name="username" placeholder=" Enter your username ">
        <h1>enter your password</h1>
        <input type="password" name="password" placeholder=" Enter your password ">
        <br>
        <br>
        <input type="submit" name="submit">
    </form>
</div> 
</body>
</html>