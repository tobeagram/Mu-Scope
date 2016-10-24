<!--

Written by Tobias Whetton & Dr Rashed Karim
King's College London, 2016

-->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Acknowledgements</title>



    <!-- Bootstrap Core CSS -->
    <link href="../api/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../api/bootstrap/css/1-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom Fonts -->
    <link href="../api/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600,600italic' rel='stylesheet' type='text/css'>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="../img/favicon.png"/>


    <style>

    ul {
      text-align: center;
      list-style-type: none;
      padding: 0 0 0 0;
    }

    </style>
</head>
<?php

    include_once("../api/kcl/ServerLogs.php");
    include_once("../api/kcl/XMLConfig.php");

    // Read the XML config file
    $SPECIMEN = 'vertebrates';
    $xml_config = new XMLConfig('../xml/museum.xml');
    $specimen_data = $xml_config->GetSpecimenDataDigest($SPECIMEN);



?>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" style="padding:7px 0 0 0; "class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <i class="fa fa-bars"></i>
              </button>
                <a class="navbar-brand page-scroll" href="../welcome">
                    <img src="../img/KCL_logo.png" alt="KCL Logo" height="22">
                </a>
                <a class="navbar-brand" id="mls" style="color:rgba(0, 0, 0, 0.7);text-transform:uppercase;letter-spacing:0.03em;" href="../welcome">Museum <span id="of">of</span> Life Sciences</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div style="border:none;" class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../exhibitions">exhibitions</a>
                    </li>
                    <li>
                        <a href="../events">what's on</a>
                    </li>
                    <li>
                        <a style="color:rgba(0, 0, 0, 0.7);" href="#">about</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <section id="about">
    <div style="border-radius:8px;" class="container">

        <!-- Page Heading -->
        <div class="row">
          <div class="col-lg-12 text-center">
              <h2 style="color:#F23B3E">Acknowledgements</h2>
              <hr class="star-primary">
          </div>
        </div>
        <!-- /.row -->

      <div class="row">
        <div class="container">

          <p><strong>Museum-Scope</strong> is a web interface designed to enable anyone to interact with and learn about digitised specimens from the Museum of Life Sciences using the 3D Unity Web Player. Written and designed by Tobias Whetton over the course of three months. This wouldn’t have been possible without the help and expertise of: </p>
          <br>
          <ul>
          <li><b>Dr Rashed Karim</b> Project Supervisor</li>
          <li><b>Professor Kawal Rhode</b> Tutor/Supervisor</li>
          <li><b>Joemon John</b> Superintendent Radiographer</li>
          <li><b>Dr Gillian Sales</b> Museum of Life Sciences Curator</li>
          <li><b>Dr James Housden</b> Research Fellow</li>
          </ul>


        </div>
      </div>
    </section>




        <hr>

        <!-- Footer -->
        <footer>
            <div class="col-lg-12 text-center">
                <div class="row" style="padding-bottom:40px;">
                    <p>Copyright &copy; 2016 Rashed Karim, Kawal Rhode and Tobias Whetton. All Rights Reserved.</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../api/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../api/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
