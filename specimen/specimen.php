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



    <!-- Bootstrap Core CSS -->
    <link href="../api/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../api/bootstrap/css/1-col-portfolio.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="../api/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../api/bootstrap/js/bootstrap.min.js"></script>


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

    <!-- Custom Page Style (to be placed in CSS file once happy with changes) -->
    <style>

    .navbar {
      border-bottom: none;
      background: rgba(251, 248, 242, 0.3);
      -webkit-transition:  .3s ease-in-out;
      -moz-transition:  .3s ease-in-out;
      transition:  .3s ease-in-out;
      transition-delay: 2s;
    }

    .navbar .container {
      opacity: 0.2;
      -webkit-transition:  .3s ease-in-out;
      -moz-transition:  .3s ease-in-out;
      transition:  .3s ease-in-out;
    }

    .navbar .container:hover {
      opacity: 1;
    }


    .navbar:hover {
      background: #fbf8f2;
      -webkit-transition:  .3s ease-in-out;
      -moz-transition:  .3s ease-in-out;
      transition:  .3s ease-in-out;
    }



        .intbut .btnl:hover,
        .intbut .btnl:focus {
          padding: 2px 7px 3px 7px;
          text-decoration: none;
        }

        .intbut .btnl {
          padding: 0px 3px 0px 3px;
        }

        .fullscreen a{
          letter-spacing: 2px;
          font-size: 12px;
          color: rgba(0, 0, 0, 0.6);
          font-family:'Crimson Text', serif;
        }

        .fullscreen {
          cursor: pointer;
          margin-top: 15px;
          margin-bottom: 10px;
          z-index: 1000;
        }

        .fullscreen a:hover{
          color: rgba(0, 0, 0, 0.8);
          text-decoration: none;
        }

        a:hover {
            cursor: pointer;
        }

        .popover {
          font-family:'Crimson Text', serif;
          background: rgba(48, 48, 48, 0.8);
          color: #fbf8f2;
          -webkit-backdrop-filter: blur(12px);
          -moz-backdrop-filter: blur(12px);
          -backdrop-filter: blur(12px);
        }

        .popover-title {
            background: rgba(251, 248, 242, 0.95);
            font-weight: bold;
            padding-top: 15px;
            color:  rgba(0, 0, 0, 0.6);

        }

        #pop  {
          letter-spacing: 2px;
          font-size: 12px;
          color: rgba(0, 0, 0, 0.6);
          font-family:'Crimson Text', serif;
        }

        #pop:hover,
        #pop:active  {
          color: rgba(0, 0, 0, 0.8);
          text-decoration: none;
        }

        blockquote {
          font-family:'Crimson Text', serif;
          overflow-x: auto;
            background-color: none;
          font-size: 18px;
          border-radius: 0px;
          padding-left:24px;
          text-align: left;
          border-left: none;
          margin-top: 0;
          margin-bottom: 35px;
        }

        h6 {
          font-family:'Crimson Text', serif;
          letter-spacing: 2px;
          margin-bottom: -30px;
          margin-left: 12px;
          text-align: left;
          color: #fbf8f2;
          -moz-transform: rotate(90deg);
          -webkit-transform: rotate(90deg);
          transform-origin: left top 0;
          font-size: 12px;
          z-index: -1;
        }

        #easy  {
          color: rgba(251, 178, 178, 1);
        }

        #mild  {
          color: rgba(247, 116, 118, 1);
        }

        #hard  {
          color: rgba(255, 71, 73, 1);
        }

        button {
          font-family:'Crimson Text', serif;
        }

    </style>


    <?php

        include_once("../api/kcl/ServerLogs.php");
        include_once("../api/kcl/XMLConfig.php");

        // Read the XML config file

        $specimen_type = $_GET['specimen_type']; // zoological';
        $specimen_name = $_GET['specimen_name'];
        $specimen_id = $_GET['specimen_id'];

        $xml_config = new XMLConfig('../xml/museum.xml');
        $specimen_data = $xml_config->GetSpecimenDataDigest($specimen_type);


        $title = $specimen_data[$specimen_id]['title'];


    ?>

    <!-- Title -->
    <title><?php echo $title; ?></title>

    <!--Unity Integration -->
    <script src="../stl/<?php echo $specimen_data[$specimen_id]['specimen_id']; ?>/TemplateData/UnityProgress.js"></script>

</head>


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
                    <img src="../img/KCL_logo.png" alt="KCL Logo" height="22" style="-webkit-filter: invert(60%);">
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
                        <a href="../about">about</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



    <!-- Page Content -->
    <section>
    <div class="container specimen-div">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
              <h2 style="color:#F23B3E;" class="text-center"><?php echo $title; ?><p class="text-center"><?php echo $specimen_data[$specimen_id]['subtitle']; ?></p></h2>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page-line -->
        <div class="row text-center">
          <div class="col-md-6 col-md-offset-3">
            <hr>
          </div>
        </div>

        <!-- Picture Taken from the Life Sciences Musuem -->
        <div class="text-center" style="align-items:middle;">
          <?php $image_url = $specimen_data[$specimen_id]['image']; ?>
          <img src="<?php echo $image_url; ?>" style="width:550px; max-width: 100%; display: inline; margin-left: auto; margin-right: auto;">
        </div>

        <!-- Introductory Description -->
        <div class="row text-center">
          <div class="col-md-6 col-md-offset-3">
            <hr><p><?php echo $specimen_data[$specimen_id]['introduction']; ?></p><hr><br>
          </div>
        </div>


        <!-- Stl Viewer -->
        <h3 class="text-center"><i style="color:rgba(0, 0, 0, 0.2);" class="fa fa-dot-circle-o"></i><br><br></h3><h2 class="text-center">Virtual <?php echo $title; ?></h2><br>
        <div class="text-center clear">
        <div><a id="pop" data-placement="top" data-toggle="popover" title="Controls" placement="top" data-content="Left click and drag moves the orientation. Scrolling zooms in and out of the specimen. Spacebar toggles the split view. In this split view, holding ctrl + scrolling causes the section to move. Holding ctrl + left mouse button and then dragging creates an oblique section. Please note fullscreen is only supported by chrome and firefox.">CONTROL SCHEME</a></div>
        <br>
          <canvas class="emscripten" id="canvas" style="max-width:100%" oncontextmenu="event.preventDefault()" height="400px" width="550px"></canvas>
          <br>
          <!-- Fullscreen fails to work and logo removed is cleaner -->
          <!-- <div class="logo"></div> -->
          <div class="fullscreen"><a onclick="SetFullscreen(1);">ENTER FULLSCREEN VIEW</f></a></div>
        </div>

        <!-- Stl-Text -->
        <div class="row text-center">
          <div class="col-md-6 col-md-offset-3">
            <h3>What to look out for</h3><br>
            <h6 id="easy">EASY</h6>
            <blockquote ><?php echo $specimen_data[$specimen_id]['stl_one']; ?></blockquote>
            <h6 id="mild">MILD</h6>
            <blockquote ><?php echo $specimen_data[$specimen_id]['stl_two']; ?></blockquote>
            <h6 id="hard">TOUGH</h6>
            <blockquote ><?php echo $specimen_data[$specimen_id]['stl_three']; ?></blockquote>
            <hr>
            <br>
          </div>
        </div>

        <!-- Dicom Viewer (not working so dummy image is present at the moment)-->
        <h3 class="text-center"><i style="color:rgba(0, 0, 0, 0.2);" class="fa fa-plus-circle"></i><br><br></h3><h2 class="text-center">CT Scan</h2><br><br>
        <div class="text-center" style="align-items:middle;">
          <!-- <iframe src="../api/dwv/viewers/mobile/index.html" style="width:550px; height:400px; max-width: 100%; display: inline; margin-left: auto; margin-right: auto;"  allowfullscreen></iframe> -->
          <!-- <img src="../img/dicom_dummy.jpg" style="width:550px; max-width: 100%; display: inline; margin-left: auto; margin-right: auto;"> -->
        </div>

        <!-- Dicom-Text -->
        <div class="row text-center">
          <div class="col-md-6 col-md-offset-3">
            <!-- <br><p><?php echo $specimen_data[$specimen_id]['dicom_description']; ?></p> -->
            <p style="font-style:italic;"><?php echo $title; ?> CT Scan coming soon. Please come back later.</p><br>
            <br>
            <span class="intbut" style="display:inline; padding-bottom: 30px;"><a href="../exhibitions" id="afterarrow" style="font-size:18px;" class="btnl page-scroll"><f class="fa fa-arrow-circle-left"></f> <span style="font-size:18px;vertical-align:5%;" id="beforearrow">&nbsp;return to exhibitions&nbsp;</span></a></span>
          </div>
        </div>
        </div>
        </section>
        <hr>

        <!-- Footer -->
        <footer style="padding-bottom:20px;">
            <div class="col-lg-12 text-center">
                <div class="row">
                    <p>Copyright &copy; 2016 Rashed Karim, Kawal Rhode and Tobias Whetton. All Rights Reserved.</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>




    <!-- Enable Pop-Overs -->
    <script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();
});
</script>

    <!-- Unity -->
    <script type='text/javascript'>
    var Module = {
      TOTAL_MEMORY: 536870912,
      errorhandler: null,			// arguments: err, url, line. This function must return 'true' if the error is handled, otherwise 'false'
      compatibilitycheck: null,
      dataUrl: "../stl/<?php echo $specimen_data[$specimen_id]['specimen_id']; ?>/Release/stl.data",
      codeUrl: "../stl/<?php echo $specimen_data[$specimen_id]['specimen_id']; ?>/Release/stl.js",
      memUrl: "../stl/<?php echo $specimen_data[$specimen_id]['specimen_id']; ?>/Release/stl.mem",
    };
    </script>
    <script src="../stl/<?php echo $specimen_data[$specimen_id]['specimen_id']; ?>/Release/UnityLoader.js"></script>






</body>

</html>
