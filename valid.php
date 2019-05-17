<?php

session_start();

if (!$_SESSION['loggedIn']){
    header('Location:index.php');
}


if ( !empty( $_POST['csrf_token'] ) && isset($_COOKIE["csrf_token"]) ) {
    if( $_COOKIE["csrf_token"] == $_POST['csrf_token'] ) {
        echo "Token is Valid";
    }else{
    	echo "Token is not Valid";
    }
}else{
	header('Location:form.php');
}

?>