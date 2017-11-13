<?php
ob_start();
session_start();
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
        <input type="password" class="form-control" placeholder="Password" name="pass" required />
        </div>
        <hr />
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="login" id="login">
            <span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
            </button> 
            <a href="account/register.php" class="btn btn-default" style="float:right;">Sign UP Here</a>
        </div>              
      </form>
    </div>

</div>
<?php
    //Gọi file connection.php ở bài trước
    require_once("config.php");
    // Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
    if (isset($_POST["login"])) {
        // lấy thông tin người dùng
        $username = $_POST["username"];
        $password = $_POST["pass"];
        //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
        //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
        $username = strip_tags($username);
        $username = addslashes($username);
        $password = strip_tags($password);
        $password = addslashes($password);
        if ($username == "" || $password =="") {
            
        }else{
            $sql = "select * from account where username = '$username' and pass = '$password' ";
            $query = mysqli_query($conn,$sql);
            $num_rows = mysqli_num_rows($query);
            if ($num_rows==0) {

            }else{

                //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
                $_SESSION['username'] = $username;
                header('Location: Home.html');            }
        }
    }
?>
</body>
</html>

