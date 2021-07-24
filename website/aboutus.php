<?php 
session_start();



require_once "connection.php";
require_once "function.php";





    $signout=0;
    $pre=0;
    if (check_login($con)){
    
    $user_data=check_login($con);
    $signout=1;
    }
    if (isset($user_data['permit']) && $user_data['permit'] == "admin"){
        
    
        $pre=1;
    
    
    }

?>
 
 
 <!DOCTYPE html>
<html id="top">
<head>
    <script src="maincode.js"></script>

    <link rel="stylesheet" type="text/css" href="aboutus.css" />
    <link rel="stylesheet" type="text/css" href="navbar.css" />
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@700;800&display=swap" rel="stylesheet" />
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,600&display=swap" rel="stylesheet"> 
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Noto+Serif+KR:wght@900&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script> 
    <meta name="viewport" content="width=device-width, initial-scale=1" />
<title>DaAZZ/about us</title>
</head>


<body ng-app="" >

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
        <li ng-show="<?php echo $pre; ?>" ><a href="admin.php" >admin</a></li>
        <li ng-show="<?php echo $signout; ?>" id="lg"><a href="logout.php" >logout</a></li>
        <li ng-show="<?php echo $signout; ?>" ><a href="resetpassword.php" >reset password</a></li>
        

    </ul>

</div>
</div>

</div>

<div>
<div class="sectionblock">
	<h1 class="title"> who are we? </h1>
		<h4 class="text1">which languge do you prefer?</h4>

<div id="btn2">

	<button class="btn1" id="team" onclick="team()"> Team</button>

	<button class="btn1" id="vision" onclick="vision()">vision</button>

	<button class="btn1 " id="solution" onclick="solution()">solution</button>

    <button class="btn1 " id="cus" onclick="cus()">contact us</button>
</div>

	<p id="dis" class="text">DAZZ supports fashion stores that promote a positive body image and help young women consume wisely. By doing so, reduce the damage of young women's self-esteem due to the ideal body image that the fashion industry dictates</p>






	<script type="text/javascript">
		function team(){
			document.getElementById('dis').innerHTML=' The team consists of four amazing teenage girls- stav the gm cyntia the diseignr nicole the developer and yara the uxer. they chose to eork on dazz cus they care about it.';
		}
		function vision(){
			document.getElementById('dis').innerHTML='We envision a world where teenagers and young women feel confident with their looks/image/shape/type while shopping. and where the fashion industry accepts all body types so no girl will feel left out.';
		}
		function solution(){
			document.getElementById('dis').innerHTML="DAZZ supports fashion stores that promote a positive body image and help young women consume wisely. By doing so, reduce the damage of young women's self-esteem due to the ideal body image that the fashion industry dictates";
		}
        function cus(){
			document.getElementById('dis').innerHTML="instagram-@dazz_beuty<br> email-dazz@gmail.com";
		}

	</script>
               

</div>
<div class="section2"></div>


</body>

</html> 