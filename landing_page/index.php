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
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Museum project</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Specimens
                    <small><?php echo ucwords($SPECIMEN); ?></small>
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
                                <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                            </a>
                        </div>
                        <div class="col-md-5">
                            <h3><?php echo $specimen['title']; ?></h3>
                            <h4><?php echo $specimen['subtitle']; ?></h4>
                            <p><?php echo $specimen['description']; ?></p>
                            <a onclick="window.open(<?php echo "'../pages/load_dicom.php?specimen_id=".$specimen_id."'"; ?>);window.open(<?php echo "'../stl/".$specimen_id."/'"; ?>);" class="btn btn-primary" href="#">Explore Specimen <span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                    </div>
                    <hr>
                <?php 

            }       // end php foreach 
        ?>

      

        <hr>

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

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Rashed Karim and Kawal Rhode 2016</p>
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