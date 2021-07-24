
<?php
require_once 'connection.php';

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        if(isset($_POST['submit']))
        {


                echo  "hellllo";
                if( !empty($_POST['password']))
                {
                     $query = "DELETE FROM users WHERE password  LIKE '$_POST[password]'";
                    echo "hello";
                    
                    if (mysqli_query($con, $query)) 
                    {
                        echo '<script>alert("recored deleted successfully")</script>';
                    } 
                else
                    {
                    echo  '<script>alert("Error: " . $sql . "<br>" . mysqli_error($conn))</script>';
                    
                }
            }   
         }
    }


    ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="gg.css" />
	<link rel="stylesheet" type="text/css" href="navbar.css" />
</head>
<body>
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

    </ul>

</div>
</div>

</div>


	




<div class="overlay">
<!-- LOGN IN FORM by Omar Dsoky -->
<div id="form">
<form method="post">
   <!--   con = Container  for items in the form-->
   <div class="con">
   <!--     Start  header Content  -->
   <header class="head-form">
      <h2>DELETE</h2>
      <!--     A welcome message or an explanation of the login form -->
      <p>insert the datd of the user you wish to delete</p>
   </header>
   <!--     End  header Content  -->
   <br>
   <div class="field-set">
     
      <!--   user name -->

        <!--   user name Input-->

     
      <br>
     
           <!--   Password -->
     
  
      <!--   Password Input-->
      <input class="form-input" id="txt-input" type="text" placeholder="@Password"  name="password" >
     
<!--      Show/hide password  -->

     
     
      <br>
<!--        buttons -->
<!--      button LogIn -->
      <button class="log-in" name="submit"> DELETE</button>
   </div>
  
<!--   other buttons -->

			<a id="link" href="index.php" class="button1"><strong>Homepage</strong></a><br><br>

     

  </div>
  
  <!-- End Form -->
</form>



</div>














</body>
</html>