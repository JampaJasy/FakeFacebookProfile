<?php
$allow = array("jpg", "jpeg", "gif", "png");

$todir = 'assets/img/';


    $info = explode('.', strtolower( $_FILES['file']['name']) ); // whats the extension of the file
    if ( in_array( end($info), $allow) ) // is this file allowed
    {
        unlink('assets/img/testpf.png');
        $temp = explode(".", $_FILES["file"]["name"]);
        $newfilename = "testpf" . '.' . "png";
        move_uploaded_file($_FILES["file"]["tmp_name"], "assets/img/" . $newfilename);

    }
    else
    {
        // error this file ext is not allowed
    }

?>