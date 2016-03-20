<!DOCTYPE html>
<!-- <html manifest="cache.manifest"> -->
<html>

<head>
<title>DICOM Web Viewer</title>
<meta charset="UTF-8">
<meta name="description" content="DICOM Web Viewer (DWV) static version">
<meta name="keywords" content="DICOM,HTML5,JavaScript,medical,imaging,DWV">
<link type="text/css" rel="stylesheet" href="../../css/style.css">
<style type="text/css" >
body { background-color: #222; color: white;
  margin: 10px; padding: 0; font-size: 80%; }
#pageHeader h1 { display: inline-block; margin: 0; color: #fff; }
#pageHeader a { color: #ddf; }
#pageHeader .toolbar { display: inline-block; float: right; }
.toolbox li:first-child { list-style-type: none; padding-bottom: 10px; margin-left: -20px; }
#pageMain { position: absolute; height: 92%; width: 99%; bottom: 5px; left: 5px; background-color: #333; }
.infotl { color: #333; text-shadow: 0 1px 0 #fff; }
.infotr { color: #333; text-shadow: 0 1px 0 #fff; }
.dropBox { margin: 20px; }
</style>
<link type="text/css" rel="stylesheet" href="../../ext/jquery-ui/themes/ui-darkness/jquery-ui-1.11.4.min.css">
<!-- Third party -->
<script type="text/javascript" src="../../ext/jquery/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="../../ext/jquery-ui/jquery-ui-1.11.4.min.js"></script>
<script type="text/javascript" src="../../ext/flot/jquery.flot.min.js"></script>
<script type="text/javascript" src="../../ext/kinetic/kinetic-v5.1.1-06.10.min.js"></script>
<!-- decoders -->
<script type="text/javascript" src="../../ext/pdfjs/jpx.js"></script>
<script type="text/javascript" src="../../ext/pdfjs/util.js"></script>
<script type="text/javascript" src="../../ext/pdfjs/arithmetic_decoder.js"></script>
<script type="text/javascript" src="../../ext/rii-mango/lossless-min.js"></script>
<script type="text/javascript" src="../../ext/notmasteryet/jpg.js"></script>
<!-- Local -->
<script type="text/javascript" src="../../src/app/application.js"></script>
<script type="text/javascript" src="../../src/app/toolboxController.js"></script>
<script type="text/javascript" src="../../src/app/viewController.js"></script>
<script type="text/javascript" src="../../src/app/state.js"></script>
<script type="text/javascript" src="../../src/dicom/dicomParser.js"></script>
<script type="text/javascript" src="../../src/dicom/dictionary.js"></script>
<script type="text/javascript" src="../../src/gui/browser.js"></script>
<script type="text/javascript" src="../../src/gui/filter.js"></script>
<script type="text/javascript" src="../../src/gui/generic.js"></script>
<script type="text/javascript" src="../../src/gui/help.js"></script>
<script type="text/javascript" src="../../src/gui/html.js"></script>
<script type="text/javascript" src="../../src/gui/layer.js"></script>
<script type="text/javascript" src="../../src/gui/loader.js"></script>
<script type="text/javascript" src="../../src/gui/style.js"></script>
<script type="text/javascript" src="../../src/gui/tools.js"></script>
<script type="text/javascript" src="../../src/gui/undo.js"></script>
<script type="text/javascript" src="../../src/image/filter.js"></script>
<script type="text/javascript" src="../../src/image/geometry.js"></script>
<script type="text/javascript" src="../../src/image/image.js"></script>
<script type="text/javascript" src="../../src/image/luts.js"></script>
<script type="text/javascript" src="../../src/image/reader.js"></script>
<script type="text/javascript" src="../../src/image/view.js"></script>
<script type="text/javascript" src="../../src/io/file.js"></script>
<script type="text/javascript" src="../../src/io/url.js"></script>
<script type="text/javascript" src="../../src/math/bucketQueue.js"></script>
<script type="text/javascript" src="../../src/math/point.js"></script>
<script type="text/javascript" src="../../src/math/scissors.js"></script>
<script type="text/javascript" src="../../src/math/shapes.js"></script>
<script type="text/javascript" src="../../src/math/stats.js"></script>
<script type="text/javascript" src="../../src/tools/draw.js"></script>
<script type="text/javascript" src="../../src/tools/editor.js"></script>
<script type="text/javascript" src="../../src/tools/ellipse.js"></script>
<script type="text/javascript" src="../../src/tools/filter.js"></script>
<script type="text/javascript" src="../../src/tools/info.js"></script>
<script type="text/javascript" src="../../src/tools/line.js"></script>
<script type="text/javascript" src="../../src/tools/livewire.js"></script>
<script type="text/javascript" src="../../src/tools/protractor.js"></script>
<script type="text/javascript" src="../../src/tools/rectangle.js"></script>
<script type="text/javascript" src="../../src/tools/roi.js"></script>
<script type="text/javascript" src="../../src/tools/scroll.js"></script>
<script type="text/javascript" src="../../src/tools/toolbox.js"></script>
<script type="text/javascript" src="../../src/tools/undo.js"></script>
<script type="text/javascript" src="../../src/tools/windowLevel.js"></script>
<script type="text/javascript" src="../../src/tools/zoomPan.js"></script>
<script type="text/javascript" src="../../src/utils/string.js"></script>
<script type="text/javascript" src="../../src/utils/uri.js"></script>
<script type="text/javascript" src="../../src/utils/thread.js"></script>

<!-- Launch the app -->
<script type="text/javascript" src="appgui.js"></script>
<script type="text/javascript" src="applauncher.js"></script>
</head>

<body>

<!-- DWV -->
<div id="dwv">

<div id="pageHeader">

<!-- Title -->
<h1>DICOM Web Viewer
(<a href="https://github.com/ivmartel/dwv">dwv</a>
<span class="dwv-version"></span>)</h1>

<!-- Toolbar -->
<div class="toolbar"></div>

</div><!-- /pageHeader -->

<div id="pageMain">

<!-- Open file -->
<div class="openData" title="File">
<div class="loaderlist"></div>
<div id="progressbar"></div>
</div>

<!-- Toolbox -->
<div class="toolList" title="Toolbox"></div>

<!-- History -->
<div class="history" title="History"></div>

<!-- Tags -->
<div class="tags" title="Tags"></div>

<!-- Help -->
<div class="help" title="Help"></div>

<!-- Layer Container -->
<div class="layerDialog" title="Image">
<div class="dropBox"></div>
<div class="layerContainer">
<canvas class="imageLayer">Only for HTML5 compatible browsers...</canvas>
<div class="drawDiv"></div>
<div class="infoLayer">
<div class="infotl"></div>
<div class="infotr"></div>
<div class="infobl"></div>
<div class="infobr"><div class="plot"></div></div>
</div><!-- /infoLayer -->
</div><!-- /layerContainer -->
</div><!-- /layerDialog -->

</div><!-- /pageMain -->

</div><!-- /dwv -->


<?php 
	
	// Extract dicom   
	$dicom_folder = $_GET['folder']; 	   // under ../dicom 

?> 

<script>
	/**
	 * Application launcher.
	 */

	// check browser support
	dwv.browser.check();

	// launch when page is loaded
	$(document).ready( function()
	{
	    // main application
	    var myapp = new dwv.App();
	    // initialise the application
	    myapp.init({
	        "containerDivId": "dwv",
	        "fitToWindow": true,
	        "gui": ["tool"],
	        "tools": ["Scroll", "Zoom/Pan", "Window/Level"],
	        "isMobile": true
	    });
	    dwv.gui.appendResetHtml(myapp);

	    var dicom_folder = <?php echo "'".$dicom_folder."'" ?>; 
	    var dicom_file_list = [];

	  	$.get("read_dicom_images.php?folder="+dicom_folder, function(data, status){
        		
        		/*data = ["../dicom/hedgehog/1.3.6.1.4.1.12842.1.1.14.2.20160129.173014.188.2644821263", 
	    				"../dicom/hedgehog/1.3.6.1.4.1.12842.1.1.14.2.20160129.173014.188.4132043441", 
	    				"../dicom/hedgehog/1.3.6.1.4.1.12842.1.1.14.2.20160129.173014.189.1273933236"];		*/
        		dicom_file_list = data; 		
        		/*
        			$.each(data, function(i, dicom_file) {
        				dicom_file_list = dicom_file
        			}
        		*/
        		dicom_file_list = $.parseJSON(data);
        		myapp.loadURLs(dicom_file_list);

    	});
	    
	    /*myapp.loadURLs(["../dicom/hedgehog/1.3.6.1.4.1.12842.1.1.14.2.20160129.173014.188.2644821263", 
	    				"../dicom/hedgehog/1.3.6.1.4.1.12842.1.1.14.2.20160129.173014.188.4132043441", 
	    				"../dicom/hedgehog/1.3.6.1.4.1.12842.1.1.14.2.20160129.173014.189.1273933236"]);*/
	    
	});
</script>

</body>

</html>
