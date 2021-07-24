<?php 
session_start();



require_once "connection.php";
require_once "function.php";

    
	$user_data['user_name']="guest";

    $pre=0;
    $notin=0;
    $signout=0;

	if (check_login($con)){

		$user_data=check_login($con);
		$signout=1;
	}
    if (isset($user_data['permit']) && $user_data['permit'] == "admin"){
        
        $pre=1;


    }
	if (check_login($con)==false){

	
		$notin=1;
	}


 

?>

 <!DOCTYPE html>

    <head>
    <script src="maincode.js"></script>
    <link rel="stylesheet" type="text/css" href="indexschool.css" />
    <link rel="stylesheet" type="text/css" href="second.css" />
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
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/913940c2b2.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>



        <title>DAZZ</title>
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
        <li ng-show="<?php echo $notin; ?>" ><a href="login.php">login</a></li>
        

    </ul>

</div>
</div>

</div>

<div>







        <div class="section2">
            <h1 class="title" style="">Welcome To  DAZZ<br>Hello, <?php echo $user_data['user_name']; ?></h1>
            



         

            <p class="text"> We are girls who help to help other girls shop safly </p>

            <div class="cont">
                

                <a href="#faqsection" class="hvr-grow"><button class="btn1">FAQ</button></a>

              <!-- <a href="#lssection" class="hvr-grow"><button class="btn1">what we do?</button></a> -->

                <a href="#lssection" class="hvr-grow"><button class="btn1">what we do?</button></a>



            </div>
        </div>


        <div id="lssection">
            <div id="div1" >
            <h1 id="title1">What is Dazz?</h1>
            <p id="text1"> Dazz is a sticker that will be presented in the entrence to a shop in order to inform the shoppers that this shop is body positive according to DAZZ criteria  </p></div>
            <div> <img src="dazz.png" id="dazz"></div>
            
        </div>
        <div id="faqsection">
            <h1 class="faqtitle">Any questions?</h1>

            <p id="faqtext">
                If you have any qustions about what we do you can look at our faq sections, and if you didnt get an answer to your qustion u can always contact us
            </p>

            <p id="faqtext1">Do you have any question about us? any concerns? Feel free to visit our new Freaquently Asked Questions section.</p>

            <div style="visibility: hidden; position: absolute; width: 0px; height: 0px;">
                <svg xmlns="http://www.w3.org/2000/svg">
                    <symbol viewBox="0 0 24 24" id="expand-more">
                        <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z" />
                        <path d="M0 0h24v24H0z" fill="none" />
                    </symbol>
                    <symbol viewBox="0 0 24 24" id="close">
                        <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" />
                        <path d="M0 0h24v24H0z" fill="none" />
                    </symbol>
                </svg>
            </div>

            <div id="all">
            <details>
                <summary>
                    what do we do?
                    <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
                    <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
                </summary>
                <p>We are creating a body positive movement that will help girls invest their money in shops that support the values of our movement. Our idea is to tag all the stores that follow the criterias to help the consumers to shop wisely and create a comfortable and supportive experience.</p>
            </details>

            <details>
                <summary>
                   why do we do that?
                    <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
                    <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
                </summary>
                <p>we do it because we are girls and we know the frustration of entering a shop and finding out they don't have your size in stock, and we know how it can ruin your day and we wish to help with preventing it</p>
            </details>

            <details>
                <summary>
                    So where is the catch?
                    <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
                    <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
                </summary>
                <p>There is none, we truly wanna help girls have the best shopping experience</p>
            </details>




        </div>
        

</div>
</div>



    </body>
</html>
