

                                    <?php

                                    session_start();
                                    error_reporting(0);

                                    $_SESSION['pfx'] = "abc";
                                    date_default_timezone_set('Africa/Tunis');
                                    /*date_default_timezone_set('Europe/Paris');*/
                                    setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
                                    include("../modules/Connection.class.php");
                                    include("../modules/Accounts.class.php");
                                    $db = new DB();
                                    $conn = $db->connect();
                                    require_once("../modules/Fiche.class.php");

if($_FILES["file1"]["name"]) {
    $filename = $_FILES["file1"]["name"];
    $source = $_FILES["file1"]["tmp_name"];
    $type = $_FILES["file1"]["type"];
    
    $name = explode(".", $filename);
    $accepted_types = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed');
    foreach($accepted_types as $mime_type) {
        if($mime_type == $type) {
            $okay = true;
            break;
        } 
    }
    
    $continue = strtolower($name[1]) == 'zip' ? true : false;
    if(!$continue) {
        $message = "The file you are trying to upload is not a .zip file. Please try again.";
    }

    $target_path = "../documents/".$filename;  // change this to the correct site path
    if(move_uploaded_file($source, $target_path)) {
        $zip = new ZipArchive();
        $x = $zip->open($target_path);
        if ($x === true) {
            $zip->extractTo("../documents/"); // change this to the correct site path
            $zip->close();
    
            unlink($target_path);
           
        }
        echo "Your .zip file was uploaded and unpacked.";
    } else {    
    echo  "There was a problem with the upload. Please try again.";
    }
}
?>