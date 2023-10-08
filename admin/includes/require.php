<?php

function redirect($url){
    echo"<script>window.location.href='$url';</script>";
}
function alert($type,$msg){
    $bs_class = ($type == "success") ? "alert-success" : "alert-danger";
    echo <<<alert
        <div class="custom-alert alert {$bs_class} alert-dismissible fade show" role="alert" style="position:fixed;top:80px;right:-20px;">
            <strong class="me-3">{$msg}</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        alert;
}

function adminLogin(){
    session_start();
    if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
        echo"<script>
            window.location.href='index.php';
        </script>";
    }
}

function insert($query, $values, $format_string) {
    global $conn;

    $stmt = $conn->prepare($query);
    $stmt->bind_param($format_string, ...$values);
    $stmt->execute();

    return $stmt->affected_rows;
}

function delete($query, $values, $format_string) {
    global $conn;

    $stmt = $conn->prepare($query);
    $stmt->bind_param($format_string, ...$values);
    $stmt->execute();

    return $stmt->affected_rows;
}

define('USERS_FOLDER','users/');
function uploadUserImage($image){
    $valid_mime = ['image/jpeg','image/png','image/webp'];
    $img_mime = $image['type'];

    if(!in_array($img_mime,$valid_mime)){ 
    return 'inv_img'; //invalid image mime or format
}

else{
    $ext = pathinfo($image['name'],PATHINFO_EXTENSION);
    $rname = 'IMG_'.random_int(11111,99999).".jpeg";

    $img_path = UPLOAD_IMAGE_PATH.USERS_FOLDER.$rname;

    if($ext == 'png' || $ext=='PNG'){
        $img = imagecreatefrompng($image['tmp_name']);
    }else{
        $img = imagecreatefromjpeg($image['tmp_name']);
    }
    if(imagejpeg($img,$img_path,70)){
        return $rname;

    }

    else{
        return 'upd_failed';

}

}
}
// require.php

// require.php




?>