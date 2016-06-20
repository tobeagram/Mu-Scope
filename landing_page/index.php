<!--

Rashed Karim KCL 2016

The following template is taken from Boostrap portfolio template:
1 Col Portfolio - Start Bootstrap Template

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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600,600italic' rel='stylesheet' type='text/css'>


    <style>



    </style>
</head>
<?php

    include_once("../api/kcl/ServerLogs.php");
    include_once("../api/kcl/XMLConfig.php");

    // Read the XML config file
    $specimen_type = 'vertebrates';
    $xml_config = new XMLConfig('../xml/museum.xml');
    $specimen_data = $xml_config->GetSpecimenDataDigest($specimen_type);



?>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <img src="../img/KCL_logo.png" alt="KCL Logo" height="22">
                </a>
                <a class="navbar-brand" style="color:white;text-transform:uppercase;letter-spacing:0.03em;font-size:16px;" href="#">Museum <span style="font-size:12px;">of</span> Life Sciences</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a style="color:#fff;" href="#">collections</a>
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
    <div style="background:#F8F8F8;border-radius:8px;" class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
              <h1 class="page-header">Zoological Collection
                  <small><small><?php echo ucwords($specimen_type); ?></small></small>
              </h1>
            </div>
        </div>
        <!-- /.row -->

        <?php

            /*
            *   Each specimen loaded from config XML
            */
            foreach ($specimen_data as $specimen_id => $specimen)
            {
                ?>
                    <!-- Project One/Two/Three and so on -->
                    <div class="row">
                        <div class="col-md-7">
                            <a href="#">
                                <?php 


                                    if ($specimen['image'] == '')
                                        $image_url = '../img/img_placeholder_700_300.png';
                                    else 
                                        $image_url = $specimen['image'];

                                ?>
                                <img class="img-responsive" src="<?php echo $image_url; ?>" alt="">
                            </a>
                        </div>
                        <div class="col-md-5">
                            <h3><?php echo $specimen['title']; ?></h3>
                            <h4><?php echo $specimen['subtitle']; ?></h4>
                            <p><?php echo $specimen['description']; ?></p>
                            <?php 
                                    $specimen_name = $specimen['specimen_name']; 

                                    // URL for each specimen button is constructed here
                                    $url = '../specimen/specimen.php?specimen_type='.$specimen_type.'&specimen_name='.$specimen_name.'&specimen_id='.$specimen_id;
                            ?>
                            <a class="btn btn-primary" href=<?php echo $url; ?>>Explore Specimen <span class="glyphicon glyphicon-chevron-right"></span></a>
                            <!-- <a onclick="window.open(<?php echo "'../pages/load_dicom.php?specimen_id=".$specimen_id."'"; ?>);window.open(<?php echo "'../stl/".$specimen_id."/'"; ?>);" class="btn btn-primary" href="#">Explore Specimen <span class="glyphicon glyphicon-chevron-right"></span></a> -->
                        </div>
                    </div>
                    <hr>
                <?php

            }       // end php foreach
        ?>





        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>

                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12 text-center">
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
