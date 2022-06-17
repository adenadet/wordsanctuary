<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name='author' content='Olarewaju Toyin Abiodun'>
    <meta name='Keywords' content=''>
    <meta name='description' content=''>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/all.css">   
	<title>Word Sanctuary</title>

	<style type="text/css">
		 #bgimg{
      background-image: url('bg22.jpg');
      background-size:cover;
      background-repeat: no-repeat;
      height: 700px;
    }
    .fsize{
    	font-size: 30px;
    }
    .round{
    	border-radius: 6px;
    }
	</style>
</head>
<body id="bgimg">
<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
 <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>


      <div class="container">
      	 <div class="row" style="height:100px">
          <div class="col-4" style="margin-top:35px">
              <img src="LOGO WHITE.png" width="10%" height="38px" alt="...">
                   <span style="color: white" id="ws"><b>WORD SANCTUARY</b></span>
          </div>
          <div class="col-6" style="margin-top:20px">
                <nav class="navbar navbar-expand-lg navbar-light">
                      <a class="navbar-brand" href="#"></a>
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                          </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown" style="justify-content:space-between">
              <ul class="navbar-nav">
                    <li class="nav-item active">
                          <a class="nav-link" href="index.php" style="color:white">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="#" style="color: white">About us</a> 
                     </li>
                    <li class="nav-item">
                          <a class="nav-link" href="#" style="color:white">Livestream</a>
                    </li>
                    <li class="nav-item">
                          <a class="nav-link" href="#" style="color:white">Events</a>
                    </li>
                    <li class="nav-item">
                          <a class="nav-link" href="#" style="color:white">Giving</a>
                    </li>
                </ul>
              
            </div>
              
              </nav>
              
        </div>
        <div class="col-2" style="margin-top:35px">
           <a href="registration.php" style="color: #33b3f5">Login/Sign up</a>&nbsp;
           <a style="color: white" href="" class="">English</a>
        </div>
     </div>
      <div class="row" style="margin-top: 40px">
      	 <div class="col">
      	 	<span class="fsize"><a style="color: white"><b id="login">Log in</b></a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      	 	<span class="fsize"><a style="color: white"><b id="signup">Sign up</b></a></span>
      	 </div>
      </div>
      <div class="row">
      	<div class="col">
      			<div class="form-group row" style="margin-top: 20px">
      				<div class="col-2">
      				 <a href="" style="background-color: white; color: black; padding: 10px;width: 50%" class="round" >Continue with</a>
      				</div>
      				<div class="col-2">
      				 <a href="" style="background-color: white; color: black; padding: 10px;width: 50%" class="round">Continue with</a>
      				</div>
      			</div>
      		    <p style="color: white;">-or-</p>
      		</div>
      	</div>
      		    <div class="row">
      		    	<div class="col">
      		    		<form id="signupform" style="display: none">
      		    		<div class="form-group row">
      		    		  <input type="text" name="" placeholder="Name" style="padding: 5px;width: 30%" class="round">
      		    	    </div>
      		    		<div class="form-group row">
      		    			<input type="text" name="" placeholder="E-mail" style="padding: 5px;width: 30%" class="round">
      		    		</div>
      		    		<div class="form-group row">
      		    			<input type="text" name="" placeholder="Phone Number" style="padding: 5px; width: 30%" class="round">
      		    		</div>
      		    		<div class="form-group row">
      		    			<input type="tpassword" name="" placeholder="Password" style="padding: 5px; width: 30%" class="round">
      		    		</div>
      		    	 <div class="form-group row">
      		    	 	<button style="background-color: #33b3f5;padding:5px; width: 30%" class="round">Sign up</button>
      		    	 </div>
      		    	 </form>
      		    	 <form id="loginform">
      		    	 	<div class="form-group row">
      		    			<input type="text" name="" placeholder="E-mail/Password" style="padding: 5px;width: 30%" class="round">
      		    		</div>
      		    		<div class="form-group row">
      		    			<input type="tpassword" name="" placeholder="Password" style="padding: 5px; width: 30%" class="round">
      		    		</div>
      		    		<div class="form-group row">
      		    	 	<button style="background-color: #33b3f5;padding:5px; width: 30%" class="round">Log in</button>
      		    	 </div>
      		    	 <div class="form-group row">
      		    	 	<input type="checkbox" name="" style="margin-top: 7px">&nbsp;&nbsp;<span style="color:white" class="round">Remember Me?</span>
      		    	 </div>
      		    	 </form>
      		    	</div>
      		    </div>	
      	</div>

      	<script type="text/javascript">
      		$("#signup").click(function(){
      			$("#signupform").show();
      			$("#loginform").hide();
      		})

      		
      	</script>
      	<script type="text/javascript">
      		$("#login").click(function(){
      			$("#loginform").show();
      			$("#signupform").hide();

      		})
      	</script>
</body>
</html>