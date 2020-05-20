<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Glo Fit</title>
        <!-- title to page is designed -->
        <meta name="viewport" content="width=device-width, initial scale=1.0, user-scale=yes">
        <link rel="stylesheet" href="home.css?v=<?php echo time(); ?>">
    </head>
    
    <body>
         
        <div id="container">
            <div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      	<p>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</p>
  	<?php endif ?>
            </div>
            <div id="user">
             <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p style="float: left;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p style="float: right;"> <a href="login.php?logout='1'">logout</a> </p>
    <?php endif ?>
            </div>
            <div id="header">
                <div class="column">
        
                    </div>
                    <div class="column">
                        <img src="images/homeimg2.jpg" width="210px" height="200px">
                        
                    </div>
                  <div class="column">
                 <img src="images/homeimg3.jpg" width="210px" height="200px">
                      
                </div>
                    <div class="column">
                        <img src="images/homeimg.jpg" width="210px" height="200px">
                        <!-- images added to left to the heading glofit -->
                    </div>
                    <div id="brand">
                        <h1><a href="#">GloFit</a></h1>
                        <!-- heading glofit is added -->
                </div>
                <div class="clear">
                </div>
            </div>
            
            <div id="menu">
                <!-- menu of several taps is created -->
                <ul>
                    <li><a href="#home" class="active">HOME</a></li>
                    <li class="dropdown">
                        <a href="#workouts" class="dropbtn">WORKOUTS</a>
                    <div class="dropdown-content">
                        <!-- workout has dropdown options for body part wise exercise -->
                        <a href="abs/abs.html">Abs and Core Exercises</a>
                        <a href="arms/arms.html">Arm Exercises</a>
                        <a href="#">Back Exercises</a>
                        <a href="#">Chest Exercises</a>
                        <a href="legs/legs.html">Leg Exercises</a>
                        <a href="shoulder/shoulder.html">Shoulder Exercises</a>
                        </div></li>
                    <li><a href="nutrition/nutrition.html">NUTRITION</a></li>
                    <li><a href="skincare/skincare.html">SKIN CARE</a></li>
                    <li><a href="bmi/bmi.html">KNOW YOUR BMI</a></li>
                    <li><a href="contact/contact.html">CONTACT US</a></li>
                </ul>
            </div>
            <div id="introduction">
                <div id="column2">ABOUT US:
                    <!-- to tell everyone the motive of our website -->
                <div id="information">
                    <p>Due to the current covid-19 outbreak, all of us are stuck at our homes and our fitness is definitely taking a backseat. Our runners are unable to go running and our fitness enthusiasts, helplessly, can't hit the gym anytime soon. As we all know, the fitness centres and gymnasiums won't be reopening anytime soon, so lets not let it take a toll on our fitness. As the wise men say, "HEALTH IS WEALTH". <br><br>
                    Our website helps you achieve exactly that!<br><br>
                    With GloFit, you can get easy access to the different exercises and workouts for toning different parts of your body. Easy tutorials shall help you master these. We even provide you with some healthy food and drinks recipes that shall help you boost your workout regime and show better results.Along with all the above mentioned facilities, we also provide you with some easy skin care home remedies that would help you get glowing skin naturally at home.What would be better than tackling your skin issues in the most natural,harmless and inexpensive way, sitting at home? <br>Awareness about our own body is crutial and hence a BMI calculator is provided for you along with many workout plans (both short term and long term) that you can subscribe to, for better results.</p>
                    </div>
                </div>
                <div id="img">
                    <img src="images/img1.jpg" width="500px" height="300px">
                    
                    <img src="images/img2.jpg" width="500px" height="300px">
                    <!-- exercise images added -->

                </div>
                <div class="images">
                    <img src="images/images2.jpg" width="435px" heigth="460px">
                
                </div>
                <div class="images">
                     <img src="images/images1.jpg" width="350px" heigth="350px">
                </div>
                <div class="images">
                <img src="images/images3.jpg">
                </div>
            </div>
<footer class="foot">
        <div id="quote">
           <p>STAY HOME STAY SAFE</p>
           </div>
           <div id="pic">
           <img src="covid.jpeg" width= "150px" height="100px">
           </div>
        <!-- footer added to page saying stay home stay safe -->
        
        
        </footer>
        </div>
    </body>
</html>