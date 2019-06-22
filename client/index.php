<?php

session_start();
error_reporting(0);

$_SESSION['pfx'] = "abc";
date_default_timezone_set('Africa/Tunis');
/*date_default_timezone_set('Europe/Paris');*/
setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
require_once("modules/Connection.class.php");
$db = new DB();
$conn = $db->connect();

	require_once("controller/diversFunction.php");
	require_once("modules/Accounts.class.php");
	require_once("modules/Fiche.class.php");
	require_once("modules/Administrator.class.php");
	require_once("modules/Message.class.php");
/*function sanitize_output($buffer) {

$search = array(
'/\>[^\S ]+/s', // strip whitespaces after tags, except space
'/[^\S ]+\</s', // strip whitespaces before tags, except space
'/(\s)+/s'       // shorten multiple whitespace sequences
);

$replace = array(
'>',
'<',
'\\1'
);

$buffer = preg_replace($search, $replace, $buffer);

return $buffer;
}

ob_start("sanitize_output");*/
if(isset($_GET['disconnect'])){ unset($_SESSION["idClient"]);}
header('Content-Type: text/html; charset= utf-8', true);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<link href="assets/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-reset.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/js/jvector-map/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <link href="assets/css/clndr.css" rel="stylesheet">
    <!--clock css-->
    <link href="assets/js/css3clock/css/style.css" rel="stylesheet">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="assets/js/morris-chart/morris.css">
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet"/>

    <!--dynamic table-->
    <link href="assets/js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
    <link href="assets/js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/js/data-tables/DT_bootstrap.css" />

        <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-fileupload/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datetimepicker/css/datetimepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/jquery-multi-select/css/multi-select.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/jquery-tags-input/jquery.tagsinput.css" />
<link rel="stylesheet" type="text/css" href="assets/js/strength.css">
    <link rel="stylesheet" type="text/css" href="assets/js/select2/select2.css" />
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <title>Payslip Portal</title>
	</head>

	<body <?php if(!isset($_SESSION['idClient'])){echo ' class="login-body"';} else {echo '';}?>>
    
            	

               <?php
				if((isset($_SESSION["idClient"]))&&(!empty($_SESSION["idClient"]))){
					require("menu.php");
					echo '<section id="container">';
if(file_exists($_GET["pg"].".php"))
	{ require($_GET["pg"].".php"); }
else
	{ require("tableau-de-bord.php"); }
echo '</section>';
				}
				else{
				require("formAuthentification.php");
				}
			?>



	
<!-- Placed js at the end of the document so the pages load faster -->
<!--Core js-->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>
<script src="assets/bs3/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="assets/js/skycons/skycons.js"></script>
<script src="assets/js/jquery.scrollTo/jquery.scrollTo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>

<!--clock init-->
<script src="assets/js/css3clock/js/css3clock.js"></script>
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/jquery.customSelect.min.js" ></script>
<!--dynamic table-->
<script type="text/javascript" language="javascript" src="assets/js/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="assets/js/data-tables/DT_bootstrap.js"></script>

<script src="assets/js/select2/select2.js"></script>
<script src="assets/js/select-init.js"></script>


<!--common script init for all pages-->
<script src="assets/js/scripts.js"></script>
<script type="text/javascript" src="assets/js/strength.js"></script>
<script type="text/javascript" src="assets/js/powerjs.js"></script>
<script src="assets/js/advanced-form.js"></script>

<!--dynamic table initialization -->
<script src="assets/js/dynamic_table_init.js" type="text/javascript" ></script>

<link rel="stylesheet" href="assets/css/elfinder.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/theme.css" type="text/css">
<link rel="stylesheet" href="assets/themes/Material/css/theme.css" type="text/css">
  <script data-main="assets/js/main.default.js" src="assets/js/require.min.js"></script>
<script>
  define('elFinderConfig', {
    // elFinder options (REQUIRED)
    // Documentation for client options:
    // https://github.com/Studio-42/elFinder/wiki/Client-configuration-options
    defaultOpts : {
      url : 'php/connector.minimal.php' // connector URL (REQUIRED)
      ,commandsOptions : {
        edit : {
          extraOptions : {
            // set API key to enable Creative Cloud image editor
            // see https://console.adobe.io/
            creativeCloudApiKey : '',
            // browsing manager URL for CKEditor, TinyMCE
            // uses self location with the empty value
            managerUrl : ''
          }
        }
        ,quicklook : {
          // to enable CAD-Files and 3D-Models preview with sharecad.org
          sharecadMimes : ['image/vnd.dwg', 'image/vnd.dxf', 'model/vnd.dwf', 'application/vnd.hp-hpgl', 'application/plt', 'application/step', 'model/iges', 'application/vnd.ms-pki.stl', 'application/sat', 'image/cgm', 'application/x-msmetafile'],
          // to enable preview with Google Docs Viewer
          googleDocsMimes : ['application/pdf', 'image/tiff', 'application/vnd.ms-office', 'application/msword', 'application/vnd.ms-word', 'application/vnd.ms-excel', 'application/vnd.ms-powerpoint', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 'application/postscript', 'application/rtf'],
          // to enable preview with Microsoft Office Online Viewer
          // these MIME types override "googleDocsMimes"
          officeOnlineMimes : ['application/vnd.ms-office', 'application/msword', 'application/vnd.ms-word', 'application/vnd.ms-excel', 'application/vnd.ms-powerpoint', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 'application/vnd.oasis.opendocument.text', 'application/vnd.oasis.opendocument.spreadsheet', 'application/vnd.oasis.opendocument.presentation']
        }
      }
      // bootCalback calls at before elFinder boot up
      ,bootCallback : function(fm, extraObj) {
        /* any bind functions etc. */
        fm.bind('init', function() {
          // any your code
        });
        // for example set document.title dynamically.
        var title = document.title;
        fm.bind('open', function() {
          var path = '',
            cwd  = fm.cwd();
          if (cwd) {
            path = fm.path(cwd.hash) || null;
          }
          document.title = path? path + ':' + title : title;
        }).bind('destroy', function() {
          document.title = title;
        });
      }
    },
    managers : {
      // 'DOM Element ID': { /* elFinder options of this DOM Element */ }
      'elfinder': {}
    }
  });
</script>
    </body>
</html>
