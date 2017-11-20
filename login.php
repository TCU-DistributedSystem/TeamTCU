<?php
include('classes/DB.php');
if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (DB::query('SELECT username FROM users WHERE username=:username', array(':username'=>$username))) {
                if (password_verify($password, DB::query('SELECT password FROM users WHERE username=:username', array(':username'=>$username))[0]['password'])) {
                        $cstrong = True;
                        $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
                        $user_id = DB::query('SELECT id FROM users WHERE username=:username', array(':username'=>$username))[0]['id'];
                        DB::query('INSERT INTO login_tokens VALUES (\'\', :token, :user_id)', array(':token'=>sha1($token), ':user_id'=>$user_id));
                        setcookie("SNID", $token, time() + 60 * 60 * 24 * 7, '/', NULL, NULL, TRUE);
                    header("Location: page/home.html");

                } else {
                    echo '<script language="javascript">';
                    echo 'alert("Incorrect password!")';
                    echo '</script>';      
                }
        } else {
                    echo '<script language="javascript">';
                    echo 'alert("User not registered!")';
                    echo '</script>';        
                }   
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sheraton Hotel Login</title>
<link href="account/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="account/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
<div class="signin-form">
    <div class="container">        
       <form class="form-signin" method="post" id="login-form">
      
        <h2 class="form-signin-heading">Sign In.</h2><hr />
        
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Username" name="username" required autofocus />
        <span id="check-e"></span>
        </div>
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" required />
        </div>
        <hr />
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="login" id="login">
            <span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
            </button> 
            <a href="account/register.php" class="btn btn-default" style="float:right;">Sign Up</a>
        </div>              
      </form>
    </div>

</div>
</body>
</html>

