<?php
session_start();

    require_once "connection.php";
    require_once "function.php";

    $user_data['user_name']="Guest";
    $permission = 0;

    if(check_login($con))
    {
        $user_data=check_login($con);
        if($user_data['permit'] == "admin")
        {
            $permission = 1;
        }
        else
        {
            header("Location: index.php");
        }
    }
    else
    {
        header("Location: login.php");
    }

    
    ?>
<!doctype html>


<html >
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="navbar.css" />
  <link rel="stylesheet" type="text/css" href="admin.css" />
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@700;800&display=swap" rel="stylesheet" />
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,600&display=swap" rel="stylesheet"> 
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Noto+Serif+KR:wght@900&display=swap" rel="stylesheet"> 
    <meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/913940c2b2.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script> 

  <title>The HTML5 Herald</title>
 




</head>

<body >

<div class="container">
        <div class="logo">
            <a href="index.php"><img src="dazz.png" alt="logo"></a>
        </div>
        <div class="navbar">

            <div class="icon-bar" onclick="Show()">
                <i></i>
                <i></i>
                <i></i>
            </div>

    <ul id="nav-lists">
        <li class="close"><span onclick="Hide()">×</span></li>
        <li><a href="shops.php">Shops</a></li>
        <li><a href="aboutus.php">About us</a></li>
        <li  ><a href="admin.php" >admin</a></li>
        <li  ><a href="deletegroup.php" >deletegroup</a></li>
        <li  ><a href="logout.php" >logout</a></li>
        <li  ><a href="delete.php" >delete</a></li>
        <li  ><a href="resetpassword.php" >reset password</a></li>
        
        

    </ul>
    </div>
</div>

<div class="data">
    <h1> All users </h1>
    <div class="user">
<?php
                  require_once 'connection.php';
                  $sql = "SELECT * FROM users";
                  $result = mysqli_query($con, $sql);
                  if (mysqli_num_rows($result) > 0) 
                  {
                      while($row = mysqli_fetch_assoc($result)) {
                      echo "ID: " . $row["id"]. "<br>" . "  UserName: " . $row["user_name"] .  "<br>" . "Password: " . $row["password"]. "<br><br><br>";
                      }
                  } else {
                      echo "<h3>No user data found!</h3>";
                  }
            ?>
            </div>
</div>

</body>
</html>

