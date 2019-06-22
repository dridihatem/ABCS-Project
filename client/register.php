<?php

session_start();
//error_reporting(0);

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
  require_once("modules/SMTP.php");
  require_once ("Library/MAILER/PHPmailer.php");
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

	<body class="login-body">
    
            	

               <div class="container">
<?php 
$msg = "";
if(isset($_POST['register'])){
$password = $_POST['password'];

// Validate password strength
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    $msg =  '<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
    Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.
    </div>
    ';
}else{
  $mail = new PHPMailer;

        $mail->IsSMTP();
        // Set mailer to use SMTP
        $mail->Host =  host;                 // Specify main and backup server
        $mail->Port = Port;                                    // Set the SMTP port
        $mail->SMTPAuth = SMTPAuth;                               // Enable SMTP authentication
        $mail->Username = username;                // SMTP username
        $mail->Password = password;                  // SMTP password
        $mail->SMTPSecure = SMTPSecure;                            // Enable encryption, 'ssl' also accepted

        $mail->From = 'contact@abcs.com';
        $mail->FromName = 'ABCS';
        $mail->AddAddress($_REQUEST['email'], $_REQUEST['nom']);  // Add a recipient
        $mail->AddAddress('contact@abcs.com' ,'ABCS');

        // Name is optional
        $mail->IsHTML(true);
        $body ='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html style="width:100%;font-family:arial, \'helvetica neue\', helvetica, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0;">
 <head> 
  <meta charset="UTF-8"> 
  <meta content="width=device-width, initial-scale=1" name="viewport"> 
  <meta name="x-apple-disable-message-reformatting"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta content="telephone=no" name="format-detection"> 
  <title>New email 7</title> 
  <!--[if (mso 16)]>
    <style type="text/css">
    a {text-decoration: none;}
    </style>
    <![endif]--> 
  <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--> 
  <link rel="shortcut icon" type="image/png" href="https://demo.stripo.email/assets/img/favicon.png"> 
  <style type="text/css">

#outlook a {
  padding:0;
}
.ExternalClass {
  width:100%;
}
.ExternalClass,
.ExternalClass p,
.ExternalClass span,
.ExternalClass font,
.ExternalClass td,
.ExternalClass div {
  line-height:100%;
}
.es-button {
  mso-style-priority:100!important;
  text-decoration:none!important;
}
a[x-apple-data-detectors] {
  color:inherit!important;
  text-decoration:none!important;
  font-size:inherit!important;
  font-family:inherit!important;
  font-weight:inherit!important;
  line-height:inherit!important;
}
.es-desk-hidden {
  display:none;
  float:left;
  overflow:hidden;
  width:0;
  max-height:0;
  line-height:0;
  mso-hide:all;
}
</style> 
 </head> 
 <body style="width:100%;font-family:arial, \'helvetica neue\', helvetica, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0;"> 
  <div class="es-wrapper-color" style="background-color:#F6F6F6;"> 
   <!--[if gte mso 9]>
      <v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
        <v:fill type="tile" color="#f6f6f6"></v:fill>
      </v:background>
    <![endif]--> 
   <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;"> 
     <tr style="border-collapse:collapse;"> 
      <td valign="top" style="padding:0;Margin:0;"> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;"> 
         <tr style="border-collapse:collapse;"> 
          <td align="center" style="padding:0;Margin:0;"> 
           <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;"> 
             <tr style="border-collapse:collapse;"> 
              <td align="left" style="padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px;"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                 <tr style="border-collapse:collapse;"> 
                  <td width="560" valign="top" align="center" style="padding:0;Margin:0;"> 
                   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                     <tr style="border-collapse:collapse;"> 
                      <td align="center" style="padding:15px;Margin:0;"> <img class="adapt-img" src="https://hcfje.stripocdn.email/content/guids/CABINET_4bc058bdd7e8e4db1730eb2a754f3d38/images/86911561221886490.png" alt style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;" width="200"></td> 
                     </tr> 
                   </table> </td> 
                 </tr> 
               </table> </td> 
             </tr> 
             <tr style="border-collapse:collapse;"> 
              <td align="left" style="padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px;"> 
               <table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                 <tr style="border-collapse:collapse;"> 
                  <td width="560" align="center" valign="top" style="padding:0;Margin:0;"> 
                   <table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                     <tr style="border-collapse:collapse;"> 
                      <td align="left" style="padding:0;Margin:0;"> <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, \'helvetica neue\', helvetica, sans-serif;line-height:21px;color:#333333;">
Dear '.$_POST['prenom'].' '.$_POST['nom'].'<br /><br />

Thanks for Registering. <br />

<strong>My information :</strong><br />
E-mail  : '.$_POST['email'].' <br />
Password  : '.$_POST['password'].' <br />

Click the link below to Activate your Account<br />

<a href="">Activate my account</a><br />

You must Activate your Account to Login
</p> </td> 
                     </tr> 
                   </table> </td> 
                 </tr> 
               </table> </td> 
             </tr> 
             <tr style="border-collapse:collapse;"> 
              <td align="left" style="padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px;"> 
               <table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                 <tr style="border-collapse:collapse;"> 
                  <td width="560" align="center" valign="top" style="padding:0;Margin:0;"> 
                   <table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                     <tr style="border-collapse:collapse;"> 
                      <td align="center" style="padding:0;Margin:0;display:none;"></td> 
                     </tr> 
                   </table> </td> 
                 </tr> 
               </table> </td> 
             </tr> 
           </table> </td> 
         </tr> 
       </table> </td> 
     </tr> 
   </table> 
  </div>  
 </body>
</html>';

        $mail->Subject ="Activate Your Account";
        $mail->Body    = $body;
        $mail->AltBody = 'Thanks for Registering. Click the link below to Acivate your Account';
        $mail->CharSet = "UTF-8";
        $mail->Send();
        
$client = new Accounts();
$client->setAccounts("",'',$_REQUEST["password"],md5($_REQUEST["password"]),$_REQUEST["nom"],$_REQUEST["prenom"],$_REQUEST["email"],0);
if($client->saveToDB()){
   $msg ='<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
   Please check your e-mail to activate your account
    </div>';
  }
}
}
?>
      <form class="form-signin" action="" method="POST">
        <h2 class="form-signin-heading"> <img src="assets/images/logo.png" style="width:125px;"/><br /><br />Registration now</h2>
        <div class="login-wrap">
          <?php echo $msg; ?>
            <p>Enter your personal details below</p>
            <input type="text" class="form-control" placeholder="Name" autofocus name="nom">
            <input type="text" class="form-control" placeholder="Surname" autofocus name="prenom">
            <input type="text" class="form-control" placeholder="Email" autofocus name="email">
            <input type="password" class="form-control" placeholder="Password" id="" name="password">
            
            
            <button class="btn btn-lg btn-login btn-block" type="submit" name="register">Submit</button>

            <div class="registration">
                Already Registered.
                <a class="" href="index.php">
                    Login
                </a>
            </div>

        </div>

      </form>

    </div>


	
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

    </body>
</html>
