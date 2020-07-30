<?php
function redirect($page = NULL , $message = NULL , $message_type = NULL ) {
    if(is_string($page)) {
        $location = $page ;
    } else {
        $location = $_SERVER['SCRIPT_NAME'] ;
    }

    if ($message != NULL)
        $_SESSION['message'] = $message ;


    if ($message_type != NULL)
        $_SESSION['message_type'] = $message_type ;

    header('location: '.$location) ;
    exit ;
}

function displayMessage() {
    if (!empty($_SESSION['message'])) {

        $message = $_SESSION['message'] ;

        if (!empty($_SESSION['message_type'])) {

            $message_type = $_SESSION['message_type'] ;

            if ($message_type == 'error') {
                echo '<div style="position : relative" id="alert" class="alert alert-danger">'.$message. '<button class="btn btn-outline-danger" style="color : white ; position : absolute ; right : 20px ; top : 5px ; cursor : pointer ;"  onclick="myFunction()">X</button>' .'</div>' ;
            } else {
                echo '<div style="position : relative" id="alert" class="alert alert-success">'.$message. '<button class="btn btn-outline-success" style="color : white ; position : absolute ; right : 20px ; top : 5px ; cursor : pointer ;" onclick="myFunction()">X</button>' .'</div>' ;
            }
        }

        unset($_SESSION['message']) ;
        unset($_SESSION['message_type']);

    } else {
        echo '' ;
    }
}