<?php
//  if($_SERVER['REQUEST_METHOD']=='POST'){
//   include('connect.php');
//   $name=$_POST['name'];
//   $email=$_POST['email'];
//   $password=$_POST['password'];

//   $sql="INSERT INTO `signup`(`id`, `name`, `email`, `password`) VALUES ('[$name]','[$email]','[$password]')";
//   $result=mysqli_query($con,$sql);
//   mysqli_query($con,$sql) or die(mysqli_error($con));
//   if($result){
//     echo'Data inserted sucessfully';
//   }
//   else{
//     die(mysqli_error($con));
//   }
// }

?>


<?php

	include('connect.php');

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {	
	if(isset($_POST['Submit'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
     $password=$_POST['password'];
		//$cpassword = $_POST['cpassword'];

		//$pass = password_hash($password, PASSWORD_BCRYPT);
		//$cpass = password_hash($cpassword, PASSWORD_BCRYPT);
		$emailquery ="select * form registration where email='$email'";
		$result=mysqli_query($con,$emailquery);
		
    
       if($result)
       {


		if (($result && mysqli_num_rows($result))>0) {
			echo "e-mail already exists";
			
		}else{
			if ($password === $cpassword) {


				$insertquery=" INSERT INTO signup (name,email, password) values($name', '$email', '$pass')";

				$iquery=mysqli_query($con ,$insertquery);

			if ($iquery) {

                    	?>
	                    <script >
	                  	alert("Inserted Sucessfull")
	                     </script>
	                      <?php
                         }else{
                           	?>
                        	<script >
	                     	alert(" No Connection")
	                        </script>
	                        <?php
                           }
				# code...
			}
		
		else{
				echo "password are not matching";
			}
		}

	}
}

}



	?>













<!DOCTYPE html>
<head>
    <style>
        p {
    font-size: 14px;
    font-weight: 100;
    line-height: 20px;
    letter-spacing: 0.5px;
    margin: 20px 0 30px;
}

a {
    color: #333;
    font-size: 14px;
    text-decoration: none;
    margin: 15px 0;
}


.but {
    border-radius: 20px;
    border: 1px solid #FFFFFF;
    background-color: #33b5e5;
    color: #ffffff;
    font-size: 12px;
    font-weight: bold;
    padding: 14px 35px;
    letter-spacing: 1px;
    text-transform: uppercase;
    
}

form {
    background-color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 50px;
    height: 100%;
    text-align: center;
}

input {
    background-color: #eee;
    border: none;
    padding: 12px 15px;
    margin: 8px 0;
    width: 100%;
}

.social-container {
    margin: 5px ;
}

.social-container a {
    border: 1px solid #dddddd;
    border-radius: 50%;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin: 0 5px;
    height: 40px;
    width: 40px;
}

.container {
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    position: relative;
    overflow: hidden;
    width:1000px;
    max-width: 100%;
    height:700px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);

}

.form-container {
    position: absolute;
    top: 0;
    height: 100%;
    transition: all 0.6s ease-in-out;
}

.sign-in-container {
    left: 0;
    width: 50%;
    z-index: 2;
}

.sign-up-container {
    left: 0;
    width: 50%;
    opacity: 0;
    z-index: 1;
}

.container.right-panel-active .sign-in-container {
    transform: translateX(100%);
}

.container.right-panel-active .sign-up-container {
    transform: translateX(100%);
    opacity: 1;
    z-index: 5;
    animation: show 0.6s;
}

@keyframes show {
    0%,
    49.99% {
        opacity: 0;
        z-index: 1;
    }

    50%,
    100% {
        opacity: 1;
        z-index: 5;
    }
}
.overlay-container {
    position: absolute;
    top: 0;
    left: 50%;
    width: 50%;
    height: 100%;
    overflow: hidden;
    transition: transform 0.6s ease-in-out;
    z-index: 100;
}

.container.right-panel-active .overlay-container {
    transform: translateX(-100%);
}

.overlay {
    background: #33b5e5;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: 0 0;
    color: #ffffff;
    position: relative;
    left: -100%;
    height: 100%;
    width: 200%;
    transform: translateX(0);
    transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
    transform: translateX(50%);
}

.overlay-panel {
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 40px;
    text-align: center;
    top: 0;
    height: 100%;
    width: 50%;
    transform: translateX(0);
    transition: transform 0.6s ease-in-out;
}

.overlay-left {
    transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
    transform: translateX(0);
}

.overlay-right {
    right: 0;
    transform: translateX(0);
}

.container.right-panel-active .overlay-right {
    transform: translateX(20%);
}
</style>
<link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
  <!-- fontawesome -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
  <!-- animate.css -->
  <link rel="stylesheet" href="plugins/animation/animate.min.css">
  <!-- jquery-ui -->
  <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.css">
  <!-- timePicker -->
  <link rel="stylesheet" href="plugins/timePicker/timePicker.css">
  
  <!-- Stylesheets -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="icon" href="images/favicon.png" type="image/x-icon">

</head><body>
<div class="container mt-5" id="container">
    <div class="form-container sign-up-container mt-2">
      <form action="index.php" method="post">
        <h1 class="font-weight-bold">Create Account</h1><br>
        <div class="social-container">
          <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
        </div><br>
        <input type="text" placeholder="Name" name="name" required/><br>
        <input type="email" placeholder="Email" name="email" required/><br>
        <input type="password" placeholder="Password" name="password" required/><br>
        <button name="Submit" class="but" type="Submit">Sign Up</button>

      </form>
    </div>

    <div class="form-container sign-in-container">
      <form action="index.php" name="signin">
        <h1 class="font-weight-bold">Sign in</h1><br>
        <div class="social-container">
          <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
        </div><br>
        <span>or use your account</span><br>
        <input type="text" placeholder="Name" required/><br>
        <input type="password" placeholder="Password" required/><br>
        <button class="but">Sign In</button>
      </form>
    </div>

    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1 class="font-weight-bold">Good to see you in DiabCare !<br>Get diabetes health issues solved here<h1><br>
          <h3>You already have an account? <br>Sign in!</h3><br>
          <button class="but" id="signIn">Sign In</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1 class="font-weight-bold">Welcome to DiabCare!<br>A complete Diabetes Care Platform</h1><br>
          <h3>You don't have account yet? Don't worry! You still can join us</h3><br>

          <button  class="but" id="signUp">Sign Up</button>
        </div>
      </div>
    </div>
  </div>
  <script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
      container.classList.add('right-panel-active');
    });

    signInButton.addEventListener('click', () => {
      container.classList.remove('right-panel-active');
    });
  </script>
</body>
</html>