<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact - Nagi's Coffee Shop</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     <!-- jQuery -->
     <script src="js/jquery.js"></script>

     <script type="text/javascript">
        		$(document).ready(function(){
			
			   $("#login").click(function(){
				
					email=$("#email").val();
					password=$("#password").val();
					 $.ajax({
						type: "POST",
						url: "pcheck.php",
						data: "email="+email+"&password="+password,
						success: function(html){
						  if(html=='true')
						  {
							  
							  $("#add_err2").html('<div class="alert alert-success"> \
													<strong>Authenticated</strong> \ \
												</div>');

							window.location.href = "blog.php";
						  
						  } else if (html=='false') {
								$("#add_err2").html('<div class="alert alert-danger"> \
													<strong>Authentication</strong> failure. \ \
												</div>');
								
						  
						  } else {
								$("#add_err2").html('<div class="alert alert-danger"> \
													<strong>Error</strong> processing request. Please try again. \ \
												</div>');
						  }
						},
						beforeSend:function()
						{
                            $("#add_err2").html("loading...");
						}
					});
					 return false;
				});
});
    </script>

</head>

<body>

<div class="brand">The Nagi's Coffee</div>
    <div class="address-bar">Sauna 1-11 | Tallinn- 10140| Estonia</div>

    <!-- Navigation -->
    <?php require_once 'nav.php';?>

    <div class="container">
        <div class="row">
            <div class="box">
                    <hr>
                    <h2 class="intro-text text-center">Login
                        <strong>form</strong>
                    </h2>
                    <hr>
                    <div class="col-lg-12">
                <div class="alert alert-danger">
                <strong>you must be loggedin to view the blog</strong>
                </div>
                    <div id="add_err2"></div>
                   
                    <form role="form" >
                        <div class="row">
                            
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" maxlength="25" >
                            </div> </div>
                            <!-- <div class="clearfix"></div> -->
                            <div class="row">
                            <div class="form-group col-lg-8">
                                <label>Password</label> 
                                <input type="password" class="form-control" id="inputPasword" name="inputPasword" maxlength="25" >
                            </div>
                            <div class="form-group col-lg-4" style="padding:32px; margin-left:-20px">
                                <input type="checkbox" onclick="passwordfunction()">
                                <label> Show Password</label>
                            </div> 
                            </div>
                            
                            <div class="form-group col-lg-12">
                                <button type="submit" class="btn btn-default" id="login">Login</button>
                            </div>
                        </div>
                    </form>
                            <div class="form-group col-lg-12">
                                <a href="register.php"> <button type="submit" class="btn btn-default"> Not a member? Register here</button></a>
                            </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Nagireddy</p>
                </div>
            </div>
        </div>
    </footer>

   

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script>
function passwordfunction() {
  var InputPassword = document.getElementById("inputPasword");
  if (InputPassword.type === "password") {
    InputPassword.type = "text";
  } else {
    InputPassword.type = "password";
  }
}
</script>

</body>

</html>
