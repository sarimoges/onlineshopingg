<?php
#this is Login form page , if user is already logged in then we will not allow user to access this page by executing isset($_SESSION["uid"])
#if below statment return true then we will send user to their profile.php page
//in action.php page if user click on "ready to checkout" button that time we will pass data in a form from action.php page
if (isset($_POST["login_user_with_product"])) {
    //this is product list array
    $product_list = $_POST["product_id"];
    //here we are converting array into json format because array cannot be store in cookie
    $json_e = json_encode($product_list);
    //here we are creating cookie and name of cookie is product_list
    setcookie("product_list",$json_e,strtotime("+1 day"),"/","","",TRUE);

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login And Registration Page</title>
	<link rel="shortcut icon" href="images/favicon.png" />
	<link rel="stylesheet" type="text/css" href="css/Login.css" />
	 <link rel="stylesheet" type="text/css" href="css/AnimateLogo.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />

	   	<link rel="stylesheet" href="css/userlogin.css" type="text/css" media="all" />


<body>

	
<div class="container">
   <header>
      <h1><p> <a href="login.php"><img src="images/logo.jpg" alt="" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>kalid SMART Electronics  shop <strong>Login Form</strong> <span>Please Login and create account if you don't have an account. </span></p> </h1>
   </header>


<div class="codrops-top">
    <header>
    	<p align="center" align="center"><b> <a href="#toregister"  class="a-btn"><span class="a-btn-text">Admin Login</span></a>  </b>	<b> <a href="#tologin"  class="a-btn"> <span class="a-btn-text">Customer Login</span> </a> </b>
    	<a href="log.php"  class="a-btn"> <span class="a-btn-text">Sales Person Login</span> </a> </b>
		<a href="Customer.php" class="a-btn"><strong><span class="a-btn-text">Create New Account</span></strong></a>
		<a href="Home.php" class="a-btn"><strong> <span class="a-btn-text">Back To Home</span></strong></a> </p>
    </header>
	 <div class="clr"></div>
			 </div> <br><br>

<section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <a class="hiddenanchor" id="tosalesperson"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="custvalidation.php" method="post" autocomplete="on"> 
                                <h1>Customer Login:</h1> 
                                <p> 
                                    <label for="email" class="email" data-icon="u" > Your Email </label>
                                    <input type="text" name="c_email" required="required" type="text" placeholder="Example@gmail.com.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="pass" data-icon="p"> Your Password </label>
                                    <input type="password" name='c_pass' required="required" type="password" placeholder="eg. *********" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit"  name="submit"  value =" Login">
								</p>

                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="adminvalidation.php" method="post" autocomplete="on"> 
                             <h1>Admin Login</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your User Name </label>
                                    <input type="text" name="uname" required="required" type="text" placeholder="myusername "/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your Password </label>
                                    <input type="password" name='upass' required="required" type="password" placeholder="eg. *******" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>

								</p>
                            </form>
                        </div>
						
						 
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html
