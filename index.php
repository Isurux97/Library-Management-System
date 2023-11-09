<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
	<title>Sign up</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap.css">

</head>

<br>

<body>
	<a href="Welcome.html"><img src="Images/University-of-Vavuniya-Logo-1024x1024.png" width="150" height="150"
	style="float: left; margin-right: 10px; padding: 2px;"></a>
	<h2><b>Library Student Portal</b></h2>
	<h2><b>University of Vavuniya</b></h2>
	<h2><b>Sri Lanka</b></h2><br>
	<hr>

	<img src="Images/sign-up-form.png" width="600" height="600"
	style="float:right ; margin-left: 80px; margin-right: 300px; margin-top: 100px; padding: 2px;">

	<div class="container">
  <h2 style="text-align: left;">Sign up</h2>
    <h5 style="text-align: left;">Already have an Account? <a href="Signin.html"> Sign in here </a></h5>
    <br>

  <form action="signup.php" method="post">
    <div class="form-group">
      <label for="text">First name</label>
      <input type="text" class="form-control" id="fname" placeholder="Your First name" style="width: 250px" name="fname">
    </div>
    <br>

    <div class="form-group">
      <label for="text">Last name</label>
      <input type="text" class="form-control" id="lname" placeholder="Your Last name" style="width: 250px" name="lname">
    </div>
    <br>

    <div class="form-group">
      <label for="text">Registraion number</label>
      <input type="text" class="form-control" id="regnumber" placeholder="Eg: 2018/ASB/24" style="width: 210px" name="reg">
    </div>
    <br>

    <div class="form-group">
      <label for="email">Your E-mail</label>
      <input type="email" class="form-control" id="email" placeholder="Eg: abc@gmail.com" style="width: 210px" name="email">
    </div>
    <br>

    <div class="form-group">
      <label for="text">mobile number</label>
      <input type="text" class="form-control" id="mobnumber" placeholder="07XXXXXXXX" style="width: 210px" name="tnum">
    </div>
    <br>

    <div class="form-group">
      <label for="pwd">Password</label>
      <input type="password" class="form-control" id="pwd1" placeholder="Enter a Password" style="width: 210px" name="pass1">
    </div>
    <br>

    <div class="form-group">
      <label for="pwd">Re-enter password</label>
      <input type="password" class="form-control" id="pwd2" placeholder="Confirm your password" style="width: 210px" name="pass2">
    </div>
    <br>

    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox"> I agree to the terms and conditions as set out by the user agreement.
      </label>
    </div>
    <br> 

    <button type="submit" class="btn btn-primary" value="submit">Submit</button>
  </form>
</div>

<br>
<br>
<br>

<div class="footer">
	<div class="footer-copyright text-center py-3">© 2022 All rights reserved :
    <a href="https://vau.ac.lk/">University of Vavuniya, Sri Lanka</a>
  </div>
</div>

</body>
</html>