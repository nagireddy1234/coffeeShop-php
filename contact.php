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
        $(document).ready(function () {

            $("#register").click(function () {

                fname = $("#fname").val();
                lname = $("#lname").val();
                email = $("#email").val();
                password = $("#password").val();

                $.ajax({
                    type: "POST",
                    url: "adduser.php",
                    data: "fname=" + fname + "&lname=" + lname + "&email=" + email + "&password=" + password,
                    success: function (html) {
                        if (html == 'true') {

                            $("#add_err2").html('<div class="alert alert-success"> \
                                                 <strong>Account</strong> processed. \ \
                                                 </div>');

                            window.location.href = "index.php";

                        } else if (html == 'false') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> already in system. \ \
                                                 </div>');                    

                        } else if (html == 'fname') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> is required. \ \
                                                 </div>');
												 
						} else if (html == 'lname') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Last Name</strong> is required. \ \
                                                 </div>');

                        } else if (html == 'eshort') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> is required. \ \
                                                 </div>');

                        } else if (html == 'eformat') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> format is not valid. \ \
                                                 </div>');
												 
						} else if (html == 'pshort') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Password</strong> must be at least 4 characters . \ \
                                                 </div>');

                        } else {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Error</strong> processing request. Please try again. \ \
                                                 </div>');
                        }
                    },
                    beforeSend: function () {
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
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>Nagi's Shop</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=nagi's%20coffee%20shop,%20tallinn,%20Estonia+(My%20Business%20Name)&amp;t=k&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.maps.ie/map-my-route/">Calculate running distance on map</a></div>
                </div>
                <div class="col-md-4">
                    <p>Phone:
                        <strong>53950665</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:nagireddy.panditi@gmail.com">nagireddy.panditi@gmail.com</a></strong>
                    </p>
                    <p>Address:Sauna 1-11 | Tallinn- 10140
                        <strong>
                            <br>Estonia</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Registration
                        <strong>form</strong>
                    </h2>
                    <hr>
                    <div id="add_err2"></div>
                   
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>First Name</label>
                                <input type="text" id="fname" name="fname" maxlength="25" class="form-control" >
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Last Name</label>
                                <input type="text" class="form-control" id="lname" name="lname" maxlength="25" >
                            </div>
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
                                <button type="submit" class="btn btn-default" id="contact">Submit</button>
                            </div>
                        </div>
                    </form>
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
