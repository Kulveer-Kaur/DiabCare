<?php
include('header.php');
?>
<html>
    <head>
    <script>
    var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('cpassword').value) {
    document.getElementById('message').style.color = '#5dd05d';
    document.getElementById('message').innerHTML = 'Matched';
  } else {
    document.getElementById('message').style.color = '#f55252';
    document.getElementById('message').innerHTML = 'Password fields doesnot match';
  }
}

function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8 || key == 32);
};

function checklen()
{
    var pass1 = document.getElementById("password");  
    if(pass1.value.length<6){  
        alert("Password must be at least 6 characters long. Try again!");  
        return false;  
  }  
}

</script>
<style >
     .form-control {
    border-radius: 0.75rem;
}
.tab-pane show active{
    width:20px;
    height:10px;
}
.btnRegister{
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

</style>

    </head>
    <body>
<div class="container register" style="font-family: 'IBM Plex Sans', sans-serif;">
                <div class="row">
                    <div class="col-md-3 register-left" style="margin-top: 10%;right: 510%">
                        <!--<img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>-->
                        <img src="images/logo.jpg">
                        <h3>Welcome</h3>
                       
                    </div>
                    <div class="col-md-9 register-right" style="margin-top: 40px;left: 80px;">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist" style="width: 40%;">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><h4>Patient</h4></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><h4>Doctor</h4></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#admin" role="tab" aria-controls="admin" aria-selected="false"><h4>Admin</h4></a>
                            </li>
                        </ul><br>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Register as Patient</h3><br>
                                <form method="post" action="hms/func2.php" class="form1">
                                <div class="row register-form">
                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  placeholder="First Name *" name="fname"  onkeydown="return alphaOnly(event);" required/>
                                        </div><br>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" name="email"  />
                                        </div><br>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" id="password" name="password" onkeyup='check();' required/>
                                        </div><br>
                                        
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="Male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="Female">
                                                    <span>Female </span> 
                                                </label>
                                            </div><br><br>
                                            <a href="hms/index1.php"><h4>Already have an account? Login Now</h4></a>
                                        </div>
                                    </div><br>
                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" name="lname" onkeydown="return alphaOnly(event);" required/>
                                        </div><br>
                                        
                                        <div class="form-group">
                                            <input type="tel" minlength="10" maxlength="10" name="contact" class="form-control" placeholder="Contact *"  />
                                        </div><br>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  id="cpassword" placeholder="Confirm Password *" name="cpassword"  onkeyup='check();' required/><span id='message'></span>
                                        </div><br>
                                        <input type="submit" class="btnRegister" name="patsub1" onclick="return checklen();" value="Register"/>
                                    </div><br>

                                </div>
                            </form>
                            </div>

                            
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Login as Doctor</h3><br>
                                <form method="post" action="hms/func1.php">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="User Name *" name="username3" onkeydown="return alphaOnly(event);" required/>
                                        </div><br>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" name="password3" required/>
                                        </div><br>
                                        
                                        <input type="submit" class="btnRegister" name="docsub1" value="Login"/>
                                    </div>
                                </div><br>
                            </form>
                            </div>


                            <div class="tab-pane fade show" id="admin" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Login as Admin</h3><br>
                                <form method="post" action="hms/func3.php">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="User Name *" name="username1" onkeydown="return alphaOnly(event);" required/>
                                        </div><br>
                                        


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" name="password2" required/>
                                        </div><br>
                                        
                                        <input type="submit" class="btnRegister" name="adsub" value="Login"/>
                                    </div><br><br>
                                </div>
                            </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
    </body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    </html>
    <?php
    include('footer.php')
    ?>

  